<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 1999-2003 Kasper Sk�rh�j (kasper@typo3.com)
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
 * Main frameset of the TYPO3 backend
 * 
 * @author	Kasper Sk�rh�j <kasper@typo3.com>
 * @package TYPO3
 * @subpackage core
 *
 * Revised for TYPO3 3.6 2/2003 by Kasper Sk�rh�j
 */

require ('init.php');
require ('template.php');
require_once (PATH_t3lib.'class.t3lib_loadmodules.php');
require_once (PATH_t3lib.'class.t3lib_basicfilefunc.php');
require_once ('class.alt_menu_functions.inc');



// ***************************
// Script Class
// ***************************
class SC_alt_main {
	var $content;
	var $mainJScode;
	var $loadModules;
	var $alt_menuObj;
	
	/**
	 * Initialization
	 */
	function init()	{
		global $TBE_MODULES;

			// Initializes the backend modules structure for use later.
		$this->loadModules = t3lib_div::makeInstance('t3lib_loadModules');
		$this->loadModules->load($TBE_MODULES);

			// Instantiates thee menu object which will generate some JavaScript for the goToModule() JS function in this frameset.
		$this->alt_menuObj = t3lib_div::makeInstance('alt_menu_functions');
	}
	
	/**
	 * Generates the JavaScript code for the frameset.
	 */
	function generateJScode()	{
		global $BE_USER,$LANG;

		$pt3=t3lib_div::dirname(t3lib_div::getIndpEnv('SCRIPT_NAME')).'/';
		$goToModule_switch = $this->alt_menuObj->topMenu($this->loadModules->modules,0,"",4);
		$fsMod = implode(chr(10),$this->alt_menuObj->fsMod);
		
		$this->mainJScode='
	/**
	 * Function similar to PHPs  rawurlencode();
	 */
	function rawurlencode(str)	{
		var output = escape(str);
		output = str_replace("*","%2A", output);
		output = str_replace("+","%2B", output);
		output = str_replace("/","%2F", output);
		output = str_replace("@","%40", output);
		return output;
	}

	/**
	 * String-replace function
	 */
	function str_replace(match,replace,string)	{
		var input = ""+string;
		var matchStr = ""+match;
		if (!matchStr)	{return string;}
		var output = "";
		var pointer=0;
		var pos = input.indexOf(matchStr);
		while (pos!=-1)	{
			output+=""+input.substr(pointer, pos-pointer)+replace;
			pointer=pos+matchStr.length;
			pos = input.indexOf(match,pos+1);
		}
		output+=""+input.substr(pointer);
		return output;
	}

	/**
	 * TypoSetup object.
	 */
	function typoSetup	()	{
		this.PATH_typo3 = "'.$pt3.'";
		this.username = "'.$BE_USER->user['username'].'";
		this.uniqueID = "'.t3lib_div::shortMD5(uniqid('')).'";
	}
	var TS = new typoSetup();

	/**
	 * Functions for session-expiry detection:
	 */
	function busy()	{
		this.loginRefreshed = busy_loginRefreshed;
		this.checkLoginTimeout = busy_checkLoginTimeout;
		this.openRefreshWindow = busy_OpenRefreshWindow;
		this.busyloadTime=0;
		this.openRefreshW=0;
	}
	function busy_loginRefreshed()	{
		var date = new Date();
		this.busyloadTime = Math.floor(date.getTime()/1000);
		this.openRefreshW=0;
	}
	function busy_checkLoginTimeout()	{
		var date = new Date();
		var theTime = Math.floor(date.getTime()/1000);
		if (theTime > this.busyloadTime+'.intval($BE_USER->auth_timeout_field).'-10)	{
			return true;
		}
	}
	function busy_OpenRefreshWindow()	{
		vHWin=window.open("login_frameset.php","relogin","height=350,width=600,status=0,menubar=0");
		vHWin.focus();
		this.openRefreshW=1;
	}
	function busy_checkLoginTimeout_timer()	{
		if (busy.checkLoginTimeout())	{
			if (!busy.openRefreshW && confirm('.$GLOBALS['LANG']->JScharCode($LANG->sL('LLL:EXT:lang/locallang_core.php:mess.refresh_login')).'))	{
				busy.openRefreshWindow();
			}
		}
		window.setTimeout("busy_checkLoginTimeout_timer();",10*1000);
	}
	
	/**
	 * Launcing information window for records/files (fileref as "table" argument)
	 */
	function launchView(table,uid,bP)	{
		var backPath= bP ? bP : "";
		var thePreviewWindow="";
		thePreviewWindow = window.open(TS.PATH_typo3+"show_item.php?table="+escape(table)+"&uid="+escape(uid),"ShowItem"+TS.uniqueID,"height=300,width=410,status=0,menubar=0,resizable=0,location=0,directories=0,scrollbars=1,toolbar=0");
		if (thePreviewWindow && thePreviewWindow.focus)	{
			thePreviewWindow.focus();
		}
	}

	/**
	 * Loads a URL in the topmenuFrame
	 */
	function loadTopMenu(url)	{
		top.topmenuFrame.location = url;
	}
	
	/**
	 * Returns incoming URL (to a module) unless nextLoadModuleUrl is set. If that is the case nextLoadModuleUrl is returned (and cleared)
	 * Used by the shortcut frame to set a "intermediate URL"
	 */
	var nextLoadModuleUrl="";
	function getModuleUrl(inUrl)	{
		var nMU;
		if (top.nextLoadModuleUrl)	{
			nMU=top.nextLoadModuleUrl;
			top.nextLoadModuleUrl="";
			return nMU;
		} else {
			return inUrl;
		}
	}

	/**
	 * Print properties of an object
	 */
	function debugObj(obj,name)	{
		var acc;
		for (i in obj) {
			if (obj[i])	{
				acc+=i+":  "+obj[i]+"\n";
			}
		}			  
		alert("Object: "+name+"\n\n"+acc);
	}

	/**
	 * Initialize login expiration warning object
	 */
	var busy = new busy();	
	busy.loginRefreshed();
	busy_checkLoginTimeout_timer();

	/**
	 * Function used to switch switch module.
	 */
	var currentModuleLoaded = "";
	function goToModule(modName,cMR_flag)	{
		var cMR = 0;
		if (cMR_flag)	cMR=1;
	
		currentModuleLoaded=modName;
		
		switch(modName)	{'.$goToModule_switch.'
		}
	}

	/**
	 * Frameset Module object
	 *
	 * Used in main modules with a frameset for submodules to keep the ID between modules
	 * Typically that is set by something like this in a Web>* sub module:
	 *		if (top.fsMod) top.fsMod.recentIds["web"] = "\'.intval($this->id).\'";
	 * 		if (top.fsMod) top.fsMod.recentIds["file"] = "...(file reference/string)...";
	 */
	function fsModules()	{
		this.recentIds=new Array();
		this.currentMainLoaded="";
	}
	var fsMod = new fsModules();
	'.$fsMod.'

		// Used by Frameset Modules
	var condensedMode = '.($BE_USER->uc['condensedMode']?1:0).';
	var currentSubScript = "";	
		';
	}
	
