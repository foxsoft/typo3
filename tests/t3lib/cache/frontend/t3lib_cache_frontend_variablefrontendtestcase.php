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


/**
 * Testcase for the variable cache frontend
 *
 * This file is a backport from FLOW3
 *
 * @author	Ingo Renner <ingo@typo3.org>
 * @package TYPO3
 * @subpackage tests
 * @version $Id$
 */
class t3lib_cache_frontend_VariableFrontendTestCase extends tx_phpunit_testcase {

	/**
	 * @test
	 * @author Robert Lemke <robert@typo3.org>
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setRejectsInvalidIdentifiers() {
		$theString = 'Just some value';
		$backend = $this->getMock('t3lib_cache_backend_Backend', array(), array(), '', FALSE);
		$backend->expects($this->never())->method('set');

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);

		foreach (array('', 'abc def', 'foo!', 'bar:', 'some/', 'bla*', 'one+', 'äöü', str_repeat('x', 251), 'x$', '\\a', 'b#', 'some&') as $entryIdentifier) {
			try {
				$cache->set($entryIdentifier, $theString);
				$this->fail('set() did no reject the entry identifier "' . $entryIdentifier . '".');
			} catch (InvalidArgumentException $exception) {
			}
		}
	}

	/**
	 * @test
	 * @author Robert Lemke <robert@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setPassesSerializedStringToBackend() {
		$theString = 'Just some value';
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);
		$backend->expects($this->once())->method('set')->with($this->equalTo('VariableCacheTest'), $this->equalTo(serialize($theString)));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$cache->set('VariableCacheTest', $theString);
	}

	/**
	 * @test
	 * @author Robert Lemke <robert@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function setPassesSerializedArrayToBackend() {
		$theArray = array('Just some value', 'and another one.');
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);
		$backend->expects($this->once())->method('set')->with($this->equalTo('VariableCacheTest'), $this->equalTo(serialize($theArray)));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$cache->set('VariableCacheTest', $theArray);
	}

	/**
	 * @test
	 * @author Robert Lemke <robert@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getFetchesStringValueFromBackend() {
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);
		$backend->expects($this->once())->method('get')->will($this->returnValue(serialize('Just some value')));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$this->assertEquals('Just some value', $cache->get('VariableCacheTest'), 'The returned value was not the expected string.');
	}

	/**
	 * @test
	 * @author Robert Lemke <robert@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getFetchesArrayValueFromBackend() {
		$theArray = array('Just some value', 'and another one.');
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);
		$backend->expects($this->once())->method('get')->will($this->returnValue(serialize($theArray)));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$this->assertEquals($theArray, $cache->get('VariableCacheTest'), 'The returned value was not the expected unserialized array.');
	}

	/**
	 * @test
	 * @author Robert Lemke <robert@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getFetchesFalseBooleanValueFromBackend() {
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);
		$backend->expects($this->once())->method('get')->will($this->returnValue(serialize(FALSE)));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$this->assertFalse($cache->get('VariableCacheTest'), 'The returned value was not the FALSE.');
	}

	/**
	 * @test
	 * @author Robert Lemke <robert@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function hasReturnsResultFromBackend() {
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);
		$backend->expects($this->once())->method('has')->with($this->equalTo('VariableCacheTest'))->will($this->returnValue(TRUE));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$this->assertTrue($cache->has('VariableCacheTest'), 'has() did not return TRUE.');
	}

	/**
	 * @test
	 * @author Sebastian Kurfuerst <sebastian@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function removeCallsBackend() {
		$cacheIdentifier = 'someCacheIdentifier';
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);

		$backend->expects($this->once())->method('remove')->with($this->equalTo($cacheIdentifier))->will($this->returnValue(TRUE));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$this->assertTrue($cache->remove($cacheIdentifier), 'remove() did not return TRUE');
	}

	/**
	 * @test
	 * @expectedException InvalidArgumentException
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getByTagRejectsInvalidTags() {
		$backend = $this->getMock('t3lib_cache_backend_Backend', array(), array(), '', FALSE);
		$backend->expects($this->never())->method('getByTag');

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$cache->getByTag('SomeInvalid\Tag');
	}

	/**
	 * @test
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 * @author Ingo Renner <ingo@typo3.org>
	 */
	public function getByTagCallsBackend() {
		$tag = 'sometag';
		$identifiers = array('one', 'two');
		$entries = array('one value', 'two value');
		$backend = $this->getMock('t3lib_cache_backend_AbstractBackend', array('get', 'set', 'has', 'remove', 'findIdentifiersByTag', 'findIdentifiersByTags', 'flush', 'flushByTag', 'flushByTags', 'collectGarbage'), array(), '', FALSE);

		$backend->expects($this->once())->method('findIdentifiersByTag')->with($this->equalTo($tag))->will($this->returnValue($identifiers));
		$backend->expects($this->exactly(2))->method('get')->will($this->onConsecutiveCalls(serialize('one value'), serialize('two value')));

		$cache = new t3lib_cache_frontend_VariableFrontend('VariableFrontend', $backend);
		$this->assertEquals($entries, $cache->getByTag($tag), 'Did not receive the expected entries');
	}

}

?>