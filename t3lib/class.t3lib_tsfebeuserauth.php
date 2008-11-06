<?php
/***************************************************************
*  Copyright notice
*
*  (c) 1999-2008 Kasper Skaarhoj (kasperYYYY@typo3.com)
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
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Class for TYPO3 backend user authentication in the TSFE frontend
 *
 * $Id$
 * Revised for TYPO3 3.6 July/2003 by Kasper Skaarhoj
 * XHTML compliant
 *
 * @author	Kasper Skaarhoj <kasperYYYY@typo3.com>
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *  103: class t3lib_tsfeBeUserAuth extends t3lib_beUserAuth
 *  129:     function extInitFeAdmin()
 *  154:     function extPrintFeAdminDialog()
 *
 *              SECTION: Creating sections of the Admin Panel
 *  250:     function extGetCategory_preview($out='')
 *  283:     function extGetCategory_cache($out='')
 *  321:     function extGetCategory_publish($out='')
 *  356:     function extGetCategory_edit($out='')
 *  400:     function extGetCategory_tsdebug($out='')
 *  433:     function extGetCategory_info($out='')
 *
 *              SECTION: Admin Panel Layout Helper functions
 *  506:     function extGetHead($pre)
 *  526:     function extItemLink($pre,$str)
 *  542:     function extGetItem($pre,$element)
 *  559:     function extFw($str)
 *  568:     function ext_makeToolBar()
 *
 *              SECTION: TSFE BE user Access Functions
 *  637:     function checkBackendAccessSettingsFromInitPhp()
 *  682:     function extPageReadAccess($pageRec)
 *  693:     function extAdmModuleEnabled($key)
 *  709:     function extSaveFeAdminConfig()
 *  741:     function extGetFeAdminValue($pre,$val='')
 *  783:     function extIsAdmMenuOpen($pre)
 *
 *              SECTION: TSFE BE user Access Functions
 *  818:     function extGetTreeList($id,$depth,$begin=0,$perms_clause)
 *  849:     function extGetNumberOfCachedPages($page_id)
 *
 *              SECTION: Localization handling
 *  888:     function extGetLL($key)
 *
 *              SECTION: Frontend Editing
 *  932:     function extIsEditAction()
 *  954:     function extIsFormShown()
 *  970:     function extEditAction()
 *
 * TOTAL FUNCTIONS: 25
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */











/**
 * TYPO3 backend user authentication in the TSFE frontend.
 * This includes mainly functions related to the Admin Panel
 *
 * @author	Kasper Skaarhoj <kasperYYYY@typo3.com>
 * @package TYPO3
 * @subpackage t3lib
 */
class t3lib_tsfeBeUserAuth extends t3lib_beUserAuth {
	/**
	 * Form field with login name.
	 *
	 * @var	string
	 */
	public $formfield_uname = '';

	/**
	 * Form field with password.
	 *
	 * @var	string
	 */
	public $formfield_uident = '';

	/**
	 * Form field with a unique value which is used to encrypt the password and username.
	 *
	 * @var	string
	 */
	public $formfield_chalvalue = '';

	/**
	 * Sets the level of security. *'normal' = clear-text. 'challenged' = hashed password/username.
	 * from form in $formfield_uident. 'superchallenged' = hashed password hashed again with username.
	 *
	 * @var	string
	 */
	public $security_level = '';

	/**
	 * Decides if the writelog() function is called at login and logout.
	 *
	 * @var	boolean
	 */
	public $writeStdLog = false;

	/**
	 * If the writelog() functions is called if a login-attempt has be tried without success.
	 *
	 * @var	boolean
	 */
	public $writeAttemptLog = false;

	/**
	 * This is the name of the include-file containing the login form. If not set, login CAN be anonymous. If set login IS needed.
	 *
	 * @var	string
	 */
	public $auth_include = '';

	/**
	 * Array of page related information (uid, title, depth).
	 *
	 * @var	array
	 */
	public $extPageInTreeInfo = array();

	/**
	 * General flag which is set if the adminpanel should be displayed at all.
	 *
	 * @var	boolean
	 */
	public $extAdmEnabled = false;

	/**
	 * Class for frontend editing.
	 *
	 * @var	t3lib_frontendedit
	 */
	public $frontendEdit = null;


	public function initializeFrontendEdit() {
		$this->extAdminConfig = $this->getTSConfigProp('admPanel');

		if (is_array($this->extAdminConfig['enable.'])) {
			foreach($this->extAdminConfig['enable.'] as $key => $value) {
				if ($value) {
						// @todo	Add support for controller switching (ie. TV controller)
					require_once(PATH_t3lib . 'class.t3lib_frontendedit.php');
					$classname = 't3lib_frontendedit';
					$this->frontendEdit = t3lib_div::makeInstance($classname);
					break;
				}
			}
		}
	}

	/*****************************************************
	 *
	 * TSFE BE user Access Functions
	 *
	 ****************************************************/

