<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Ingo Renner <ingo@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


	// TODO implement autoloading so that we only require stuff we really need
require_once(PATH_t3lib . 'class.t3lib_cache.php');

require_once(PATH_t3lib . 'cache/backend/interfaces/interface.t3lib_cache_backend_backend.php');
require_once(PATH_t3lib . 'cache/frontend/interfaces/interface.t3lib_cache_frontend_frontend.php');

require_once(PATH_t3lib . 'cache/backend/class.t3lib_cache_backend_abstractbackend.php');
require_once(PATH_t3lib . 'cache/frontend/class.t3lib_cache_frontend_abstractfrontend.php');
require_once(PATH_t3lib . 'cache/class.t3lib_cache_exception.php');
require_once(PATH_t3lib . 'cache/class.t3lib_cache_factory.php');
require_once(PATH_t3lib . 'cache/class.t3lib_cache_manager.php');
require_once(PATH_t3lib . 'cache/frontend/class.t3lib_cache_frontend_variablefrontend.php');

require_once(PATH_t3lib . 'cache/exception/class.t3lib_cache_exception_classalreadyloaded.php');
require_once(PATH_t3lib . 'cache/exception/class.t3lib_cache_exception_duplicateidentifier.php');
require_once(PATH_t3lib . 'cache/exception/class.t3lib_cache_exception_invalidbackend.php');
require_once(PATH_t3lib . 'cache/exception/class.t3lib_cache_exception_invalidcache.php');
require_once(PATH_t3lib . 'cache/exception/class.t3lib_cache_exception_invaliddata.php');
require_once(PATH_t3lib . 'cache/exception/class.t3lib_cache_exception_nosuchcache.php');

require_once(PATH_t3lib . 'cache/backend/class.t3lib_cache_backend_dbbackend.php');

/**
 * Testcase for the DB cache backend
 *
 * @author	Ingo Renner <ingo@typo3.org>
 * @package TYPO3
 * @subpackage tests
 * @version $Id$
 */
class t3lib_cache_backend_DbBackendTestCase extends tx_phpunit_testcase {

	/**
	 * If set, the tearDown() method will clean up the cache table used by this unit test.
	 *
	 * @var t3lib_cache_backend_DbBackend
	 */
	protected $backend;

	protected $testingCacheTable;

