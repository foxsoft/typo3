<?php
$generalGlobalVars = '$id,$doc,$AB,$BE_USER,$LANG,$BACK_PATH,$TCA_DESCR,$TCA,$HTTP_GET_VARS,$HTTP_POST_VARS,$HTTP_POST_FILES,$MOD_MENU,$MCONF,$MOD_SETTINGS,$CLIENT,$TYPO3_CONF_VARS,$SET';

$vars = "textExtensions|perms_clause|modTSconfig|e|sObj|edit";
$funcs = "tableRow|procesResources|resourceListForCopy|initialize_editor|displayExample|verify_TSobjects|getCountCacheTables|linkWrapTemplateTitle|noTemplate|templateMenu|createTemplate|setInPageArray|renderList";

//fileProcessor, CMD, pageinfo

$globalVars = $generalGlobalVars;
$scriptName = 'mod/web/ts/index';

echo '	
<PRE>
<textarea cols=120 rows=40 wrap="off">




1)  Search for "include" functions in global scope and observe their existence in what you do...

2) Set globals if not already:
global '.$globalVars.';

2b)
Find globals:
- S�g classes/functions for "global " og $GLOBALS - s� ved vi, hvad der forventes at v�re globalt!
- opm�rksom p� standard-globale: [\$"](imagemode|table|uid|target|type|FILEMOUNTS|WEBMOUNTS|TBE_TEMPLATE|TBE_STYLES|TBE_MODULES|PAGES_TYPES)

- G� init,main igennem, saml. liste
(- S�g classes: Disse skal v�re globale
(- S�g funktioner: disse KAN v�re global
(- Check global-definition i b�de classes of funktioner.
(- V�r opm�rksom p� interne enslydende variable.


Af den oprindelige liste ved du nu hvad der 
  1) skal v�re globale i main/init
  2) skal v�re internals
  3) som er lokale i funktionerne (ifht. funktions/classes)

3a) Erstat $content med $this->content

3) erstat variabler

--search:
\$('.$vars.')([^[:alnum:]_])
--replace:
$this->\1\2
--check
[^>]('.$vars.')

4) S�t variabler i header:

	var $'.implode(";
	var $",explode("|",$vars)).';

5) Funktions-kald:

--search:
([^[:alnum:]_])('.$funcs.')([[:space:]]*\()
--replace:
\1$this->\2\3
--check
[^>]('.$funcs.')


6) Gamle funktioner:
 - Fjerne "function $this->xxx" 
 - checke $this-> refs inde i existerende funktioner 
 - "global"? og $GLOBALS?

function $this->
function  

7) search $GLOBALS[









// ***************************
// Script Classes
// ***************************
class SC_'.str_replace("/","_",$scriptName).' {
	var $include_once=array();
	var $content;
	
	function init()	{
		global '.$globalVars.';

		$this->menuConfig();
	}
	function menuConfig()	{
		global '.$globalVars.';

	}
	function main()	{
		global '.$globalVars.';

	}
	function printContent()	{
		global '.$globalVars.';

	}
	
	// ***************************
	// OTHER FUNCTIONS:	
	// ***************************
}

// Include extension?
if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["typo3/'.$scriptName.'.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["typo3/'.$scriptName.'.php"]);
}












// Make instance:
$SOBE = t3lib_div::makeInstance("SC_'.str_replace("/","_",$scriptName).'");
$SOBE->init();

// Include files?
reset($SOBE->include_once);	
while(list(,$INC_FILE)=each($SOBE->include_once))	{include_once($INC_FILE);}

$SOBE->main();
$SOBE->printContent();


</textarea>
</PRE>';


?>