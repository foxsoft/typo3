<?php

########################################################################
# Extension Manager/Repository config file for ext: "dbal"
#
# Auto generated 27-06-2006 14:19
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Database Abstraction Layer',
	'description' => 'A database abstraction layer implementation for TYPO3 4.0 based on ADOdb and offering a lot of other features...',
	'category' => 'be',
	'shy' => 0,
	'dependencies' => 'adodb',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'beta',
	'internal' => 0,
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Karsten Dambekalns',
	'author_email' => 'k.dambekalns@fishfarm.de',
	'author_company' => 'TYPO3 Association',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '0.9.2',
	'_md5_values_when_last_written' => 'a:36:{s:9:"ChangeLog";s:4:"c75f";s:21:"class.ux_t3lib_db.php";s:4:"b648";s:23:"class.ux_t3lib_page.php";s:4:"2559";s:28:"class.ux_t3lib_sqlengine.php";s:4:"3113";s:28:"class.ux_t3lib_sqlparser.php";s:4:"5ac0";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"db0c";s:14:"ext_tables.php";s:4:"427e";s:14:"ext_tables.sql";s:4:"9a69";s:11:"CVS/Entries";s:4:"1db3";s:14:"CVS/Repository";s:4:"2282";s:8:"CVS/Root";s:4:"63b1";s:7:"CVS/Tag";s:4:"c437";s:12:"doc/TODO.txt";s:4:"8ff6";s:14:"doc/manual.sxw";s:4:"56f5";s:15:"doc/CVS/Entries";s:4:"f6b8";s:18:"doc/CVS/Repository";s:4:"351a";s:12:"doc/CVS/Root";s:4:"63b1";s:11:"doc/CVS/Tag";s:4:"c437";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"cf19";s:14:"mod1/index.php";s:4:"0b9d";s:18:"mod1/locallang.xml";s:4:"0b57";s:22:"mod1/locallang_mod.xml";s:4:"86ef";s:19:"mod1/moduleicon.gif";s:4:"8074";s:16:"mod1/CVS/Entries";s:4:"e0f5";s:19:"mod1/CVS/Repository";s:4:"16e3";s:13:"mod1/CVS/Root";s:4:"63b1";s:12:"mod1/CVS/Tag";s:4:"c437";s:45:"handlers/class.tx_dbal_handler_openoffice.php";s:4:"84f3";s:43:"handlers/class.tx_dbal_handler_rawmysql.php";s:4:"160b";s:40:"handlers/class.tx_dbal_handler_xmldb.php";s:4:"6651";s:20:"handlers/CVS/Entries";s:4:"b59b";s:23:"handlers/CVS/Repository";s:4:"77d9";s:17:"handlers/CVS/Root";s:4:"63b1";s:16:"handlers/CVS/Tag";s:4:"c437";}',
	'constraints' => array(
		'depends' => array(
			'adodb' => '4.70.0-',
			'php' => '4.1.0-',
			'typo3' => '3.8.1-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>