	/**
	 * Sets up this testcase
	 *
	 * @return void
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setUp() {
		$this->testingCacheTable = 'test_cache_dbbackend';

		$GLOBALS['TYPO3_DB']->sql_query('CREATE TABLE ' . $this->testingCacheTable . ' (
			id int(11) unsigned NOT NULL auto_increment,
			identifier varchar(250) DEFAULT \'\' NOT NULL,
			crdate int(11) unsigned DEFAULT \'0\' NOT NULL,
			content mediumtext,
			tags mediumtext,
			lifetime int(11) unsigned DEFAULT \'0\' NOT NULL,
			PRIMARY KEY (id),
			KEY cache_id (identifier)
		) ENGINE=InnoDB;
		');

		$this->backend = t3lib_div::makeInstance(
			't3lib_cache_backend_DbBackend',
			array('cacheTable' => $this->testingCacheTable)
		);
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 * @expectedException t3lib_cache_Exception
	 */
	public function setCacheTableThrowsExceptionOnNonExistentTable() {
		$this->backend->setCacheTable('test_cache_non_existent_table');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getCacheTableReturnsThePreviouslySetTable() {
		$this->backend->setCacheTable($this->testingCacheTable);
		$this->assertEquals($this->testingCacheTable, $this->backend->getCacheTable(), 'getCacheTable() did not return the expected value.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 * @expectedException t3lib_cache_exception_InvalidData
	 */
	public function setThrowsExceptionIfDataIsNotAString() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = array('Some data');
		$entryIdentifier = 'BackendDbTest';

		$this->backend->setCache($cache);

		$this->backend->set($entryIdentifier, $data);
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setReallySavesToTheSpecifiedTable() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data            = 'some data' . microtime();
		$entryIdentifier = 'BackendDbTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data);

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			'identifier = \'' . $entryIdentifier . '\''
		);

		$this->assertEquals(
			$data,
			$entriesFound[0]['content'],
			'The original and the retrieved data don\'t match.'
		);
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setRemovesAnAlreadyExistingCacheEntryForTheSameIdentifier() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data1 = 'some data' . microtime();
		$data2 = 'some data' . microtime();
		$entryIdentifier = 'BackendDbRemoveBeforeSetTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data1, array(), 500);
			// setting a second entry with the same identifier, but different
			// data, this should _replace_ the existing one we set before
		$this->backend->set($entryIdentifier, $data2, array(), 200);

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			'identifier = \'' . $entryIdentifier . '\''
		);

		$this->assertEquals(1, count($entriesFound), 'There was not exactly one cache entry.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setReallySavesSpecifiedTags() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data, array('UnitTestTag%tag1', 'UnitTestTag%tag2'));

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			'identifier = \'' . $entryIdentifier . '\''
		);

		$tags = explode(',', $entriesFound[0]['tags']);

		$this->assertTrue(is_array($tags) && count($entriesFound) > 0, 'The tags do not exist.');
		$this->assertTrue(in_array('UnitTestTag%tag1', $tags), 'Tag UnitTestTag%tag1 does not exist.');
		$this->assertTrue(in_array('UnitTestTag%tag2', $tags), 'Tag UnitTestTag%tag2 does not exist.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getReturnsContentOfTheCorrectCacheEntry() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data, array(), 500);

		$data = 'some other data' . microtime();
		$this->backend->set($entryIdentifier, $data, array(), 100);

		$loadedData = $this->backend->get($entryIdentifier);

		$this->assertEquals($data, $loadedData, 'The original and the retrieved data don\'t match.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function hasReturnsTheCorrectResult() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data);

		$this->assertTrue($this->backend->has($entryIdentifier), 'has() did not return TRUE.');
		$this->assertFalse($this->backend->has($entryIdentifier . 'Not'), 'has() did not return FALSE.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function removeReallyRemovesACacheEntry() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbRemovalTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data);

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			'identifier = \'' . $entryIdentifier . '\''
		);

		$this->assertTrue(is_array($entriesFound) && count($entriesFound) > 0, 'The cache entry does not exist.');

		$this->backend->remove($entryIdentifier);

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			'identifier = \'' . $entryIdentifier . '\''
		);

		$this->assertTrue(count($entriesFound) == 0, 'The cache entry still exists.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function collectGarbageReallyRemovesAnExpiredCacheEntry() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbRemovalTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data, array(), 1);

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			'identifier = \'' . $entryIdentifier . '\''
		);

		$this->assertTrue(is_array($entriesFound) && count($entriesFound) > 0, 'The cache entry does not exist.');

		sleep(2);
		$this->backend->collectGarbage();

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			'identifier = \'' . $entryIdentifier . '\''
		);

		$this->assertTrue(count($entriesFound) == 0, 'The cache entry still exists.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function collectGarbageReallyRemovesAllExpiredCacheEntries() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbRemovalTest';

		$this->backend->setCache($cache);

		$this->backend->set($entryIdentifier . 'A', $data, array(), 1);
		$this->backend->set($entryIdentifier . 'B', $data, array(), 1);
		$this->backend->set($entryIdentifier . 'C', $data, array(), 1);

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			''
		);

		$this->assertTrue(is_array($entriesFound) && count($entriesFound) > 0, 'The cache entries do not exist.');

		sleep(2);
		$this->backend->collectGarbage();

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			''
		);