	/**
	 * Creates the header and frameset of the backend interface
	 */
	function main()	{
		global $BE_USER,$TYPO3_CONF_VARS,$TYPO_VERSION;
		
			// Set doktype:
		$GLOBALS["TBE_TEMPLATE"]->docType="xhtml_frames";
			
			// Make JS:
		$this->generateJScode();
		$GLOBALS["TBE_TEMPLATE"]->JScode= '
			<script type="text/javascript" src="md5.js"></script>
			<script type="text/javascript" src="t3lib/jsfunc.evalfield.js"></script>
			<script type="text/javascript">
				/*<![CDATA[*/

				'.$this->mainJScode.'

				/*]]>*/
			</script>';

			// Title:
		$title = $TYPO3_CONF_VARS['SYS']['sitename'] ? $TYPO3_CONF_VARS['SYS']['sitename'].' [TYPO3 '.$TYPO_VERSION.']' : 'TYPO3 '.$TYPO_VERSION;

			// Start page header:
		$this->content.=$GLOBALS["TBE_TEMPLATE"]->startPage($title);

			// Creates frameset
		$fr_content = '<frame name="content" src="'.($BE_USER->uc['startInTaskCenter']&&t3lib_extMgm::isLoaded('taskcenter')?t3lib_extMgm::extRelPath('taskcenter').'task/frameset.php':'alt_intro.php').'" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" noresize="noresize" />';
		$fr_toplogo = '<frame name="toplogo" src="alt_toplogo.php" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" noresize="noresize" />';
		$fr_topmenu = '<frame name="topmenuFrame" src="alt_topmenu_dummy.php" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" noresize="noresize" />';

		$shortcutFrame=array();
		if ($BE_USER->getTSConfigVal('options.shortcutFrame'))	{
			$shortcutFrame['rowH']=',30';
			$shortcutFrame['frameDef']='<frame name="shortcutFrame" src="alt_shortcut.php" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" noresize="noresize" />';
		}
		
			// XHTML notice: ' framespacing="0" frameborder="0" border="0"' in FRAMESET elements breaks compatibility with XHTML-frames, but HOW ELSE can I control the visual appearance?
		if ($GLOBALS['BE_USER']->uc['noMenuMode'])	{
			$this->content.= '
			<frameset rows="32,*'.$shortcutFrame['rowH'].'" framespacing="0" frameborder="0" border="0">
				'.(!strcmp($BE_USER->uc['noMenuMode'],'icons') ? '
				<frameset cols="130,*" framespacing="0" frameborder="0" border="0">
					'.$fr_toplogo.'
					'.$fr_topmenu.'
				</frameset>' : '
				<frameset cols="130,130,*" framespacing="0" frameborder="0" border="0">
					'.$fr_toplogo.'
					<frame name="menu" src="alt_menu_sel.php" scrolling="no" noresize="noresize" />
					'.$fr_topmenu.'
				</frameset>').'
				'.$fr_content.'
				'.$shortcutFrame['frameDef'].'
			</frameset>
			';
		} else {
			$this->content.='
			<frameset rows="32,*'.$shortcutFrame['rowH'].'" framespacing="0" frameborder="0" border="0">
				<frameset cols="130,*" framespacing="0" frameborder="0" border="0">
					'.$fr_toplogo.'
					'.$fr_topmenu.'
				</frameset>
				<frameset cols="130,*" framespacing="0" frameborder="0" border="0">
					<frame name="menu" src="alt_menu.php" marginwidth="0" marginheight="0" scrolling="auto" noresize="noresize" />
					'.$fr_content.'
				</frameset>
				'.$shortcutFrame['frameDef'].'
			</frameset>
			';
		}
		$this->content.='

</html>';
	}

	/**
	 * Outputs it all.
	 */
	function printContent()	{
		echo $this->content;
	}
}

// Include extension?
if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['typo3/alt_main.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['typo3/alt_main.php']);
}











// ******************************
// Starting document output
// ******************************

// Make instance:
$SOBE = t3lib_div::makeInstance('SC_alt_main');
$SOBE->init();
$SOBE->main();
$SOBE->printContent();

?>