	/**
	 * Implementing the access checks that the typo3/init.php script does before a user is ever logged in.
	 * Used in the frontend.
	 *
	 * @return	boolean		Returns true if access is OK
	 * @see	typo3/init.php, t3lib_beuserauth::backendCheckLogin()
	 */
	public function checkBackendAccessSettingsFromInitPhp() {
		global $TYPO3_CONF_VARS;

		// **********************
		// Check Hardcoded lock on BE:
		// **********************
		if ($TYPO3_CONF_VARS['BE']['adminOnly'] < 0) {
			return false;
		}

		// **********************
		// Check IP
		// **********************
		if (trim($TYPO3_CONF_VARS['BE']['IPmaskList'])) {
			if (!t3lib_div::cmpIP(t3lib_div::getIndpEnv('REMOTE_ADDR'), $TYPO3_CONF_VARS['BE']['IPmaskList'])) {
				return false;
			}
		}


		// **********************
		// Check SSL (https)
		// **********************
		if (intval($TYPO3_CONF_VARS['BE']['lockSSL']) && $TYPO3_CONF_VARS['BE']['lockSSL'] != 3) {
			if (!t3lib_div::getIndpEnv('TYPO3_SSL')) {
				return false;
			}
		}

			// Finally a check from t3lib_beuserauth::backendCheckLogin()
		if (!$TYPO3_CONF_VARS['BE']['adminOnly'] || $this->isAdmin()) {
			return true;
		} else {
			return false;
		}
	 }


	/**
	 * Evaluates if the Backend User has read access to the input page record.
	 * The evaluation is based on both read-permission and whether the page is found in one of the users webmounts. Only if both conditions are true will the function return true.
	 * Read access means that previewing is allowed etc.
	 * Used in index_ts.php
	 *
	 * @param	array		The page record to evaluate for
	 * @return	boolean		True if read access
	 */
	public function extPageReadAccess($pageRec) {
		return $this->isInWebMount($pageRec['uid']) && $this->doesUserHaveAccess($pageRec, 1);
	}

	/*****************************************************
	 *
	 * TSFE BE user Access Functions
	 *
	 ****************************************************/

	/**
	 * Generates a list of Page-uid's from $id. List does not include $id itself
	 * The only pages excluded from the list are deleted pages.
	 *
	 * @param	integer		Start page id
	 * @param	integer		Depth to traverse down the page tree.
	 * @param	integer		$begin is an optional integer that determines at which level in the tree to start collecting uid's. Zero means 'start right away', 1 = 'next level and out'
	 * @param	string		Perms clause
	 * @return	string		Returns the list with a comma in the end (if any pages selected!)
	 */
	public function extGetTreeList($id, $depth, $begin=0, $perms_clause) {
		$depth=intval($depth);
		$begin=intval($begin);
		$id=intval($id);
		$theList='';

		if ($id && $depth > 0) {
			$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
						'uid,title',
						'pages',
						'pid=' . $id . ' AND doktype IN (' . $GLOBALS['TYPO3_CONF_VARS']['FE']['content_doktypes'] . ') AND deleted=0 AND ' . $perms_clause
					);
			while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
				if ($begin <= 0) {
					$theList .= $row['uid'].',';
					$this->extPageInTreeInfo[] = array($row['uid'], htmlspecialchars($row['title'],$depth));
				}
				if ($depth > 1) {
					$theList .= $this->extGetTreeList($row['uid'], $depth-1, $begin-1, $perms_clause);
				}
			}
		}
		return $theList;
	}

	/**
	 * Returns the number of cached pages for a page id.
	 *
	 * @param	integer		The page id.
	 * @return	integer		The number of pages for this page in the table "cache_pages"
	 */
	public function extGetNumberOfCachedPages($pageId) {
		$pageCache = $GLOBALS['typo3CacheManager']->getCache('cache_pages');
		$pageCacheEntries = $pageCache->findEntriesByTag('pageId_' . (int) $pageId);

		return count($pageCacheEntries);
	}





















	/*****************************************************
	 *
	 * Localization handling
	 *
	 ****************************************************/

	/**
	 * Returns the label for key, $key. If a translation for the language set in $this->uc['lang'] is found that is returned, otherwise the default value.
	 * IF the global variable $LOCAL_LANG is NOT an array (yet) then this function loads the global $LOCAL_LANG array with the content of "sysext/lang/locallang_tsfe.php" so that the values therein can be used for labels in the Admin Panel
	 *
	 * @param	string		Key for a label in the $LOCAL_LANG array of "sysext/lang/locallang_tsfe.php"
	 * @return	string		The value for the $key
	 */
	public function extGetLL($key) {
		global $LOCAL_LANG;
		if (!is_array($LOCAL_LANG)) {
			$GLOBALS['LANG']->includeLLFile('EXT:lang/locallang_tsfe.php');
			#include('./'.TYPO3_mainDir.'sysext/lang/locallang_tsfe.php');
			if (!is_array($LOCAL_LANG)) {
				$LOCAL_LANG = array();
			}
		}

		$labelStr = htmlspecialchars($GLOBALS['LANG']->getLL($key));	// Label string in the default backend output charset.

			// Convert to utf-8, then to entities:
		if ($GLOBALS['LANG']->charSet != 'utf-8') {
			$labelStr = $GLOBALS['LANG']->csConvObj->utf8_encode($labelStr, $GLOBALS['LANG']->charSet);
		}
		$labelStr = $GLOBALS['LANG']->csConvObj->utf8_to_entities($labelStr);

			// Return the result:
		return $labelStr;
	}

}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['t3lib/class.t3lib_tsfebeuserauth.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['t3lib/class.t3lib_tsfebeuserauth.php']);
}

?>