		$this->assertTrue(count($entriesFound) == 0, 'The cache entries still exist.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function findIdentifiersByTagFindsCacheEntriesWithSpecifiedTag() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$this->backend->setCache($cache);

		$data = 'some data' . microtime();
		$this->backend->set('BackendDbTest1', $data, array('UnitTestTag%test', 'UnitTestTag%boring'));
		$this->backend->set('BackendDbTest2', $data, array('UnitTestTag%test', 'UnitTestTag%special'));
		$this->backend->set('BackendDbTest3', $data, array('UnitTestTag%test'));

		$expectedEntry = 'BackendDbTest2';

		$actualEntries = $this->backend->findIdentifiersByTag('UnitTestTag%special');
		$this->assertTrue(is_array($actualEntries), 'actualEntries is not an array.');

		$this->assertEquals($expectedEntry, array_pop($actualEntries));
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function flushRemovesAllCacheEntries() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$this->backend->setCache($cache);

		$data = 'some data' . microtime();
		$this->backend->set('BackendDbTest1', $data, array('UnitTestTag%test'));
		$this->backend->set('BackendDbTest2', $data, array('UnitTestTag%test', 'UnitTestTag%special'));
		$this->backend->set('BackendDbTest3', $data, array('UnitTestTag%test'));

		$this->backend->flush();

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			''
		);

		$this->assertTrue(count($entriesFound) == 0, 'Still entries in the cache table');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function flushByTagRemovesCacheEntriesWithSpecifiedTag() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$this->backend->setCache($cache);

		$data = 'some data' . microtime();
		$this->backend->set('BackendDbTest1', $data, array('UnitTestTag%test', 'UnitTestTag%boring'));
		$this->backend->set('BackendDbTest2', $data, array('UnitTestTag%test', 'UnitTestTag%special'));
		$this->backend->set('BackendDbTest3', $data, array('UnitTestTag%test'));

		$this->backend->flushByTag('UnitTestTag%special');

		$this->assertTrue($this->backend->has('BackendDbTest1'), 'BackendDbTest1 does not exist anymore.');
		$this->assertFalse($this->backend->has('BackendDbTest2'), 'BackendDbTest2 still exists.');
		$this->assertTrue($this->backend->has('BackendDbTest3'), 'BackendDbTest3 does not exist anymore.');
	}


	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function hasReturnsTheCorrectResultForEntryWithExceededLifetime() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data);

		$expiredEntryIdentifier = 'ExpiredBackendDbTest';
		$expiredData = 'some old data' . microtime();
		$this->backend->set($expiredEntryIdentifier, $expiredData, array(), 1);

		sleep(2);

		$this->assertFalse($this->backend->has($expiredEntryIdentifier), 'has() did not return FALSE.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getReturnsFalseForEntryWithExceededLifetime() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendDbTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data);

		$expiredEntryIdentifier = 'ExpiredBackendDbTest';
		$expiredData = 'some old data' . microtime();
		$this->backend->set($expiredEntryIdentifier, $expiredData, array(), 1);

		sleep(2);

		$this->assertEquals($data, $this->backend->get($entryIdentifier), 'The original and the retrieved data don\'t match.');
		$this->assertFalse($this->backend->get($expiredEntryIdentifier), 'The expired entry could be loaded.');
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function findIdentifiersByTagReturnsEmptyArrayForEntryWithExceededLifetime() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$this->backend->setCache($cache);
		$this->backend->set('BackendDbTest', 'some data', array('UnitTestTag%special'), 1);

		sleep(2);

		$this->assertEquals(array(), $this->backend->findIdentifiersByTag('UnitTestTag%special'));
	}

	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setWithUnlimitedLifetimeWritesCorrectEntry() {
		$cache = $this->getMock('t3lib_cache_frontend_AbstractFrontend',
			array('getIdentifier', 'set', 'get', 'getByTag', 'has', 'remove'),
			array(),
			'',
			FALSE
		);

		$data = 'some data' . microtime();
		$entryIdentifier = 'BackendFileTest';

		$this->backend->setCache($cache);
		$this->backend->set($entryIdentifier, $data, array(), 0);

		$entriesFound = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			$this->testingCacheTable,
			''
		);

		$this->assertTrue(is_array($entriesFound), 'entriesFound is not an array.');

		$retrievedData = $entriesFound[0]['content'];
		$this->assertEquals($data, $retrievedData, 'The original and the retrieved data don\'t match.');
	}


	/**
	 * @test
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function tearDown() {
		$GLOBALS['TYPO3_DB']->sql_query(
			'DROP TABLE ' . $this->testingCacheTable . ';'
		);
	}

}

?>