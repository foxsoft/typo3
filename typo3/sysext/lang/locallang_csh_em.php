<?php
/**
 * Default  TCA_DESCR for "_MOD_tools_em"
 * TYPO3 CVS ID: $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'emconf_shy.alttitle' => 'Shy',
		'emconf_shy.description' => 'If set, the extension will normally be hidden in the EM because it might be a default extension or otherwise something which is not so important.',
		'emconf_shy.details' => 'Use this flag if an extension is of �rare interest� (which is not the same as un-important - just an extension not sought for very often...)
It does not affect whether or not it\'s enabled. Only display in EM.
Normally �shy� is set for all extensions loaded by default according to TYPO3_CONF_VARS.',
		'emconf_category.alttitle' => 'Category',
		'emconf_category.description' => 'Which category the extension belongs to.',
		'emconf_category.details' => '<b>be:</b> Backend (Generally backend oriented, but not a module) 

<b>module:</b> Backend modules (When something is a module or connects with one)

<b>fe:</b> Frontend (Generally frontend oriented, but not a �true� plugin)

<b>plugin:</b> Frontend plugins (Plugins inserted as a �Insert Plugin� content element) 

<b>misc:</b> Miscellaneous stuff (Where not easily placed elsewhere)

<b>example:</b> Example extension (Which serves as examples etc.)',
		'emconf_dependencies.alttitle' => 'Dependencies of other extensions?',
		'emconf_dependencies.description' => 'This is a list of other extension keys which this extension depends on being loaded BEFORE it self.',
		'emconf_dependencies.details' => 'The EM will manage that dependency while writing the extension list  to localconf.php',
		'emconf_conflicts.alttitle' => 'Conflicts with other extensions?',
		'emconf_conflicts.description' => 'List of extension keys of extensions with which this extension does not work (and so cannot be enabled before those other extensions are un-installed)',
		'emconf_priority.alttitle' => 'Requested Loading priority',
		'emconf_priority.description' => 'This tells the EM to try to put the extensions as the very first in the list. Default is last.',
		'emconf_module.alttitle' => 'Backend modules included',
		'emconf_module.description' => 'If any subfolders to an extension contains backend modules, those foldernames should be listed here.',
		'emconf_module.details' => 'It allows the EM to know about the existence of the module, which is important because the EM has to update the conf.php file of the module in order to set the correct TYPO3_MOD_PATH  constant.',
		'emconf_state.alttitle' => 'Development state',
		'emconf_state.description' => 'Which development state the extension is in.',
		'emconf_state.details' => '<b>alpha</b>
Very initial development. May do nothing at all. 

<b>beta</b>
Under current development. Should work partly but is not finished yet.

<b>stable</b>
Stable and used in production.

<b>experimental</b>
Nobody knows if this is going anywhere yet... Maybe still just an idea.

<b>test</b>
Test extension, demonstrates concepts etc.',
		'emconf_internal.alttitle' => 'Internally supported in core',
		'emconf_internal.description' => 'This flag indicates that the core source code is specifically aware of the extension.',
		'emconf_internal.details' => 'In order words this flag should convey the message that �this extension could not be written without some core source code modifications�.

An extension is not internal just because it uses TYPO3 general classes eg. those from t3lib/. 
True non-internal extensions are characterized by the fact that they could be written without making core source code changes, but relies only on existing classes  in TYPO3 and/or other extensions, plus its own scripts in the extension folder.',
		'emconf_clearCacheOnLoad.alttitle' => 'Clear cache when installed',
		'emconf_clearCacheOnLoad.description' => 'If set, the EM will request the cache to be cleared when this extension is installed.',
		'emconf_modify_tables.alttitle' => 'Existing tables modified',
		'emconf_modify_tables.description' => 'List of tablenames which are only modified - not fully created - by this extension.',
		'emconf_modify_tables.details' => 'Tables from this list found in the ext_tables.sql file of the extension ',
		'.alttitle' => 'EM',
		'.description' => 'The Extension Manager (EM)',
		'.details' => 'TYPO3 can be extended in nearly any direction without loosing backwards compatibility. The Extension API provides a powerful framework for easily adding, removing, installing and developing such extensions to TYPO3. This is in particular powered by the Extension Manager (EM) inside TYPO3.

�Extensions� is a term in TYPO3 which covers two other terms, plugins and modules.

A plugin is something that plays a role on the website itself. Eg. a board, guestbook, shop etc. It is normally enclosed in a PHP class and invoked through a USER or USER_INT cObject from TypoScript. A plugin is an extension in the frontend.

A module is a backend application which has it\'s own position in the administration menu. It requires backend login and works inside the framework of the backend. We might also call something a module if it exploits any connectivity of an existing module, that is if it simply adds itself to the function menu of existing modules. A module is an extension in the backend.',
		'emconf_private.alttitle' => 'Private',
		'emconf_private.description' => 'If set, this version is not shown in the public list in the online repository.',
		'emconf_private.details' => '"Private" uploads requires you to manually enter a special key (which will be shown to you after an upload has been completed) to be able to import and view details for the uploaded extension.
This is nice when you are working on something internally which you do not want others to look at.
You can set and clear the private flag every time you upload your extension.',
		'_emconf_private.seeAlso' => '_MOD_tools_em:emconf_download_password',
		'emconf_download_password.alttitle' => 'Download password',
		'emconf_download_password.description' => 'Additional password required for download of private extensions.',
		'emconf_download_password.details' => 'Anybody who knows the "special key" assigned to the private upload will be able to import it. Specifying an import password allows you to give away the download key for private uploads and also require a password given in addition. The password can be changed later on.',
		'_emconf_download_password.seeAlso' => '_MOD_tools_em:emconf_private',
		'emconf_type.alttitle' => 'Installation type',
		'emconf_type.description' => 'The type of the installation',
		'emconf_type.details' => 'The files for an extension are located in a folder named by the extension key. The location of this folder can be either inside typo3/sysext/,  typo3/ext/ or  typo3conf/ext/. The extension must be programmed so that it does automatically detect where it is located and can work from all three locations.

<b>Local location �typo3conf/ext/�:</b> This is where to put extensions which are local for a particular TYPO3 installation. The typo3conf/ dir is always local, containing local configuration (eg. localconf.php), local modules etc. If you put an extension here it will be available for this TYPO3 installation only. This is a �per-database� way to install an extension.

<b>Global location �typo3/ext/�:</b> This is where to put extensions which are global for the TYPO3 source code on the web server. These extensions will be available for any TYPO3 installation sharing the source code. 
When you upgrade your TYPO3 source code you probably want to copy the typo3/ext/ directory from the former source to the new source, overriding the default directory. In this way all global extension you use will be installed inside the new sourcecode. After that you can always enter TYPO3 and upgrade the versions if needed.
This is a �per-server� way to install an extension.

<b>System location �typo3/sysext/�:</b> This is system default extensions which cannot and should not be updated by the EM. 


<b>Loading precedence</b>
Local extensions take precedence which means that if an extension exists both in typo3conf/ext/ and typo3/ext/ the one in typo3conf/ext/ is loaded. Likewise global extension takes predence over system extensions. This means that extensions are loaded in the order of priority local-global-system. 
In effect you can therefore have - say - a �stable� version of an extension installed in the global dir (typo3/ext/) which is used by all your projects on a server sharing source code, but on a single experimental project you can import the same extension in a newer �experimental� version and for that particular project the locally available extension will be used instead.
',
		'emconf_doubleInstall.alttitle' => 'Installed twice or more?',
		'emconf_doubleInstall.description' => 'Tells you if the extensions is installed in more than one of the System, Global or Local locations.',
		'emconf_doubleInstall.details' => 'Because an extension can reside at three locations, System, Global and Local, this indicates if the extension is found in other locations than the current. In that case you should be aware which one of the extensions is loaded!',
		'emconf_rootfiles.alttitle' => 'Root files',
		'emconf_rootfiles.description' => 'List of the files in the extension folder. Does not list files in subfolders.',
		'emconf_dbReq.alttitle' => 'Database requirements',
		'emconf_dbReq.description' => 'Shows you the requirements to the database tables and fields, if any.',
		'emconf_dbReq.details' => 'This will read from the files ext_tables.sql and ext_tables_static+adt.sql and show you which tables, fields and static tables are required with this extension.',
		'emconf_dbStatus.alttitle' => 'Database requirements status',
		'emconf_dbStatus.description' => 'Displays the current status of the database compared to the extension requirements.',
		'emconf_dbStatus.details' => 'If the extension is loaded which will display and error message if some tables or fields are not present in the database as they should be!',
		'emconf_flags.alttitle' => 'Flags',
		'emconf_flags.description' => 'A list of special codes which tells you something about what parts of TYPO3 the extension touches.',
		'emconf_flags.details' => 'This is a list of the flags:

<b>Module:</b> A true backend main/sub module is found to be added.

<b>Module+:</b> The extension adds itself to the function menu of an existing backend module.

<b>loadTCA:</b> The extension includes a function call to t3lib_div::loadTCA for loading a table. This potentially means that the system is slowed down, because the full table description of some table is always included. However there probably is a good reason for this to happen. Probably the extension tries to manipulate the TCA-config for an existing table in order to extend it.

<b>TCA:</b> The extension contains configuration of a table in $TCA.

<b>Plugin:</b> The extension adds a frontend plugin to the plugin list in Content Element type "Insert Plugin".

<b>Plugin/ST43:</b> TypoScript rendering code for the plugin is added to the static template "Content (default)". "Plugin" and "Plugin/ST43" are commonly used together.

<b>Page-TSconfig:</b> Default Page-TSconfig is added.

<b>User-TSconfig:</b> Default User-TSconfig is added.

<b>TS/Setup:</b> Default TypoScript Setup is added.

<b>TS/Constants:</b> Default TypoScript Constants is added.
',
		'emconf_conf.description' => 'Shows if the extension has a template for further lowlevel configuration.',
		'emconf_TSfiles.alttitle' => 'Static TypoScript files',
		'emconf_TSfiles.description' => 'Shows which TypoScript static files may be present',
		'emconf_TSfiles.details' => 'If the files ext_typoscript_constants.txt and/or ext_typoscript_setup.txt is found in the extension folder their are included in the hierarchy of all TypoScript templates in TYPO3 right after the inclusion of other static templates.',
		'emconf_locallang.alttitle' => 'locallang-files',
		'emconf_locallang.description' => 'Shows which files named "locallang.php" are present in the extension folder (recursive search). Such files are usually used to present an array $LOCAL_LANG with labels for the application in the system languages.',
		'emconf_moduleNames.alttitle' => 'Backend Module names',
		'emconf_moduleNames.description' => 'Shows which module names was found inside the extension.',
		'emconf_classNames.alttitle' => 'PHP Class names',
		'emconf_classNames.description' => 'Shows which PHP-classes were found in .php and .inc files.',
		'emconf_errors.alttitle' => 'Errors',
		'emconf_errors.description' => 'Displays if any serious errors with the extension was discovered.',
		'emconf_NSerrors.alttitle' => 'Namespace errors',
		'emconf_NSerrors.description' => 'Certain naming convensions apply to extensions. This displays any violations found.',
		'emconf_NSerrors.details' => 'The naming convensions are defined in the "Inside TYPO3" document. To make naming as simple as possible, try to avoid underscores in your extension keys.',
	),
	'dk' => Array (
	),
	'de' => Array (
	),
	'no' => Array (
	),
	'it' => Array (
	),
	'fr' => Array (
	),
	'es' => Array (
	),
	'nl' => Array (
		'emconf_shy.alttitle' => 'Verlegen',
		'emconf_shy.description' => 'Als ingesteld zal deze extensie normaalgesproken verborgen zijn in de EM, omdat het een standaardextensie is of iets dat anders niet zo belangrijk is.',
		'emconf_shy.details' => 'Gebruik deze vlag als een extensie van weinig belang is (niet hetzelfde als onbelangrijk - gewoon een extensie die niet vaak gebruikt wordt...)
Normaalgesproken staat "verlegen" ingesteld voor alle extensies die standaard geladen worden aan de hand van TYPO3_CONF_VARS.',
		'emconf_category.alttitle' => 'Categorie',
		'emconf_category.description' => 'Categorie van deze extensie',
		'emconf_category.details' => '<b>be:</b> Backend (Backendgeori�nteerd, maar geen module)

<b>module:</b> Backend modules (Als iets een module is of van een module gebruik maakt)

<b>fe:</b> Frontend (Algemeen frontend geori�nteerd, maar geen "echte" plugin)

<b>plugin:</b> Frontend plugins (Plugins ingevoegd als een "Invoegen plugin" inhoudselement)

<b>div:</b> Diverse zaken (Die niet ergens anders ondergebracht kunnen worden)

<b>voorbeeld:</b> Voorbeeld extensie (Dient als voorbeeld)',
		'emconf_dependencies.alttitle' => 'Afhankelijk van andere extensies?',
		'emconf_dependencies.description' => 'Dit is een lijst van andere extensie waar deze extensie van afhankelijk is. Deze dienen geladen te worden VOOR de extensie zelf.',
		'emconf_dependencies.details' => 'De EM regelt de afhankelijkheid terwijl de extensielijst naar de localconf geschreven wordt.',
		'emconf_conflicts.alttitle' => 'Conflicteerd met andere extensies?',
		'emconf_conflicts.description' => 'Lijst van extensiesleutels van extensies die niet met deze extensie werken (en dus niet geactiveerd kan worden voordat deze andere extensies gede�nstalleerd zijn)',
		'emconf_priority.alttitle' => 'Gewenste volgorde van laden',
		'emconf_priority.description' => 'Dit zorgt ervoor dat de EM probeert de extensies als allereerste in de lijst zet. Standaard is laatste.',
		'emconf_module.alttitle' => 'Ge�ncludeerde backendmodules',
		'emconf_module.description' => 'Wanneer submappen van een extensie backendmodules bevatten dan dienen die mapnamen hier getoond te worden.',
		'emconf_module.details' => 'Dit zorgt ervoor dat de EM weet van het bestaan van de module. Dat is belangrijk, omdat de EM het conf.php bestand van de module moet actualiseren om de juiste TYPO3_MOD_PATH constante in te stellen.',
		'emconf_state.alttitle' => 'Ontwikkelingstoestand',
		'emconf_state.description' => 'In welke ontwikkelingstoestand de extensie zich bevindt.',
		'emconf_state.details' => '<b>alfa</b>
Beginstadium van ontwikkeling. Werkt misschien helemaal niet.V

<b>beta</b>
In ontwikkeling. Moet gedeeltelijk werken, maar is nog niet af.

<b>stabiel</b>
Stabiel en in productie.

<b>experimenteel</b>
Niemand weet waar dit naar toe gaat... Misschien gewoon een idee.

<b>test</b>
Test extensie voor concepten enz.',
		'emconf_internal.alttitle' => 'Intern ondersteunt in de core',
		'emconf_internal.description' => 'Deze vlag geeft aan dat de corecode zich specifiek bewust is van de aanwezigheid van de extensie.',
		'emconf_internal.details' => 'Deze vlag dient de boodschap over te  brengen dat "deze extensie niet geschreven kan worden zonder enige corebroncodemodificaties".

Een extensie is niet alleen intern omdat deze gebruik maakt van TYPO3\'s algemene classes zoals bijvoorbeeld die uit t3lib/. Daadwerkelijke niet-interne extensies worden gekarakteriseerd door het feit dat deze geschreven kunnen worden zonder gebruik te maken van corebroncodewijzigingen, maar alleen afhankelijk zijn van bestaande classes in TYPO3 en/of andere extensies plus eigen scripts in de extensiemap.',
		'emconf_clearCacheOnLoad.alttitle' => 'Cache leegmaken wanneer ge�nstalleerd',
		'emconf_clearCacheOnLoad.description' => 'Wanneer dit ingesteld is dan zal de EM een verzoek doen de cache leeg te maken zodra de extensie ge�nstalleerd is.',
		'emconf_modify_tables.alttitle' => 'Gewijzigde bestaande tabellen',
		'emconf_modify_tables.description' => 'Lijst van tabelnamen die alleen gewijzigd - niet aangemaakt - door deze extensie.',
		'emconf_modify_tables.details' => 'Tabellen van de lijst uit het ext_tables.sql bestand van deze extensie.',
		'.alttitle' => 'EM',
		'.description' => 'De extensie Manager (EM)',
		'emconf_moduleNames.alttitle' => 'Namen van backendmodules',
		'emconf_errors.alttitle' => 'Fouten',
		'emconf_NSerrors.alttitle' => 'Namespace fouten',
	),
	'cz' => Array (
		'emconf_shy.alttitle' => 'Stydliv�',
		'emconf_shy.description' => 'Pokud je nastaveno, bude roz���en� v EM b�n� skryto, proto�e to m��e b�t z�kladn� roz���en� nebo n�co jinak ne p��li� d�le�it�ho.',
		'emconf_shy.details' => 'Pou�ijte tento p��znak pokud je roz���en� "nezaj�mav�" (co� nen� to sam� jako ned�le�it� - jen je nikdo nehled� �asto ...)
Neovliv�uje, zda je nebo nen� zapnut�. Jen zobrazen� v EM.
B�n� je p��znak "stydliv�" nastaven pro v�echna roz���en�, kter� se nahr�vaj� podle TYPO3_CONF_VARS.',
	),
	'pl' => Array (
	),
	'si' => Array (
	),
	'fi' => Array (
		'emconf_shy.alttitle' => 'Piiloitteleva',
		'emconf_shy.description' => 'Jos t�m� on asetettu, on laajennsu normaalisti piiloitettu Laajennuksen Hallinnassa (EM) koska se voi olla oletuslaajennus tai muutoin sellainen joka ei olet �rke�.',
		'emconf_shy.details' => 'K�yt� t�t merkint�� kun laajennus on "vailla kiinnostusta" (mik� ei suinkaan tarkoita merkitykset�nt� - laajennus jota tarvitaan vain kovin harvoin...)
Ei vaikuta yleiseti toimintaa on ladattu vai ei. N�kyy ainoastaan Laajennusten Hallinnassa (EM).
Piiloitteleva (Shy) asetetaan yleens� laajennuksille jotka ladataan oletuksena TYPO3_CONF_VARS muuttujan mukaisesti.',
		'emconf_category.alttitle' => 'Luokka',
		'emconf_category.description' => 'Mihin luokkaan laajennus kuuluu.',
		'emconf_category.details' => '<b>be:</b> Tausta (yleens� taustaan liittyv�, muttei aliohjelma)

<b>module:</b> Tausta aliohjelma (On jokin aliohjelma tai liittyy sellaiseen)

<b>fe:</b> Etutoiminto (Yleisesti etutoimintaa liittyv� muttei suoranainen aliohjelma)

<b>plugin:</b> Etutoiminto laajennus (Laajennus joka asennetaan kuten "Lis�� Laajennus" (�Insert Plugin�) sis�lt� elementti)

<b>misc:</b> Satunnainen (Laajennus jota ei voi m��ritell� muualle)

<b>example:</b> Esimerkki laajennus (Laajennus joka on vain esimerkin luonteinen jne.)',
		'emconf_dependencies.alttitle' => 'Riippuvuudet muihin laajennuksiin ?',
		'emconf_dependencies.description' => 'T�m� on lista muiden laajennusten avaimista, jotka on ladattava ennenkuin t�m� laajennus ladataan.',
		'emconf_dependencies.details' => 'Laajennusten Hallinta (EM) hoitaa riippuvuuden kirjoittaessaan laajennusten listan localconf.php tiedostoon.',
		'emconf_conflicts.alttitle' => 'Konfliktit muiden laajennusten kanssa ?',
		'emconf_conflicts.description' => 'Lista t�m�n laajennuksen kanssa toimimattomien laajennusten avaimista (ja joita ei voi asettaa ennekuin nuo laajennukset on poistettu asennuksesta)',
		'emconf_priority.alttitle' => 'Haluttu lataamisen pririsointi',
		'emconf_priority.description' => 'T�m�n tarkoituksena on antaa Laajennusten Hallinnalle (EM) tieto laajennuksen asettamista ladattavaksi ensimm�isen�. Oletusarvo on lataus viimeisen�.',
		'emconf_module.alttitle' => 'Tausta-aliohjelmat jotka on lis�tty',
		'emconf_module.description' => 'Jos laajennuksen mik� tahansa hakemisto sis�lt�� tausta-aliohjelmia tulee ne (hakemistot) listata t�h�n.',
		'emconf_module.details' => 'T�m� mahdollistaa Laajennusten Hallinan (EM) tiet�v�n aliohjelmista, joka on tarpeen jotta Laajennusten Hallinta voi p�ivitt�� conf.php tiedoston jotta voidaan asettaa oikea TYPO3_MOD_PATH vakio.',
		'emconf_state.alttitle' => 'Kehitt�misen tila',
		'emconf_state.description' => 'Mihin kehitt�mitilaan laajennus kuuluu.',
		'emconf_state.details' => '<b>alpha</b>
Hyvin alkuvaihe. Voi olla ettei toimi lainkaan.

<b>beta</b>
Kehitt�misen alainen. Pit�isi toimia ainakin osittain muttei ole viimesitelty.

<b>stable</b>
Vaka ja tuotantokelpoinen.

<b>experimental</b>
Kukaan ei tied� miten tulee k�ym��n... Voi olla vain ajatuksen asteella.

<b>test</b>
Testilaajennus, kuvastaa konseptia, ajatusta jne.',
		'emconf_internal.alttitle' => 'Tuetaan sis�isesti ohjelmarungossa.',
		'emconf_internal.description' => 'T�m� merkint� osoittaa ett� ohjelmarunko on tietoinen laajennuksesta.',
		'emconf_internal.details' => 'Toisin sanoen, t�m� merkint� ilmoittaa ett� " t�t� laajennnusta ei voi ilman jotain runko-ohjeman muutosta".

Laajennus ei ole sis�inen vain siksi ett� se k�ytt�� jotain TYPO3n omialuokkia esim. luokkia t3lib/ hekemistosta.
Todellisia ei-sis�isi� laajennuksia luonnehtii se tosiasia ett� ne on voitu kirjoitaa ilman muutoksia runko-ohjelmistoon (core),vaan k�ytt�v�t vain jo olemassaolevia TYPO3n luokkia ja/tai muita laajennuksia, sek� omia scriptej� laajennuksen omassa hakemistossa.',
		'emconf_clearCacheOnLoad.alttitle' => 'Tyhj�� v�limuisti (cache) kun laajennus asennetaan.',
		'emconf_clearCacheOnLoad.description' => 'Jos asetettu, EM pyyt�� v�limuistin tyhjennett�v�ksi kun t�m� laajennus asennetaan.',
		'emconf_modify_tables.alttitle' => 'Olemassa olevia tauluja muotoiltu',
		'emconf_modify_tables.description' => 'Lista tauluista jotka ainoastaan muokataan - ei luoda - t�ll�laajennuksella.',
		'emconf_modify_tables.details' => 'Lista tauluista jotka ovat t�m�n laajennuksen ext_tables.sql tiedostossa.',
		'.alttitle' => 'Laajennuksen Hallinta (EM)',
		'.description' => 'Laajennuksen Hallinta (Extension Manager)',
		'.details' => 'TYPO3a voidaan laajentaa l�hes miten tahansa menett�m�tt� takaisin paluun mahdollisuutta. Laajennuksen k�ytt�liittym� (the Extension API) on tehokas perusta lis�t�, poistaa, asentaa je kehitt�� helposti laajennuksiaTYPO3een. T�t� avustaa erityisesti tehokas Laajennuksen Hallinta (EM) TYPO3essa sis�isesti.

"Laajennus" on TYPO3n termi joka kattaa kasi termi� lis�yksen (plugin) ja aliohjelman (module).

Lis�ys (plugin) on jotain jolla on rooli itse web-sivustolla. Esimerkikis. vieraskirja, kauppa jne. Se on normaalisti PHP luokkaja k�ynnistet��n USER tai USER_INT cObjektina TypoScriptill�. Lis�ys on laajennus edustatoimintoihin (www k�ytt�j�lle n�kyv� osa).

Aliohjelma on taustasovellus jolla on oma hallintavalikko taustatoiminnoissa. Se tarvitsee sis��nkirjoituksen taustatoimintoihin ja toimii taustatoimintojen sis�ll�. Voimme kutsua aliohjelmaksi my�s mit� tahansa joka liittyy johonkin muuhun laajennukseen, joka yksinkertaisesti lis�� toiminnan olemassa olevaan aliohjelmaan. Aliohjelma on laajennus taustatoimintoihin.',
		'emconf_private.alttitle' => 'Yksityinen',
		'emconf_private.description' => 'Jos asetettu, ei t�t� versiota n�ytet� julkisesti online laajennusvarastosta.',
		'emconf_private.details' => '"Yksityinen" lataus (upload) tarvitsee sinun k�sin lis��v�n erityisen avaimen (joka n�ytet��n kun olet suorittanut latauksen onnistuneesti) voidaksesi ladata ja n�hd� yksityiskohdat t�st� ladatusta laajennnuksesta.
T�m� on tarkoituksen mukaista (ja k�yt�nn�llist�) kun haluat itseksesi ty�skennell� jonkin laajennuksen kanssa jota et halua n�ytt�� muille.
Voit asettaa tai poistaa yksityisyys merkinn�n joka kerta kun lataat laajennuksen.',
		'emconf_download_password.alttitle' => 'Imuroinnin (download) salasana',
		'emconf_download_password.description' => 'Yksityisen laajennuksen imurointiin tarvittava pakollinen salasana',
		'emconf_download_password.details' => 'Kuka tahansa tiet�� laajennuksesi "erityis avaimen" voi hakea sen. Antamalla lataus salasanan voit antaaimurointi oikeuden yksityisiin laajennuksiisi jotka vaativat my�s salasanan. Salasanan voi vaihtaa my�hemmin.',
		'emconf_type.alttitle' => 'Asennuksen tyyppi',
		'emconf_type.description' => 'Asennuksen tyyppi',
		'emconf_type.details' => 'Laajennuksen tiedostot sijoitetaan laajennuksen avaimen mukaisesti nimettyyn  hakemistoon. T�m� hakemisto voi sijaita joko, typo3/sysext/, typo3/ext/ tai typo3conf/ext/ hakemistoissa. Laajennus on ohjelmoitava siten ett� se itse tiet��sijaintinsaja voi toimia mist� tahansa kolmesta sijaintimahdollisuudesta k�sin.

<b>Paikallinen sijainti �typo3conf/ext/�:</b> T�nne sijoitetaan laajennukset jotka ovat erityisi� t�lle TYPO3 installaatiolle. Hakemisto typo3conf/ on aina paikallinen, sis�lt��paikallisen konfiguroinnin (esim.localconf.php), paikalliset aliohjelmat jne. Jos sijoitat laajennuksen t�nne on se k�ytett�viss� vain t�ss� TYPO3 installaatiossa. Se on tietokantakohtainen.

<b>Globaali sijainti �typo3/ext/�:</b>  T�nne sijoitet��n TYPO3 installaation globaalit laajennukset. N�m� laajennukset ovat k�ytett�viss� kaikilleTYPO3 installaatiosssa.
Kun p�ivit�t TYPO3 l�hde koodiasi haluat varmasti kopioida typo3/ext/ hakemiston alkuper�isest�l�hteest� uudeksi l�hteeksi, kirjoittaen yli oleetushakemiston. N�in toimien kaikki k�ytt�m�si laajennukset asennetaan uuteen l�hdekoodiin. T�m�n j�lkeen voit siirty� TYPO3een ja p�ivitt�� ne versiot joita tarvitset.
T�m� on per-palvelin tapa installoida laajennus.

<b>System location �typo3/sysext/�:</b> T�m� on j�rjestelm�n oletus laajennukset joita ei voi eik�saa p�ivitt�� Laajennusten Hallinnalla (EM).

<b>Lataamisen j�rjestys</b>
Paikalliset laajennukset ovat etuoikeutettuja eli jos laajennus on sek�  typo3conf/ext/ ett� typo3/ext/ hakemistoissa typo3conf/ext/ hakemistossa oleva ladataan. Samoin globaalit laajennukset ovat etuoikeutettuja j�rjestelm�laajennuksiin n�hden. T�m� tarkoittaa ett� lataamisj�rjestys on paikallinen-globaali-j�rjestelm�.
Toisin sanoen Sinulla voi olla - sanokaamme - "vakaa" versio laajennuksesta joka on installoitu  globaaliin hakemistoon jota kaikki hankkeet k�ytt�v�t ja jakavat yhteisen koodin,  mutta yksitt�isess� hankeessa voi kokeilla samaa laajennusta "kokeilu" versiona ja jotain hanketta varten voit  k�ytt�� paikallista versiota.',
		'emconf_doubleInstall.alttitle' => 'Installoitu toistamiseen tai useammin ?',
		'emconf_doubleInstall.description' => 'Kertoo Sinullejoslaajennus on asennettu useamman kerran joko J�rjestelm� (System), Globaali (Global) tai Paikallinen (Local) hakemistoihin.',
		'emconf_doubleInstall.details' => 'Koska laajennukset voidaan sijoittaa kolmeen eri paikkaan, System, Global tai Local,osoittaa t�m� jos laajennus on muissakin kuin t�m�n hetkisess�. T�ss� tapauksessa varmista mist� hakemistosta laajennus ladataan.',
		'emconf_rootfiles.alttitle' => 'Juuren tiedostot',
		'emconf_rootfiles.description' => 'Lista tiedostoissa laajennuksen hakemistossa.Ei sis�ll� tiedostoja alahakemistoista.',
		'emconf_dbReq.alttitle' => 'Tietokantavaatimukset',
		'emconf_dbReq.description' => 'N�ytt�� vaatimukset tietokannan tauluihin ja tietoihin, jos mit��n.',
		'emconf_dbReq.details' => 'T�m� lukee tiedostoista ext_tables.sql ja ext_tables_static+adt.sql n�ytt�en mit� tauluja, tietoja sek� staattisia tauluja tarvitaan t�ss� laajennuksessa.',
		'emconf_dbStatus.alttitle' => 'Tietokantavaatimusten tila',
		'emconf_dbStatus.description' => 'N�ytt�� tietokannantilan verrattuna laajennuksen vaatimuksiin.',
		'emconf_dbStatus.details' => 'N�ytt�� virheilmoituksen jos laajennus on ladattu eik� tietokannan taulut tai tiedot vastaa sit� miten niiden tulisi olla.',
		'emconf_flags.alttitle' => 'Merkinn�t',
		'emconf_flags.description' => 'Lista erityisist� koodeista jotka kertovat mit� TYPO3n osia laajennus koskee.',
		'emconf_flags.details' => 'T�m� on lista merkinn�ist�:

<b>Module:</b> Todellinen tausta ohjelma/aliohjelmajoka onl�ydetty lis�tt�v�ksi.

<b>Module+:</b> Laajennus lis�� itsens� jo olemassa olevan tausta aliohjelman valikkoon.

<b>loadTCA:</b> Laajennus sis�lt�� toiminta kutsun t3lib_div::loadTCA taulun lataamiseksi. T�m� mahdollisesti tarkoittaa j�rjestelm�n hidastumista, koska t�ydellinen kuvaus joistakin tauluista on aina muistissa. Voi olla ett�t�h�n on hyv�kin syy. Voi olla ett� laajennus yritt�� manipuloida TCA-config tietoja laajentaakseen olemassa olevaa taulua.

<b>TCA:</b> Laajennus sis�lt�� taulun konfiguraation $TCAssa.

<b>Plugin:</b> Laajennus lis�� edustatoimintojen lis�yksen lis�ytten listalle Sis�lt� Elementtien tyypiksi "Lis�� plugin".

<b>Plugin/ST43:</b> TypoScript toiminta koodi lis�ykselle on lis�tty stattiseen mallinteeseen"Sis�lt� (oletus)" ("Content (default)"). "Plugin" ja "Plugin/ST43" k�ytet��n yleisesti yhdess�.

<b>Page-TSconfig:</b> Oletus Page-TSconfig on lis�tty.

<b>User-TSconfig:</b> Oletus User-TSconfig on lis�tty.

<b>TS/Setup:</b> Oletus TypoScript Asetukset (Setup) on lis�tty.

<b>TS/Constants:</b> Oletus TypoScript Vakiot on lis�tty.',
		'emconf_conf.description' => 'N�ytt�� jos laajennuksella on mallinne (template) alemman tason konfigurointia varten.',
		'emconf_TSfiles.alttitle' => 'Staattiset TypoScript tiedostot',
		'emconf_TSfiles.description' => 'N�ytt�� mitk� staattiset TypoScript tiedostot voivat olla voimassa',
		'emconf_TSfiles.details' => 'Jos tiedostot ext_typoscript_constants.txt ja/tai ext_typoscript_setup.txt l�ytyv�t laajennuksen hakemistosta ne lis�t��n kaikkiiTypoScript mallinteisiin heti muiden staatisten mallinteiden j�lkeen.',
		'emconf_locallang.alttitle' => 'locallang-tiedostot',
		'emconf_locallang.description' => 'N�ytt�� mit� "locallang.php" tiedostoja l�ytyy laajennuksen hakemistoista (rekursiivinen haku). N�m� tiedostot ovat yleens� $LOCAL_LANG taulokoita joissa on tekstit sovelluksen kullekin j�rjestelm�n kielelle.',
		'emconf_moduleNames.alttitle' => 'Tausta aliohjelmien nimet',
		'emconf_moduleNames.description' => 'N�ytt�� mitk� aliohjelmien nimet l�ytyv�t laajennuksesta.',
		'emconf_classNames.alttitle' => 'PHP Luokka nimet',
		'emconf_classNames.description' => 'N�ytt�� mitk� PHP-luokat l�ytyv�t .phpja .inc tiedostoista.',
		'emconf_errors.alttitle' => 'Virheet',
		'emconf_errors.description' => 'T�m� n�ytt�� jos laajennuksesta l�ytyy vakavia virheit�.',
		'emconf_NSerrors.alttitle' => 'Namespace virheit�',
		'emconf_NSerrors.description' => 'Laajennusten nime�miseen on olemassa k�yt�nt�. T�m� n�ytt�� mit� virheit� l�ytyy.',
		'emconf_NSerrors.details' => 'Nime�misk�yt�nt� on selvitetty "Inside TYPO3" dokumentissa. Nimien pit�miseksi mahdollisimman yksinkertaisina, pyri v�ltt�m��n alaviivan k�ytt�� laajennustesi nimiss�.',
	),
	'tr' => Array (
	),
	'se' => Array (
		'emconf_shy.alttitle' => 'Blyg',
		'emconf_shy.description' => 'N�r detta �r valt, kommer extensionen att g�mmas i EM eftersom den kanske �r en standardextension eller n�got, som inte �r s� viktigt.',
		'emconf_shy.details' => 'Anv�nd denna "flagga" om en extension �r mindre intressant (vilket inte betyder att den skulle vara ointressan - men en som inte s�ks s� ofta...)
Det har ingen betydelse om extensionen �r till�ten eller inte. Visas endast i EM. Normalt ger man v�rdet "Blyg" �t alla de extensions, som laddas som standard enligt TYPO3_CONF_VARS.',
		'emconf_category.alttitle' => 'Kategori',
		'emconf_category.description' => 'Ber�ttar vilken kategori extensionen h�r till.',
		'emconf_category.details' => '<b>be:</b> Backend (I regel f�r backend, men inte en modul)

<b>module:</b> Backend moduler (Om n�gonting �r en modul eller h�r till en s�dan)

<b>fe:</b> Frontend (I regel f�r frontend, men inte en riktig plugin)

<b>plugin:</b> Frontend plugin (Plugins som kan infogas som ett "Infoga plugin"-inneh�llselement)

<b>misc:</b> Material av olika art (S�dant som �r sv�rt att placera n�gon annanstans)

<b>example:</b> Exempel p� extensions (Fungeras om exempel osv.)',
		'emconf_dependencies.alttitle' => 'Beroende av andra extensions?',
		'emconf_dependencies.description' => 'Detta �r en lista p� andra extension-nycklar som denh�r extensionen �r beroende av att laddas F�RE sig sj�lv.',
		'emconf_dependencies.details' => 'EM kan sk�ta om beroendet genom att skriva extension-listan till localconf.php',
		'emconf_conflicts.alttitle' => 'Konflikt med en annan extension?',
		'emconf_conflicts.description' => 'En lista �ver extension-nycklar med vilka denna extension inte fungerar (och kan allts� inte startas f�re den andra extensionen �r avinstallerad)',
		'emconf_priority.alttitle' => 'Beg�rd laddningsprioritet',
		'emconf_priority.description' => 'Ber�ttar f�r EM att f�rs�ka l�gga denna extension som den allra f�rsta i listan. Standard �r att den l�ggs till i slutet.',
		'emconf_module.alttitle' => 'Backend-moduler inkluderade',
		'emconf_module.description' => 'Om n�gon extensions underkatalog inneh�ller en backend-modul, skall deras katalognamn listas h�r.',
		'emconf_module.details' => 'Ger EM en m�jlighet att veta om en modul,  som �r viktig d�rf�r att EM m�ste uppdatera modulens conf.php-fil f�r att r�tt konstant TYPO3_MOD_PATH skall st�llas in.',
		'emconf_state.alttitle' => 'Utvecklingsskede',
		'emconf_state.description' => 'Ber�ttar vilket utvecklingsskede extensionen �r i.',
		'emconf_state.details' => '<b>alpha</b>
Utvecklingen p� mycket tidigt stadie. Kanske inte g�r n�got alls. 

<b>beta</b>
Utveckling p� g�ng. Fungerar delvis men arbetet forts�tter.

<b>stable</b>
Stabil och i produktivt bruk.

<b>experimental</b>
Ingen vet om deth�r skall bli n�got.. Kanske bara en id�.

<b>test</b>
Test-extension, demonstrerar olika s�tt mm.',
		'emconf_internal.alttitle' => 'Full internatinell support',
		'emconf_internal.description' => 'Denna m�rkning betyder att k�rnk�llkoden �r uppm�rksam p� extensionen.',
		'emconf_internal.details' => 'Med andra ord betyder denna m�rkning, att "denna extension kunde inte skrivas utan att n�gra �ndringar i k�rnk�llkoden gjordes".

En extension �r inte intern bara d�rf�r att den anv�nder TYPO3:s allm�nna klasser, dvs fr�n t3lib/.
�kta icke-interna extensioner karakt�riseras av det faktum att de kan skrivas utan att g�ra �ndringar i k�rnk�llkoden, men de �r endast relaterade till existerande klasser i TYPO3 och/eller andra extensioner, plus deras egna skript i extensionsfoldern.',
		'emconf_clearCacheOnLoad.alttitle' => 'T�m mellanminnet efter installationen',
		'emconf_clearCacheOnLoad.description' => 'Om detta �r valt, kommer EM att beg�ra att mellanminnet t�ms d� extensionen �r installerad.',
		'emconf_modify_tables.alttitle' => 'Existerande tabeller �ndrade',
		'emconf_modify_tables.description' => 'En lista p� de tabeller, som endast �ndrats - inte skapats - av denna extension.',
		'emconf_modify_tables.details' => 'Tabeller fr�n denna lista finns i ext_tables.sql-filen i extensionen',
		'.alttitle' => 'EM',
		'.description' => 'Extension-managern (EM)',
		'.details' => 'TYPO3 can be extended in nearly any direction without loosing backwards compatibility. The Extension API provides a powerful framework for easily adding, removing, installing and developing such extensions to TYPO3. This is in particular powered by the Extension Manager (EM) inside TYPO3.

�Extensions� is a term in TYPO3 which covers two other terms, plugins and modules.

A plugin is something that plays a role on the website itself. Eg. a board, guestbook, shop etc. It is normally enclosed in a PHP class and invoked through a USER or USER_INT cObject from TypoScript. A plugin is an extension in the frontend.

A module is a backend application which has it\'s own position in the administration menu. It requires backend login and works inside the framework of the backend. We might also call something a module if it exploits any connectivity of an existing module, that is if it simply adds itself to the function menu of existing modules. A module is an extension in the backend.',
		'emconf_private.alttitle' => 'Privat',
		'emconf_private.description' => 'Om f�rkryssad kommer denna version inte att synas i den offentliga listan.',
		'emconf_private.details' => '"Private" uploads requires you to manually enter a special key (which will be shown to you after an upload has been completed) to be able to import and view details for the uploaded extension.
This is nice when you are working on something internally which you do not want others to look at.
You can set and clear the private flag every time you upload your extension.',
		'emconf_download_password.alttitle' => 'L�senord f�r nerladdning',
		'emconf_download_password.description' => 'Ett extra l�senord som beh�vs f�r att ladda ner privata extensioner.',
		'emconf_download_password.details' => 'Anybody who knows the "special key" assigned to the private upload will be able to import it. Specifying an import password allows you to give away the download key for private uploads and also require a password given in addition. The password can be changed later on.',
		'emconf_type.alttitle' => 'Installationstyp',
		'emconf_type.description' => 'Typ av installation',
		'emconf_type.details' => 'The files for an extension are located in a folder named by the extension key. The location of this folder can be either inside typo3/sysext/, typo3/ext/ or typo3conf/ext/. The extension must be programmed so that it does automatically detect where it is located and can work from all three locations.

<b>Local location �typo3conf/ext/�:</b> This is where to put extensions which are local for a particular TYPO3 installation. The typo3conf/ dir is always local, containing local configuration (eg. localconf.php), local modules etc. If you put an extension here it will be available for this TYPO3 installation only. This is a �per-database� way to install an extension.

<b>Global location �typo3/ext/�:</b> This is where to put extensions which are global for the TYPO3 source code on the web server. These extensions will be available for any TYPO3 installation sharing the source code. 
When you upgrade your TYPO3 source code you probably want to copy the typo3/ext/ directory from the former source to the new source, overriding the default directory. In this way all global extension you use will be installed inside the new sourcecode. After that you can always enter TYPO3 and upgrade the versions if needed.
This is a �per-server� way to install an extension.

<b>System location �typo3/sysext/�:</b> This is system default extensions which cannot and should not be updated by the EM. 


<b>Loading precedence</b>
Local extensions take precedence which means that if an extension exists both in typo3conf/ext/ and typo3/ext/ the one in typo3conf/ext/ is loaded. Likewise global extension takes predence over system extensions. This means that extensions are loaded in the order of priority local-global-system. 
In effect you can therefore have - say - a �stable� version of an extension installed in the global dir (typo3/ext/) which is used by all your projects on a server sharing source code, but on a single experimental project you can import the same extension in a newer �experimental� version and for that particular project the locally available extension will be used instead.',
		'emconf_doubleInstall.alttitle' => 'Installerad dubbelt eller �nnu flere g�ner?',
		'emconf_doubleInstall.description' => 'Ber�ttar om extensionen �r installerad i flere �n ett system, globalt eller lokalt st�lle.',
		'emconf_doubleInstall.details' => 'Because an extension can reside at three locations, System, Global and Local, this indicates if the extension is found in other locations than the current. In that case you should be aware which one of the extensions is loaded!',
		'emconf_rootfiles.alttitle' => 'Rotfiler',
		'emconf_rootfiles.description' => 'Listar filerna i extensionens katalog. Visar inte filer i underkataloger.',
		'emconf_dbReq.alttitle' => 'Databasens krav',
		'emconf_dbReq.description' => 'Visar vilka krav databasens tabeller och f�lt st�ller, om n�gra.',
		'emconf_dbReq.details' => 'This will read from the files ext_tables.sql and ext_tables_static+adt.sql and show you which tables, fields and static tables are required with this extension.',
		'emconf_dbStatus.alttitle' => 'Statusen av databasens krav',
		'emconf_dbStatus.description' => 'Visar nuvarande st�llningen i databasen j�mf�rd med extensionens krav.',
		'emconf_dbStatus.details' => 'If the extension is loaded which will display and error message if some tables or fields are not present in the database as they should be!',
		'emconf_flags.alttitle' => 'Flaggor',
		'emconf_flags.description' => 'En lista p� specialkoder som ber�ttar n�gonting om vilka delar av TYPO3 som extensionen ber�r.',
		'emconf_flags.details' => 'This is a list of the flags:

<b>Module:</b> A true backend main/sub module is found to be added.

<b>Module+:</b> The extension adds itself to the function menu of an existing backend module.

<b>loadTCA:</b> The extension includes a function call to t3lib_div::loadTCA for loading a table. This potentially means that the system is slowed down, because the full table description of some table is always included. However there probably is a good reason for this to happen. Probably the extension tries to manipulate the TCA-config for an existing table in order to extend it.

<b>TCA:</b> The extension contains configuration of a table in $TCA.

<b>Plugin:</b> The extension adds a frontend plugin to the plugin list in Content Element type "Insert Plugin".

<b>Plugin/ST43:</b> TypoScript rendering code for the plugin is added to the static template "Content (default)". "Plugin" and "Plugin/ST43" are commonly used together.

<b>Page-TSconfig:</b> Default Page-TSconfig is added.

<b>User-TSconfig:</b> Default User-TSconfig is added.

<b>TS/Setup:</b> Default TypoScript Setup is added.

<b>TS/Constants:</b> Default TypoScript Constants is added.',
		'emconf_conf.description' => 'Visar om extensionen har en template f�r framtida l�gniv�konfigurering.',
		'emconf_TSfiles.alttitle' => 'Statiska TypoScript filer',
		'emconf_TSfiles.description' => 'Visar vilka statiska TypoScript-filer kan f�rekomma',
		'emconf_TSfiles.details' => 'If the files ext_typoscript_constants.txt and/or ext_typoscript_setup.txt is found in the extension folder their are included in the hierarchy of all TypoScript templates in TYPO3 right after the inclusion of other static templates.',
		'emconf_locallang.alttitle' => 'locallang-filer',
		'emconf_locallang.description' => 'Shows which files named "locallang.php" are present in the extension folder (recursive search). Such files are usually used to present an array $LOCAL_LANG with labels for the application in the system languages.',
		'emconf_moduleNames.alttitle' => 'Backend-modulernas namn',
		'emconf_moduleNames.description' => 'Visar vilka modulnamn som hittades i extensionen',
		'emconf_classNames.alttitle' => 'PHP klassnamn',
		'emconf_classNames.description' => 'Visar vilka PHP-klasser som hittades i .php och .inc filerna.',
		'emconf_errors.alttitle' => 'Fel',
		'emconf_errors.description' => 'Visar allvarliga fel i extensionen.',
		'emconf_NSerrors.alttitle' => 'Fel i namnen',
		'emconf_NSerrors.description' => 'Vissa ben�mningsregler finns f�r extensionerna. H�r visas eventuella fel i namnen.',
		'emconf_NSerrors.details' => 'The naming convensions are defined in the "Inside TYPO3" document. To make naming as simple as possible, try to avoid underscores in your extension keys.',
	),
	'pt' => Array (
	),
	'ru' => Array (
	),
	'ro' => Array (
	),
	'ch' => Array (
		'emconf_shy.alttitle' => 'Shy',
		'emconf_shy.description' => '�������,��չͨ������EM�б�����,��Ϊ��Ҳ����һ��Ĭ�ϵ���չ������һЩ����Ҫ�Ķ���.',
		'emconf_shy.details' => '�����չ�ǡ�������Ȥ��(������ͬ�ڲ���Ҫ - ֻ����չ����������Ѱ...)��ʹ�ô˱��
����Ӱ�����Ƿ����.ֻ����EM����ʾ.
ͨ������TYPO3_CONF_VARSΪ����ȱʡ�����װ�ص���չ���á�shy��.',
		'emconf_category.alttitle' => '����',
		'emconf_category.description' => '��չ����ʲô����.',
		'emconf_category.details' => '<b>���:</b> ��� (ͨ��������,������һ��ģ��) 

<b>ģ��:</b> ���ģ�� (�����һ��ģ�����һ������)

<b>ǰ��:</b> ǰ�� (ͨ������ǰ��,������һ�� ���桱���)

<b>���:</b> ǰ�˲��(�����Ϊһ����������������Ԫ�ر����� ) 

<b>����:</b> ����Ԫ�� (�������ױ���������ʲô�ط�)

<b>����:</b> ������չ (��Ϊ���ӵ�)',
		'emconf_dependencies.alttitle' => '������������չ?',
		'emconf_dependencies.description' => '����һ��������չ�����б�,�����չ��ȡ������������֮ǰ��װ��.',
		'emconf_dependencies.details' => '�ڽ���չ�б�д��localconf.phpʱEM�����������ϵ',
		'emconf_conflicts.alttitle' => '��������չ��ͻ?',
		'emconf_conflicts.description' => '���д���չ����չ����չ��������(������������չж��ǰ���ܳ�Ϊ����)',
		'emconf_priority.alttitle' => '�����װ������Ȩ',
		'emconf_priority.description' => '�����EM���Ű���չ�ŵ��б����ǰ.ȱʡ������������.',
		'emconf_module.alttitle' => '�������ģ��',
		'emconf_module.description' => '�������չ���κ���Ŀ¼�������ģ��,��Щ�ļ�������Ӧ�ڴ˱��г�.',
		'emconf_module.details' => '������EM��֪ģ��Ĵ���,�����Ҫ.��ΪEM�������ģ���conf.php�ļ���������ȷ��TYPO3-MOD_PATH����.',
		'emconf_state.alttitle' => '����״̬',
		'emconf_state.description' => '��չ���ĸ�����״̬��.',
		'emconf_state.details' => '<b>alpha</b>
����Ŀ���.����������ʲô. 

<b>beta</b>
���ڿ���. ���ֿ��Թ�������δ���.

<b>�ȶ���</b>
�ȶ��Ĳ���ʹ���ڲ�Ʒ��.

<b>ʵ��</b>
û����ָ����������...����ֻ��һ���뷨.

<b>����</b>
������չ,֤�������.',
		'emconf_internal.alttitle' => '�������ڲ�֧��',
		'emconf_internal.description' => '�˱�Ǳ�ʾ����չ������Դ����.',
		'emconf_internal.details' => '����˵���˱��Ӧ�ô������Ϣ������չû��һЩ����Դ������޸Ĳ�
�ܱ�д������.
һ��չ�����ڲ��ľ���Ϊ��ʹ���˴�t3lib/����TYPO3��ͨ��.
���������ڲ�����չ����������ص����ܲ�����Դ���뱻��д, ����
��������TYPO3�е����/��������չ, �������Լ�����չ�ļ����е�
ԭ��.',
		'emconf_clearCacheOnLoad.alttitle' => '����װʱ����洢',
		'emconf_clearCacheOnLoad.description' => '�������,��չ����������Ҫ����洢������չ��װʱ.',
		'emconf_modify_tables.alttitle' => '���еı���޸�',
		'emconf_modify_tables.description' => '��������б����������޸Ķ��Ǳ���ȫ����-�ڴ���չ��',
		'emconf_modify_tables.details' => '���б�ı������ext_tables.sql�ļ�����չ��',
		'.alttitle' => '��չ������',
		'.description' => '��չ������(EM)',
		'.details' => 'TYPO3���ڼ����κη�������費�ȶ������ļ������±���չ.��չ
API�Լ򵥵����, �����Ϳ�����������չ��TYPO3���ṩһ��ǿ���
���. ����ͨ����չ��������TYPO3���ر���ƶ���.
"��չ"��TYPO3����Ŀ������������������Ŀ, �����ģ��.
���������ҳ��ִ�����������һ������. ����һ���װ�, �ͻ���, �̵�
��. ��ͨ�����������һ��PHP�ಢ��and ͨ��һ��USER��USER_INT
cObject ��TypoScript�е���. һ���������ǰ���е�һ����չ.
һ��ģ����һ�����Ӧ�ó����������Լ��ڹ������˵��е�λ�õ�. ��
��Ҫ��˵�½�����ں�˿���й���.���ǿ���Ҳ��һЩ����ģ�����
�������κδ���ģ�����ͨ��, �Ǿ���������򵥵�������Լ�������
ģ��Ĺ��ܲ˵�. һ��ģ�����ں���е�һ����չ.',
		'emconf_private.alttitle' => '˽�˵�',
		'emconf_private.description' => '�������,�˰汾û�������ߴ洢�������б�����ʾ.',
		'emconf_private.details' => '"˽��"�ϴ���Ҫ���ֶ�����һ���ر�Կ��(��һ���ϴ���ɺ�����Ϊ��
��ʾ)��������͹ۿ��ϴ���չ��ϸ��.
�������ڲ�������ʱ��������ʹ�����˿������Ĺ������Ƿǳ��õ�.
�������κ�ʱ�����ò����˽�˱�ǵ����ϴ�������չʱ.',
		'emconf_download_password.alttitle' => '��������',
		'emconf_download_password.description' => '˽����չ������Ҫ���������.',
		'emconf_download_password.details' => '�κ�����"�ر�Կ��"�����˽���ϴ����˽��ܹ�������.��ָ���������� allows you to give away the download key for private uploads and also require a password given in addition.            ���������ڲ��ñ��ı�.The password can be changed later on.',
		'emconf_type.alttitle' => '��װ����',
		'emconf_type.description' => '��װ������',
		'emconf_type.details' => '�˶���չ���ļ��Ƕ�λ��һ������չԿ���������ļ�����. �ļ����е�
��λ��������typo3/sysext/, typo3/ext/�� typo3conf/ext/��. ��չ��
�뱻�滮���������Զ�������λλ�ò�����������3����λ��λ�ù���.
<b>�ֲ���λ��typo3conf/ext/��:</b> ���ǰ���չ���õ��������
TYPO3�ر�װ�Ǿֲ���.typo3conf/ dir���Ǿ� ����,�����ֲ�����(��
��localconf.php), �ֲ�ģ���. ������ڴ˷���һ����չ�������Դ�
TYPO3��װ����.����һ��"��һ-���ݿ�"��������װһ����չ.
<b>ȫ�ֶ�λ��typo3/ext/��:</b>���ǰ���չ���õ��������TYPO3
��ҳ��������Դ����ȫ�ֵ�. �˩չ���??TYPO3��װ�����������?
��.������������TYPO3Դ����Ҳ�����븴��typo3/ext/Ŀ¼����ǰ��
Դ���뵽�µ�Դ. �ڴ��Ժ����ܹ���������TYPO3������Ҫ�����汾.
����һ������һ-�������� ��������װһ����չ.
<b>ϵͳ��λ ��typo3/sysext/��:</b>����ϵͳĬ�ϵ���չ�����ܲ�
��Ӧ�ñ���չ����������.
<b>���Ȱ�װ</b>
�ֲ���չӵ����?���ζ����?�����չ������typo3conf/ext/��
typo3/ext/��������ô��װ�Ǹ���typo3conf/ext/����Ǹ���չ. ͬ��ȫ
����չ��ϵͳ��չӵ������ȫ. ����ζ����չ�ھֲ�-ȫ��-ϵͳ�б�����
��װ. ������������-�ȷ�˵- һ��"�ȶ�" �İ�װ��ȫ����ʾ�ļ��б�
���һ����չ�汾(typo3/ext/) �������������������е���Ŀ�б�ʹ��
��Դ����, ���ڵ�һʵ����Ŀ����������ͬ����չ���µ�"ʵ��" �汾��
���Ҷ��Ǹ���ϸ����Ŀ�ֲ�����Ч��չ����������ʹ��.',
		'emconf_doubleInstall.alttitle' => '���ΰ�װ�����?',
		'emconf_doubleInstall.description' => '�������Ƿ���չ��װ�ڶ��ϵͳ��,����Ļ�ֲ���λ��.',
		'emconf_doubleInstall.details' => '��Ϊһ����չ��λ������λ��,ϵͳ,ȫ�ֺ;ֲ�, �������Ƿ���չ��ȵ�ǰ������λ�ñ�����. �ڴ��������Ӧ��',
		'emconf_rootfiles.alttitle' => '���ļ�',
		'emconf_rootfiles.description' => '�ļ��б���չ�ļ���.û���г���Ŀ¼���ļ�.',
		'emconf_dbReq.alttitle' => '���ݿ�Ҫ��',
		'emconf_dbReq.description' => '����չʾ���ݿ�����ļ���Ҫ��,����κ�.',
		'emconf_dbReq.details' => '�⽫��ext_tables.sql��ext_tables_static+adt.sql�ļ��ж�ȡ���Ҹ���չʾ�Ǹ����, �ļ��;�̬���',
		'emconf_dbStatus.alttitle' => '���ݿ�����״��',
		'emconf_dbStatus.description' => '��ʾ���ݿ⵱ǰ״̬����չ������бȽ�.',
		'emconf_dbStatus.details' => '�����չ�����������һЩ�����򲻳�������Ӧ��λ�ڵ����ݿ�����չ������ʾ�����Ǵ�����Ϣ!',
		'emconf_flags.alttitle' => '���',
		'emconf_flags.description' => '�ر�����һ���б���������TYPO3��һЩ��չ�漰��.',
		'emconf_flags.details' => '����һ����ǵ��б�:
<b>ģ��:</b>һ����������/��ģ�鱻�����������.
<b>ģ��+:</b>����չ������Լ���һ�����ڵĺ��ģ��Ĺ��ܲ˵���.
<b>��װTCA:</b>����չ����һ�����ܽ���t3lib_div::loadTCAΪ��
װ������õ�. ��Ǳ�ڵ���ζ�� ϵͳ��������, ��ΪһЩ������ȫ��
�����ǰ�����. ���������Ҳ���ǶԴ���������һ���õ�����. ��չҲ��
����ȥ�������еı��������TCA-����.
<b>TCA:</b>����չ������$TCA���һ����������.
<b>���:</b>����չ���һ��ǰ�ƵĲ��������Ԫ������"Ƕ�����"
�Ĳ���б���.
<b>���/ST43:</b> TypoScript����ķ�����뱻��ӵ���̬ģ��"
����(Ĭ��)"��. "���"�� "���/ST43
"ͨ����һ��ʹ��.
<b>ҳ��-TSconfig:</b>Ĭ��ҳ��-TSconfig�����.
<b>�û�-TSconfig:</b>Ĭ���û�-TSconfig�����.
<b>TS/����:</b>Ĭ��TypoScript���������.
<b>TS/����:</b>Ĭ��TypoScript���������.',
		'emconf_conf.description' => '��ʾ�Ƿ����չ��һ���Ը����ˮ׼�����ø��͵�ģ��',
		'emconf_TSfiles.alttitle' => '��̬TypoScript�ļ�',
		'emconf_TSfiles.description' => '��ʾ�ĸ�TypoScript��̬�ļ����Գ���',
		'emconf_TSfiles.details' => '����ļ�ext_typoscript_constants.txt��/��ext_typoscript_setup.txt ����չ�ļ������ѽ���,�������ڰ���������̬ģ��������TYPO3������TypoScriptģ��Ĳ����.',
		'emconf_locallang.alttitle' => 'locallang�ļ�',
		'emconf_locallang.description' => '��ʾ��Щ��"locallang.php" �������ļ���ʾ����չ�ļ�����(���ز�Ѱ).�����ļ�ͨ����ϵͳ����ΪӦ�ó�����ʾһ������ǩ������$LOCAL_LANG.',
		'emconf_moduleNames.alttitle' => '���ģ������',
		'emconf_moduleNames.description' => '��ʾ��Щģ����������չ�б�����.',
		'emconf_classNames.alttitle' => 'PHP������',
		'emconf_classNames.description' => '��ʾ��ЩPHP-����.php��.inc�ļ��б�����.',
		'emconf_errors.alttitle' => '����',
		'emconf_errors.description' => '��ʾ�Ƿ������κ���չ�����ش���.',
		'emconf_NSerrors.alttitle' => '���ƿռ����',
		'emconf_NSerrors.description' => 'ĳЩ����Э��Ӧ������չ. ����ʾ�κη����˵ķǷ�����.',
		'emconf_NSerrors.details' => '����Э����"Inside TYPO3" �ĵ��ж���.Ϊ��ʹ���������ܵļ�,������������չ���б����»���.',
	),
	'sk' => Array (
	),
	'lt' => Array (
	),
	'is' => Array (
	),
	'hr' => Array (
		'emconf_shy.alttitle' => 'Prikriveno',
		'emconf_shy.description' => 'Ako je postavljeno, ekstenzija �e u biti skrivena u EM-u, npr. jer se radi o uobi�ajenoj ekstenziji ili nije od ve�e va�nosti.',
		'emconf_shy.details' => 'Koristite ovu zastavicu ako je mali interes za ekstenziju (to ne zna�i 
da nije va�na v� smo da nije �esto tra�ena...)
Ne utje�e na uklju�enost ekstenzije, samo na prikaz u EM-u.
Uobi�ajeno je opcija \'skriveno\' postavljena za sve ekstenzije koje
su standardno u�itane u skladu s TYPO3_CONF_VARS.',
		'emconf_category.alttitle' => 'Kategorija',
		'emconf_category.description' => 'Kojoj kategoriji pripada ekstenzija',
		'emconf_category.details' => '<b>be:</b> Backend (Uobi�ajeno backend orijentirana,
ali nije modul)

<b>modul:</b> Backend moduli (Kada je ne�to modul
ili se spaja sa modulom)

<b>fe:</b> Frontend (Uobi�ajeno frontend orijentirana,
ali nije "pravi" plugin)

<b>plugin:</b> Frontend plugin-ovi (Plugin-ovi uba�eni kao
sadr�ajni elementi "Ubaci Plugin" metode)

<b>razno:</b> Razne stvari (Kada se ne mogu drugdje smejstiti)

<b>primjer:</b> Primjer ekstenzija (Koja slu�i kao primjer, itd.)',
		'emconf_dependencies.alttitle' => 'Ovisnost o drugim ekstenzijama?',
		'emconf_dependencies.description' => 'Ovo je lista klju�eva ostalih ekstenzija o kojima ova ekstenzija ovisi i koje moraju biti u�itane PRIJE nje same.',
		'emconf_dependencies.details' => 'EM �e obraditi tu ovisnost dok bude pisao popis ekstenzija u localconf.php.',
		'emconf_conflicts.alttitle' => 'Konflikti s drugim ekstenzijama?',
		'emconf_conflicts.description' => 'Popis klju�eva onih ekstenzija s kojim doti�na ekstenzija dolazi u sukob (i zato nemo�e biti uklju�ena prije nego su ostale isklju�ene).',
		'emconf_priority.alttitle' => 'Tra�eni prioritet u�itavanja',
		'emconf_priority.description' => 'Ovo govori EM-u da poku�a upisati ekstenzije na vrh liste. Standardno je na kraj liste.',
		'emconf_module.alttitle' => 'Uklju�i backend module',
		'emconf_module.description' => 'Ako neki poddirektoriji ekstenzije sadr�e backend module, imena tih direktorija moraju ovdje biti popisana.',
		'emconf_module.details' => 'Omogu�ava EM-u informacije o postojanju modula, �to je bitno jer EM mora osvje�iti datoteku modula conf.php kako bi se valjano postavila TYPO3_MOD_PATH konstanta.',
		'emconf_state.alttitle' => 'Status razvoja',
		'emconf_state.description' => 'U kojem se statusu razvoja nalazi ekstenzija.',
		'emconf_state.details' => '<b>alfa</b>
Po�etni razvoj. Ne mora biti funkcionalna.

<b>beta</b>
Trenutno u razvoju. Djelomi�no funkcionalna, ali nije zavr�ena.

<b>stabilna</b>
Stabilna, koristi se u produkciji.

<b>experimentalna</b>
Nepoznanica je da li �e uop�e biti stvarnih rezultata.
Mo�da se radi samo o ideji.

<b>test</b>
Test ekstenzije, predstavljanje koncepata, itd.',
		'emconf_internal.alttitle' => 'Interno podr�an u jezgri sustava.',
		'emconf_internal.description' => 'Ova zastavica ukazuje da ekstenzija posebno utje�e na izvorni kod jezgre sustava.',
		'emconf_internal.details' => 'U stvari ova zastavica bi trebala upozoravati na �injenicu da 
"ekstenzija nije mogla biti napisana bez izmjena u izvornom kodu sustava" 

Ekstenzija nije interna samo zato jer upotrebljava TYPO3 op�e klase,
npr. one iz t3lib/.
Prave ne-interne ekstenzije obilje�ava �injenica da su napisane 
bez uvo�enja promjena u izvornom kodu jezgre sustava. One se
uz svoje skripte u pretincu ekstenzije oslanjaju samo na postoje�e 
klase u TYPO3 i/ili drugim ekstenzijama.',
		'emconf_clearCacheOnLoad.alttitle' => 'O�isti privremeni spremnik (cache) nakon instalacije.',
		'emconf_clearCacheOnLoad.description' => 'Ako je postavljena, EM �e zahtijevati da se privremeni spremnik (cache) o�isti kada se ova ekstenzija instalira.',
		'emconf_modify_tables.alttitle' => 'Postoje�i tablice su promijenjene',
		'emconf_modify_tables.description' => 'Popis imena tablica koje ova ekstenzija samo mijenja, ne stvara ih.',
		'emconf_modify_tables.details' => 'Tablice iz ove liste prona�ene u datoteci ekstenzije ext_tables.sql',
		'.alttitle' => 'EM',
		'.description' => 'Menad�er ekstenzijama (EM)',
		'.details' => 'TYPO3 mo�e se pro�iriti u bilo kojem smjeru bez gubitka 
kompatibilnosti unazad. API za ekstenzije pru�a mo�nu strukturu
za lagano dodavanje, oduzimanje, instalaciju i razvoj takvih 
ekstenzija u TYPO3 okru�enju. To posebno omogu�ava menad�er 
ekstenzija EM unutat TYPO3.

"Ekstenzije" su pojam koje u TYPO3 pokriva dva druga pojma, 
plugin-ovi i moduli.

Plugin je dio koji ima ulogu u samom web sjedi�tu. 
Npr. oglasna plo�a, knjiga gostiju, du�an itd. Uobi�ajeno je sadr�an
unutar PHP klase i pozvan kroz USER ili USER_INT cObject 
iz TypoScript-a. Plugin je ekstenzija u frontend-u.

Modul je backend aplikacija koja ima vlastitu poziciju u administracijskom
meniju. Zahtijeva prijavu na backend sustav i djeluje unutar strukture
beckenda. Tako�er modulom mo�emo nazvati ako iskori�tava
bilo kakvu povezivost nekog postoje�eg modula, tj. ako se dodaje
meniju funkcija postoje�ih modula. Modul je ekstenzija u backend-u.',
		'emconf_private.alttitle' => 'Privatno',
		'emconf_private.description' => 'Ako je postavljeno, ova verzija se ne pokazuje u javnoj listi online repozitorij.',
		'emconf_private.details' => '"Privatni"  uploadi zahtjevaju da ru�no unesete posebni klju� (koji �e vam se prikazati
nakon �to se upload zavr�i) da bi mogli importirati i pregledavati detalje uploadane ekstenzije.
To je zgodno kad radite na internim stvarima koje ne �elite da drugi pregledavaju.
Mo�ete postaviti i maknuti zastavicu privatno svaki put kada uploadate ekstenziju.',
		'emconf_download_password.alttitle' => 'Download zaporke',
		'emconf_download_password.description' => 'Dodatna zaporka je potrebna za download privatne ekstenzije.',
		'emconf_download_password.details' => 'Svi koji poznaju "poseban klju�" dodijeljen privatnom uploadu mogu taj upload importirati. Specificiranje zaporke za importiranje omogu�ava vam da podijelite klju� za download privatnih uploada ali i dodatno zahtjevate spomenutu zaporku.Zaporka se mo�e kasnije promijeniti.',
		'emconf_type.alttitle' => 'Tip instalacije',
		'emconf_type.description' => 'Tip instalacije',
		'emconf_type.details' => 'Datoteke pojedine ekstenzije spremljene su u direktorij nazvan po klju�u ekstenzije. Mjesto ovog direktorija mo�e biti 
unutar typo3/sysext/, typo3/ext/ , ili typo3conf/ext. Ekstenzija mora biti programirana tako da automatski otkriva
gdje je smje�tena i da mo�e rasditi sa sve tri lokacije.

<b>  Lokalni smje�taj �typo3conf/ext/�:</b> Ovdje se spremaju ekstenzije koje su lokalne za pojedinu TYPO3 instalaciju.
Direktorij typo3conf/ je uvijek lokalan, i sadr�i lokalnu konfiguraciju (npr. localconf.php), lokalne module, itd.
Ako ovdje smjestite ekstenziju biti �e dostupna samo ovoj TYPO3 instalaciji. 
To je "po-bazi-podataka" na�in instalacije ekstenzije.

<b>Globalni smje�taj �typo3/ext/�:</b> Ovdje se spremaju ekstenzije koje su globalne za TYPO3 izvorni kod na web
poslu�itelju. Ove ekstenzije �e biti dostupne za sve TYPO3 instalacije koje dijele izvorni kod.
Kada a�urirate va� TYPO3 izvorni kod prikladno je kopirati typo3/ext direktorij iz prija�nje u obnovljenu instalaciju, 
nadja�av�i preddefinirani direktorij. Na taj �e se na�in sve kori�tene globalne ekstenzije na�i unutar novog izvornog koda.
Nakon toga uvijek mo�ete ulaskom u TYPO3 po potrebi a�urirati ina�ice. 
To je "po-serveru" na�in instalacije ekstenzije.

<b> Sistemski smje�taj �typo3/sysext/�:</b> Ovo su sistemski zadane ekstenzje  koje se nemogu i ne bi trebale a�urirati 
od strane EM-a

<b> Prioriteti u�itavanja</b> 
Lokalne ekstenzije imju prednost �to zna�i da ukoliko ekstenzija postoji u typo3conf/ext/ i typo3/ext/ u�itava 
se samo ona iz typo3conf/ext/. Sli�no globalne ekstenzije imaju prednost nad sistemskim. To zna�i da se ekstenzije
u�itavaju redosljedom lokalne-globalne-sistemske.
U praksi mo�ete imati  "stabilnu" ina�icu instaliranu u globalni direktorij (typo3/ext/), koju koriste svi va�i projekti 
koji dijele izvorni kod na poslu�itelju. S  druge strane na pojedinom pokusnom projektu mo�ete importirati istu 
ekstenziju u novijoj "pokusnoj" ina�ici, i za taj posebni projekt koristiti �e se lokalno dostupne ekstenzije.',
		'emconf_doubleInstall.alttitle' => 'Instalirana dva ili vi�e puta?',
		'emconf_doubleInstall.description' => 'Pokazuje ako je ekstenzija instalirana na vi�e od jednog Sistemskog, Globalnog ili Lokalnog mjesta.',
		'emconf_doubleInstall.details' => 'Kako ekstenzija mo�e postojati na tri mjesta, Sistemsko, Globalno, Lokalno, ovo ukazuje nalaz li se ekstenzijai i na drugim mjestima osim trenutnog. U tom slu�aju obratite pa�nju koja je ekstenzija u�itana!',
		'emconf_rootfiles.alttitle' => 'Po�etne datoteke',
		'emconf_rootfiles.description' => 'Popis datoteka u direktoriju ekstenzije. Ne prikazuje datoteka u poddirektorijima.',
		'emconf_dbReq.alttitle' => 'Zahtjevi bazi podataka',
		'emconf_dbReq.description' => 'Ako postoje prikazuje zahtjeve tablicama i poljima baze podataka.',
		'emconf_dbReq.details' => 'Ovo �e iz datoteka ext_tables.sql i ext_tables_static+adt.sql pro�itati i prikazati koje su tablice, polja i stati�ke tablice potrebne ovoj ekstenziji.',
		'emconf_dbStatus.alttitle' => 'Status zahtjeva bazi podataka.',
		'emconf_dbStatus.description' => 'Prikazuje trenutni status baze podataka s obzirom na zahtjeve ekstenzije.',
		'emconf_dbStatus.details' => 'Ako se ekstenzija u�ita pojaviti �e se poruka gre�ke ako potrebna polja ili tablice nisu prisutni u bazi podataka.',
		'emconf_flags.alttitle' => 'Zastavice',
		'emconf_flags.description' => 'Popis posebnih kodova koji vam govore na koje dijelove TYPO3 sustava ekstenzija utje�e.',
		'emconf_flags.details' => 'Ovo je popis zastavica:

<b>Module:</b> Pravi backend main/sub modul je prona�en

<b>Module+:</b> Ekstenzija dodaje samu sebe funkcijskom 
meniju postoje�eg backend modula

<b>loadTCA:</b> Ekstenzija sadr�i funkcijski poziv prema 
t3lib_div::loadTCA za u�itavanje tablice. To potencijalno mo�e
usporiti sistem zato jer je potpun opis tablice uvijek uklju�en u
samu tablicu. U svakom slu�aju vjerojatno postoji dobar razlog 
za takav postupak Vjerojatno ekstenzija poku�ava manipulirati 
TCA-config za postoje�u tablicu kako bi je pro�irila.

<b>TCA:</b> Ekstenzija sadr�i konfiguraciju tablice u $TCA.

<b>Plugin:</b> Ekstenzija dodaje frontend plugin listi pluginova 
u Sadr�ajni Element tipa "Dodaj Plugin"

<b>Plugin/ST43:</b> TypoScript kod za prikazivanje plugin-a 
dodan je stati�kom predlo�ku "Sadr�aj (osnovni)". "Plugin" i 
"Plugin/ST43" se obi�no koriste zajedno.

<b>Page-TSconfig:</b> Osnovna Stranica-TSconfig je dodana.

<b>TS/Setup:</b> Osnovne TypoScript Postavke su dodane.

<b>TS/Constants:</b> Osnovne TypoScript Konstante su dodane.',
		'emconf_conf.description' => 'Pokazuje da li ekstenzija ima predlo�ak za daljnju konfiguraciju',
		'emconf_TSfiles.alttitle' => 'Stati�ne TypoScript datoteke',
		'emconf_TSfiles.description' => 'Pokazuje koji TypoScript stati�ne datoteke mogu biti prisutne.',
		'emconf_TSfiles.details' => 'Ako su datoteke ext_typoscript_constants.txt i/ili ext_typoscript_setup.txt prona�ene u direktoriju ekstenzije, one se uklju�uju u hijerarhiju svih TypoScript predlo�aka u TYPO3 sustavu odmah nakon preostalih uklju�enih stati�kih predlo�aka.',
		'emconf_locallang.alttitle' => 'locallang-datoteke',
		'emconf_locallang.description' => 'Prikazuje koje su datoteke nazvane "locallang.php" prisutne u direktoriju ekstenzije (rekurzivna pretraga). Takve datoteke se uobi�ajeno koriste da dodijele nizu $LOCAL_LANG  oznake koje se koriste u sistemskim jezicima.',
		'emconf_moduleNames.alttitle' => 'Imena Backend Modula',
		'emconf_moduleNames.description' => 'Pokazuje koja su imena modula prona�ena unutar ekstenzije.',
		'emconf_classNames.alttitle' => 'Imena PHP klasa',
		'emconf_classNames.description' => 'Pokazuje koje su PHP klase prona�ene u .php i .inc datotekama.',
		'emconf_errors.alttitle' => 'Gre�ke',
		'emconf_errors.description' => 'Prikazuje otkrivene ozbiljne gre�ke u ekstenziji.',
		'emconf_NSerrors.alttitle' => 'Gre�ke pri imenovanju',
		'emconf_NSerrors.description' => 'Odre�ene konvencije imenovanja odnose se na ekstenzije. Ovdje se prikazuju prona�ena prekr�enja.',
		'emconf_NSerrors.details' => 'Konvencije imenovanja definirane su u "Inside TYPO3" dokumentu. Da bi se davanje imena maksimalno pojednostavilo, poku�ajte izbje�i "underscore" znak u va�im klju�evima ekstenzija.',
	),
	'hu' => Array (
		'emconf_shy.alttitle' => 'Shy',
		'emconf_shy.description' => 'Ha be van �ll�tva, a kiterjeszt�s alap�rtelmezetten rejtett lesz a B�v�tm�nykezel�ben, mert ez alap�rtelmezett kiterjeszt�s vagy m�s valami lehet, amely nem annyira fontos.',
		'emconf_shy.details' => 'Ezt a jelz�t akkor haszn�ld, ha a kiterjeszt�s \'kev�sb� �rdekes\'
(ami nem jelenti azt, hogy nem fontos - csak a kiterjeszt�s
ritk�n haszn�latos...)
Ez nem �rinti azt, hogy ez enged�lyezve van-e vagy sem.
Csak a B�v�tm�nykezel�ben l�that�.
Hagyom�nyosan a shy egy a TYPO3_CONF_VARS-nak
megfelel� alap�rtelmezetten bet�lt�d� kiterjeszt�shalmaz.',
		'emconf_category.alttitle' => 'Kateg�ria',
		'emconf_category.description' => 'Melyik kateg�ri�hoz tartozzon a kiterjeszt�s.',
		'emconf_category.details' => '<b>be:</b> Backend (�ltal�nosan backend orient�lt, de nem modul) 

<b>modul:</b> Backend modulok (amikor valami egy modul vagy ahhoz csatlakozik)

<b>fe:</b> Frontend (�ltal�nosan backend orient�lt, de nem �val�di� be�p�l�)

<b>b�v�tm�ny:</b> Frontend be�p�l�k (�Besz�rt be�p�l��tartalmi elemk�nt besz�rt be�p�l�) 

<b>vegyes:</b> Vegyes dolog (m�shova nem besorolt)

<b>p�lda:</b> p�da kiterjeszt�s (p�ldak�nt stb. szolg�lnak)',
		'emconf_dependencies.alttitle' => 'F�gg�sek m�s kiterjeszt�sekt�l',
		'emconf_dependencies.description' => 'Ez egy egy�b kiterjeszt�s kulcslista, amelynek tartalma a m�r kor�bban bet�lt�tt kiterjeszt�sekt�l f�gg.',
		'emconf_dependencies.details' => 'A B�v�tm�nykezel� kezeli a localconf.php-ba �r�d� kiterjeszt�sek f�gg�s�geit.',
		'emconf_conflicts.alttitle' => '�tk�z�sek m�s kiterjeszt�sekkel?',
		'emconf_conflicts.description' => 'Kiterjeszt�sek kucslist�ja, amellyel a kiterjeszt�s nem dolgozik �ssze (�s �gy nem enged�lyezhet�ek csak a megfelel� kiterjeszt�s t�rl�s�vel)',
		'emconf_priority.alttitle' => 'Lek�rdezett bet�lt�si els�bbs�g',
		'emconf_priority.description' => 'Meghat�rozza a B�v�tm�nykezel� sz�m�ra, hogy a kiterjeszt�seket a lista elej�re tegye. Alap�rtelmez�sk�nt a v�g�re helyezi.',
		'emconf_module.alttitle' => 'Bet�lt�tt backend modulok',
		'emconf_module.description' => 'Ha b�rmely, a kiterjeszt�shez tartoz� alk�nyvt�r tartalmaz backend modult, ezek a k�nyvt�r nevek itt lesznek kilist�zva.',
		'emconf_module.details' => 'Enged�lyezi a B�v�tm�nykezel�nek, hogy tudjon a modul l�tez�s�r�l, ami fontos, mert a B�v�tm�nykezel�nek friss�teni kell a modul conf.php f�jlj�t az�rt, hogy helyesen tudja be�ll�tani a TYPO3_MOD_PATH konstanst.',
		'emconf_state.alttitle' => 'Fejleszt�si �llapot',
		'emconf_state.description' => 'Jelzi, hogy a kiterjeszt�s milyen fejleszt�si �llapotban van.',
		'emconf_state.details' => '<b>alfa</b>
Nagyon kezdeti �llapot. Val�szin�leg m�g semmi sem t�rt�nt.

<b>b�ta</b>
�ppen fejleszt�s alatt. R�szben m�k�dhet, de m�g nem befejezett.

<b>stabil</b>
Stabil �s haszn�lat alatt a term�kben

<b>k�s�rleti</b>
Senki nem tudja, m�k�dik-e... Tal�n csak egy �tlet...

<b>teszt</b>
Teszt kiterjeszt�s, koncepci�kat mutat be stb.',
		'emconf_internal.alttitle' => 'A magban bels�leg t�mogatott',
		'emconf_internal.description' => 'Ez a jelz� jelzi, hogy a mag forr�sk�dja speci�lisan tud a kiterjeszt�sr�l.',
		'emconf_internal.details' => 'A szavak sorrendj�ben ennek a jelz�nek kell tov�bb�tani azt
az �zenetet, hogy �ez a kiterjeszt�s nem �rhat� meg bizonyos
mag forr�sk�d v�ltoztat�s n�lk�l�.
Egy kiterjeszt�s nem tekinthet� bels�nek csak az�rt, mert a
TYPO3 �ltal�nos oszt�lyai haszn�lj�k, azaz a t3lib/.-b�l.
A val�di nem bels� kiterjeszt�sek azzal jellemezhet�ek, hogy
meg�rhat�ak a mag forr�sk�d v�ltoztat�sa n�lk�l, csak
felhaszn�lj�k a TYPO3 meglev� oszt�lyait �s/vagy
kiterjeszt�seit, valamint kiterjeszt�s k�nyvt�r�ban lev� saj�t
szkripteket.',
		'emconf_clearCacheOnLoad.alttitle' => 'Telep�t�s ut�n a cache t�rl�se',
		'emconf_clearCacheOnLoad.description' => 'Ha be van �ll�tva, a B�v�tm�nykezel� kitakar�tja a gyors�t�t�rat a kiterjeszt�s telep�t�sekor.',
		'emconf_modify_tables.alttitle' => 'L�tez� megv�ltozott t�bl�k',
		'emconf_modify_tables.description' => 'T�blanevek list�ja, amelyeket ez a kiterjeszt�s csak m�dos�t, de nem teljesen k�sz�t el.',
		'emconf_modify_tables.details' => 'A kiterjeszt�s ext_tables.sql f�jlj�ban tal�lhat� t�blalista.',
		'.alttitle' => 'BK',
		'.description' => 'B�v�tm�nykezel� (BK)',
		'.details' => 'ATYPO3 kiterjeszthet� gyakorlatilag b�rmely ir�nyban a fel�lr�l
kompatilbilit�s elveszt�se n�lk�l. A Kiterjeszt�si Programoz�i
Fel�let hat�kony keretrendszert ny�jt a TYPO3 r�sz�re az ilyen
kiterjeszt�sek hozz�ad�s�hoz, t�rl�s�hez, telep�t�s�hez,
fejleszt�s�hez. Ezt a B�v�tm�nykezel� (BK) hat�konyan
t�mogatja a TYPO3.on bel�l.

A �kiterjeszt�s� egy fogalom a TYPO3-on bel�l, amely k�t
m�sik fogalmat takar, a b�v�tm�nyt �s a modult.

A b�v�tm�ny egy szerepet j�tszik el mag�n a webhelyen. Azaz
�zen�falat, vend�gk�nyvet, boltot stb. �ltal�ban PHP oszt�lyba
�gyazott �s a USER vagy a USER_INT cObject-en kereszt�l
h�vja meg a TypoScript. A b�v�tm�ny a frontenden egy
kiterjeszt�s.

A modul egy backend alkalmaz�s, amelynek saj�t poz�ci�ja
van az adminisztr�ci�s men�ben. Backend bejelentkez�st
ig�nyel �s a backend keretrendszeren bel�l m�k�dik.
Megh�vhatunk valamit modulk�nt akkor is, ha ez bontja
egy l�tez� modul kapcsol�d�s�t, ez egyszer�en behelyezi
�nmag�t a megl�v� modulok f�ggv�ny men�j�be. A modul
a backenden egy kiterjeszt�s.',
		'emconf_private.alttitle' => 'Priv�t',
		'emconf_private.description' => 'Ha be van �ll�tva, ez a verzi� nem jelenik meg az online t�r nyilv�nos list�j�ban.',
		'emconf_private.details' => 'A "priv�t" felt�lt�sek egy olyan manu�lisan beg�pelt kulcs
megad�s�t ig�nylik (amely a felt�lt�s befejezt�vel megjelenik)
a felt�lt�tt kiterjeszt�s import�l�s�nak vagy a r�szletek
megtekinthet�s�g�nek �rdek�ben.
Ez egy nagyon klassz dolog, amikor valami bels� dolgon
dolgozol �s nem szeretn�d, ha ezt m�sok is l�tn�k.
A priv�t jelz�t be- �s kikapcsolhatod valah�nyszor
felt�lt�d a kiterjeszt�sedet.',
		'emconf_download_password.alttitle' => 'Let�lt�si jelsz�',
		'emconf_download_password.description' => 'Priv�t kiterjeszt�sek let�lt�s�hez sz�ks�ges kieg�sz�t� jelsz�.',
		'emconf_download_password.details' => 'Aki ismeri a priv�t felt�lt�shez rendelt kulcsot, import�lhatja azt. Az import jelsz� megad�sa a let�lt�si kulcsot adja meg �s tov�bbiakban egy jelsz� is sz�ks�ges. A jelsz� a k�s�bbiekben megv�ltoztathat�.',
		'emconf_type.alttitle' => 'Telep�t�si t�pus',
		'emconf_type.description' => 'A telep�t�s t�pusa',
		'emconf_type.details' => 'A kiterjeszt�s f�jljai a kiterjeszt�s kulcsa alapj�n elnevezett
k�nyvt�rban vannak. E k�nyvt�r helye vagy a  typo3/sysext/,
a typo3/ext/ vagy a typo3conf/ext/ valamelyike.
A kiterjeszt�snek programozottnak kell lennie, �gy
automatikusan �rz�keli, hogy hol tal�lhat� �s m�k�dhet mind
a h�rom helyr�l.

<b>Lok�lis hely �typo3conf/ext/�:</b> Itt tal�lhat�ak azok
a kiterjeszt�sek, amelyek egy bizonyos TYPO3 telep�t�sre
n�zve lok�lisak. A typo3conf/ k�nyvt�r mindig helyi, helyi
konfigur�ci�t (l�sd localconf.php), helyi modulokat stb.
tartalmaz. Az ide elhelyezett kiterjeszt�s csak ezen TYPO3
telep�t�s sz�m�ra lesz el�rhet�. Ez az adatb�zis telep�t�s 
�adatb�zis-alap�� m�dja.

<b>Glob�lis hely �typo3/ext/�:</b> Itt olyan kiterjeszt�sek
tal�lhat�ak, amelyek a TYPO3 forr�sk�d szempontj�b�l
glob�lisak a webszerveren. Ezek a kiterjeszt�sek el�rhet�ek
b�rmelyik TYPO3 telep�t�s r�sz�re megosztva a forr�sk�dot.
Ha friss�l a TYPO3 forr�sk�d, c�lszer� a r�gi typo3/ext/
k�nyvt�rat �tm�solni az �j telep�t�sbe, fel�l�rva az eredetit.
Ezen a m�don az �sszes haszn�latos glob�lis kiterjeszt�s az 
�j verzi� forr�sk�dj�ban is megjelenik. Ezek ut�n mindig lehet
friss�teni a k�v�nt verzi�kat. Ez az adatb�zis telep�t�s 
�szerver-alap�� m�dja.

<b>Rendszerszint� hely �typo3/sysext/�:</b> Ez a rendszer
alap kiterjeszt�seinek a helye, amelyet nem lehet �s nem 
aj�nlatos friss�teni a Kiterjeszt�s Menedzser seg�ts�g�vel.

<b>Bet�lt�si els�bbs�g:</b> A helyi kiterjeszt�sek egyfajta
els�bbs�ggel b�rnak, aza, ha egy kiterjeszt�s l�tezik mind a
typo3conf/ext/ and typo3/ext/ k�nyvt�rban, akkor a
typo3conf/ext/ -beli t�lt�dik be. Hasonl�an a glob�lis
kiterjeszt�sek szint�n els�bbs�ggel b�rnak a rendszerszint�
kiterjeszt�sekkel szemben. Ez azt jelenti, hogy a kiterjeszt�sek
a lok�lis-glob�lis-rendszerszint� sorrendben t�lt�dnek be.
Ilyen m�don egy telep�tett kiterjeszt�snek stabil verzi�ja a 
glob�lis k�nyvt�rban van (typo3/ext/), amelyet a szerveren
lev� b�rmely projekt haszn�lhat megosztva a forr�sk�dot, de
egy egyszer� k�s�rleti projektben ugyannak a kiterjeszt�snek
egy �jabb verzi�ja import�lhat� be a projektnek megfelel�en
helyi kiterjeszt�sk�nt a r�gebbi helyett.',
		'emconf_doubleInstall.alttitle' => 'K�tszer vagy t�bbsz�r telep�tett?',
		'emconf_doubleInstall.description' => 'Megmondja, hogy egy kiterjeszt�s telep�tve van-e egyn�l t�bbsz�r a System, Global vagy Local helyek egyik�ben.',
		'emconf_doubleInstall.details' => 'Mivel a kiterjeszt�s h�rom helyen fordulhat el� (System, Global, Local), jelzi, ha a kiterjeszt�s a jelenlegin�l elt�r� helyen tal�lhat�. Ebben az esetben �gyelni kell arra, hogy a kiterjeszt�sek melyik�t t�ltj�k be.',
		'emconf_rootfiles.alttitle' => 'Gy�k�r f�jlok',
		'emconf_rootfiles.description' => 'F�jlok list�ja a kiterjeszt�s k�nyvt�r�ban. Nem list�zza az alk�nyvt�rbakban lev� f�jlokat.',
		'emconf_dbReq.alttitle' => 'Adatb�zis sz�ks�ges',
		'emconf_dbReq.description' => 'Jelzi az adatb�zis t�bl�k �s mez�k sz�ks�gess�g�t, ha van ilyen.',
		'emconf_dbReq.details' => 'Ez az ext_tables.sql �s az ext_tables_static+adt.sql f�jlokb�l ker�l beolvas�sra �s megmutatja, mely t�bl�k, mez�k �s statikus t�bl�k sz�ks�gesek a kiterjeszt�s r�sz�re.',
		'emconf_dbStatus.alttitle' => 'Adatb�zis sz�ks�gess�gi �llapot',
		'emconf_dbStatus.description' => 'Kijelzi az adatb�zis jelen �llapot�t �sszevetve a sz�ks�ges kiterjeszt�sekkel.',
		'emconf_dbStatus.details' => 'Ha egy kiterjeszt�s olyan t�lt�d�tt be, amely hiba�zenetet jelen�t meg, amennyiben bizonyos sz�ks�ges t�bl�k �s mez�k nincsenek meg.',
		'emconf_flags.alttitle' => 'Jelz�k',
		'emconf_flags.description' => 'Speci�lis k�dol�s� lista, amely megmondja, hogy a kiterjeszt�s a TYPO3 mely r�szeit �rinti.',
		'emconf_flags.details' => 'Ez jelz�lista:

<b>Modul:</b> Egy val�di backend f�modul vagy almodul
tal�lhat� hozz�ad�sra.

<b>Modul+:</b> A kiterjeszt�s hozz�adja �nmag�t egy l�tez�
backend modul funkci�men�j�hez.

<b>loadTCA:</b> A kiterjeszt�s tartalmaz
egy t3lib_div::loadTCA  nev� f�ggv�nyt egy t�bla bet�lt�s�re.
Ez potenci�lisan azt jelenti, hogy a rendszer lelassul, mert 
valamely t�bla teljes t�blale�r�sa mindig bet�lt�dik. Ennek meg
van a maga oka. A kiterjeszt�s megpr�b�lja manipul�lni egy
l�tez� t�bla r�sz�re a TCA konfigur�ci�t, hogy kiterjessze azt.

<b>TCA:</b>  A kiterjeszt�s a $TCA-ban tartalmazza egy
t�bla konfigur�ci�j�t.

<b>B�v�tm�ny:</b> A kiterjeszt�s hozz�ad egy frontend
be�p�l�t a Tartalmi Elemek "Besz�rt b�v�tm�nyek" r�sz�nek
b�v�tm�nylist�j�ba.

<b>B�v�tm�ny/ST43:</b> TypoScript gener�lt k�d a b�v�tm�ny
r�sz�re, amely hozz�ad�dik a staikus "Tartalom (alap)"
sablonhoz. A "B�v�tm�ny" �s a "B�v�tm�ny/ST43" �ltal�ban egy�tt
haszn�latos.

<b>Oldal-TSconfig:</b> Alap�rtelmezett Oldal-TSconfig
hozz�adva.

<b>Felhaszn�l�-TSconfig:</b> Alap�rtelmezettt
Felhaszn�l�-TSconfig hozz�adva.

<b>TS/Telep�t�s:</b> Alap�rtelmezett TypoScript
telep�t�s hozz�adva.

<b>TS/Konstansok:</b> Alap�rtelmezett TypoScript
konstansok hozz�adva.',
		'emconf_conf.description' => 'Jelzi, hogy a kiterjeszt�snek van-e tov�bbi als�szint� konfigur�ci�s sablonja.',
		'emconf_TSfiles.alttitle' => 'Statikus TypoScript f�jlok',
		'emconf_TSfiles.description' => 'Kijelzi. hogy mely statikus TypoScript f�jlok vannak jelen.',
		'emconf_TSfiles.details' => 'Ha a ext_typoscript_constants.txt �s/vagy ext_typoscript_setup.txt f�jlok megtal�lhat�ak a kiterjeszt�s k�nyvt�r�ban, akkor ezek be�p�lnek a TYPO3 �sszes TypoScript sablon hierarhi�j�ba k�zvetlen�l a m�s statikus sablonokba val� be�p�l�s ut�n.',
		'emconf_locallang.alttitle' => 'locallang file-ok',
		'emconf_locallang.description' => 'Kijelzi, hogy a helyi nyelvi f�jlnak nevezett f�jlok vannak jelen a kiterjeszt�s k�nyvt�r�ban (rekurz�v keres�ssel). Az ilyen f�jlok rendszerint a $LOCAL_LANG t�mb c�mk�it jelen�tik meg a rendszer nyelv�nek megfelel�en.',
		'emconf_moduleNames.alttitle' => 'Backend modul nevek',
		'emconf_moduleNames.description' => 'Kijelzi, melyik moduln�v tal�lhat� a kiterjeszt�sen bel�l.',
		'emconf_classNames.alttitle' => 'PHP oszt�ly nevek',
		'emconf_classNames.description' => 'Kijelzi, hogy mely PHP oszt�lyok tal�lhat�ak a .php �s .inc f�jlokban.',
		'emconf_errors.alttitle' => 'Hib�k',
		'emconf_errors.description' => 'Kijelzi, ha valamilyen komoly hiba mer�lt fel a kiterjeszt�ssel kapcsolatban.',
		'emconf_NSerrors.alttitle' => 'N�vhely hib�k',
		'emconf_NSerrors.description' => 'Bizonyos n�vkonvenci�kat alkalmaz a kiterjeszt�sekre. Kijelzi, ha b�rmilyen �tk�z�s mer�lt fel.',
		'emconf_NSerrors.details' => 'A n�vkonverzi�k az "Inside TYPO3" dokumentumban olvashat�ak. Pr�b�lj a lehet� legegyszer�bb elnevez�st adni, lehet�leg nem alkalmazva az al�h�z�s jelet ( _ ).',
	),
	'gl' => Array (
		'emconf_shy.alttitle' => 'Toqqoqqasoq',
	),
	'th' => Array (
	),
	'gr' => Array (
	),
	'hk' => Array (
		'emconf_shy.alttitle' => '����',
		'emconf_shy.description' => '���p�]�w�F�A�����u�㥿�`�|�b�����u��޲z�����Q���áA�]�����i��O�@�ӹw�]�������u��Τ��M�O�@�Ǥ��ܭ��n���F��',
		'emconf_shy.details' => '���p�@�ө����u�㤣�O�Ӥް_����]���P�󤣭��n - �u�O�@�Ӥ��`���H�M�䪺�����u��^�A�N�ϥγo�ӼаO
�o���v�T�����u��O�_�ҰʡC�u�O�b�����u��޲z������ܡC���`�����A�ھ�TYPO3_CONF_VARS�A�Ҧ��w�]���J�������u�㳣�]�w������',
		'emconf_category.alttitle' => '���O',
		'emconf_category.description' => '�����u��������O',
		'emconf_category.details' => '<b>be:</b>���
�]�@�묰��ԾɦV�A���ëD�Ҳա^

<b>module:</b>��ԼҲա]���ǪF��O�Ҳթγs����Ҳա^

<b>fe:</b>�e�m
�]�@�묰�e�m���J���˸m�^


<b>plugin:</b>�e�m���J���˸m�]���J���˸m�Q�[�J������^

<b>misc:</b>��L�]���໴�������^

<b>example:</b>�����u��d�ҡ]�@���d�ҵ��^',
		'emconf_dependencies.alttitle' => '��L�����u�㪺�̩ۨʡH',
		'emconf_dependencies.description' => '�o�ө����u��ҭʿ઺��L�����u���_�r�W��A�b���J�ۤv�e�����J���W��',
		'emconf_dependencies.details' => '��⩵���u��W��g�i localconf.php �ɡA�����u��޲z���|�B�z�̩ۨ�',
		'emconf_conflicts.alttitle' => '�P��L�����u��Ĭ�H',
		'emconf_conflicts.description' => '����P�o�ө����u��@�_�B�@�������u���_�r�W��]�]���b�o�Ǥu�㤣�Q�Ѱ��w�ˤ��e�A�����u�㤣����Q�Ұʡ^',
		'emconf_priority.alttitle' => '�n�D���J�u����',
		'emconf_priority.description' => '�q�������u��޲z�����է⩵���u����W�檺�̫e���C�w�]�O���̫᪺',
		'emconf_module.alttitle' => '�Q�]�A����ԼҲ�',
		'emconf_module.description' => '���p����@�ө����u�㪺�l��Ƨ��]�t��ԼҲաA�o�Ǹ�Ƨ����W�����|�b�o�̳Q�C�X',
		'emconf_module.details' => '�e�\\�u�����u��޲z���v���D�Ҳժ��s�b�A�O���n���A�]���u�����u��޲z���v���F�]�w���T��TYPO3_MOD_PATH�`�ȡA�ݭn��s�Ҳժ�conf.php��',
		'emconf_state.alttitle' => '�o�i���A',
		'emconf_state.description' => '�����u��B�󨺤@�ӵo�i���A',
		'emconf_state.details' => '<b>alpha</b>
�D�`������o�i�C
�]�\\������������ơC

<b>beta</b>
���b�o�i��
���Ӧ����a�B�@,���O��������

<b>stable</b>
í�w�M�i�����B�@

<b>experimental</b>
�٨S���H���D�|�o�ͬƻ��...�]�\\���O�u�O�@�ӷN��

<b>test</b>
���թ����u��A��ܷ�����',
		'emconf_internal.alttitle' => '�b�֤ߤ����䴩',
		'emconf_internal.description' => '�o�O�����X�֤߷��X�O�S�O�a�d�N���o�ө����u��',
		'emconf_clearCacheOnLoad.alttitle' => '��w�ˮɡA�M���֨��ɮ�',
		'emconf_clearCacheOnLoad.description' => '���p�]�w�F�A��w�˩����u��ɡA�����u��޲z���N�|�n�D�M���֨��ɮ�',
		'emconf_modify_tables.alttitle' => '�{�s��ƪ�Q�ק�',
		'emconf_modify_tables.description' => '�u����Q�o�ө����u��ק�]���O�������إߡ^����ƪ�W�٪��W��',
		'emconf_modify_tables.details' => '�b�����u�㪺ext_tables.sql�ɮפ���쪺�o�ӦW�椤����ƪ�',
		'.alttitle' => 'EM',
		'.description' => '�����u��޲z��(EM�^',
		'emconf_private.alttitle' => '�p�H',
		'emconf_private.description' => '���p�w�F�A�o�Ӫ������|��ܩ�u�W���îw�����}�W�椤',
		'emconf_download_password.alttitle' => '�U���K�X',
		'emconf_download_password.description' => '�n�U���p�H�����u��N�ݭn���[���K�X',
		'emconf_type.alttitle' => '�w������',
		'emconf_type.description' => '�w������',
		'emconf_doubleInstall.alttitle' => '�w�˨⦸�ΥH�W�H',
		'emconf_doubleInstall.description' => '�q���A�����u��O�_�b�t�Τ��w�˦h��@���A����a�Υ��a��m',
		'emconf_doubleInstall.details' => '�]���@�ө����u��i�H�B����T�Ӧ�m�A�t�ΡN����M���a�A�o���X�����u��O�_�Q�o�{�B����{����m�H�~�C�b�o���p�U�A���ӷN���@�ө����u��w�g�Q���J�C',
		'emconf_rootfiles.alttitle' => '���ɮ�',
		'emconf_rootfiles.description' => '�b�����u�㤤���ɮצW��C�S���C�X�l��Ƨ������ɮ�',
		'emconf_dbReq.alttitle' => '��Ʈw�n�D',
		'emconf_dbReq.description' => '�V�A��ܹ��Ʈw���M�檺�n�D�]�p���^',
		'emconf_dbReq.details' => '�o�|�qext_tables.sql �ɩM ext_tables_static+adt.sql ��Ū�J�A�åB�V�A��ܩ����u��ݭn���Ǹ�ƪ�N���M�R�A�ƪ�',
		'emconf_dbStatus.alttitle' => '��Ʈw�n�D���p',
		'emconf_dbStatus.description' => '��ܸ�Ʈw���ثe���A�A�P�����u��ҭn�D���@���',
		'emconf_dbStatus.details' => '���p�����u��Q���J�A���p����ƪ����ä��p�ҮƥX�{�b��Ʈw���N�|��ܿ��~�T��',
		'emconf_flags.alttitle' => '�O��',
		'emconf_flags.description' => '�S�O�X���W��A���̷|�i�D�A���������u��|Ĳ��TYPO3�����ǳ���',
		'emconf_conf.description' => '��ܩ����u��O�_���˪��H�i���C�h�����]�w',
		'emconf_TSfiles.alttitle' => '�R�A��TypoScript�ɮ�',
		'emconf_TSfiles.description' => '��ܨ��@��TypoScript�R�A�ɮ׷|�X�{',
		'emconf_TSfiles.details' => '���pext_typoscript_constants.txt�ɩM���� ext_typoscript_setup.txt�b�����u�㪺��Ƨ��Q�o�{�A�L�̴N�Q�A�bTYPO3�Ҧ�TypoScript�˪������Ų��Ѥ��A�N�b��L�R�A�˪������e����',
		'emconf_locallang.alttitle' => 'locallang-files',
		'emconf_locallang.description' => '��ܨ��@�ǩR�٬��ulocallang.php�v���ɮץX�{�󩵦��u�㪺��Ƨ����]���i���j�M�^�C�o���ɮפ@��X�{��@��array$LOCAL_LANG�A�����t�λy��������',
		'emconf_moduleNames.alttitle' => '��ԼҲզW��',
		'emconf_moduleNames.description' => '��ܦb�����u�㤤��쨺�ӼҲ�',
		'emconf_classNames.alttitle' => 'PHP Class �W��',
		'emconf_classNames.description' => '��ܦb.php �M .inc �ɮפ���쨺�� PHP-Class',
		'emconf_errors.alttitle' => '���~',
		'emconf_errors.description' => '��ܦ��_�o�{�����u�㦳�����Y�������~',
		'emconf_NSerrors.alttitle' => '�W�٪Źj���~',
		'emconf_NSerrors.description' => '�Y�ǩR�W��k���Ψ쩵���u��C�o��ܵo�{�쪺���󤣲�',
		'emconf_NSerrors.details' => '�R�W��k�b�uInside TYPO3�v���w�w�q�F�C���F�ϩR�W�ɶq²��A�����קK�b�A�������u���_�r���[�W���u',
	),
	'eu' => Array (
	),
	'bg' => Array (
		'emconf_shy.alttitle' => 'Shy',
		'emconf_shy.description' => '��� � �������, ������������ ����������� �� � ������ � ��, ������ ���� �� � ��-������������ ��� � ���� ������ ���� ����� �� � ������� �����.',
		'emconf_shy.details' => '����������� ���� ���� ��� ���������� � �  \'����� ��������\' 
(����� �� � ������ ���� ������� - ������ ���������� �����
 �� � ����� �������...)
���� �� ������ ���� � ��� �� � ��������� (enabled) 
������������. 
���� � �������� � ��.
����������� "shy" � ������� �� ������ �������� 
��-������������ ���������� ��������� � TYPO3_CONF_VARS.',
		'emconf_category.alttitle' => '���������',
		'emconf_category.description' => '��� ��� ��������� ���������� ������������ (extension).',
		'emconf_category.details' => '<b>be:</b> Backend (����������� backend �����������, �� �� �����) 

<b>�����:</b> Backend ������ (������ ���� � ����� ��� � �������� � ���� �����)

<b>fe:</b> Frontend (����������� frontend ����������, �� �� "��������" plugin)

<b>plugin:</b> Frontend plugins (Plugins ������� ���� �������� Plugin� ������� �� ����������) 

<b>misc:</b> �������� ���� (������ ������� �� ����� �������)

<b>������:</b> �������� ���������� ( ����� ������ ���� ������� ��.)',
		'emconf_dependencies.alttitle' => '���������� �� ����� ���������� (extension)?',
		'emconf_dependencies.description' => '���� � ������ � ����� ������� �� ���������� �� ����� ���� ���������� ������� ����� �� ����� �������� ������ ��.',
		'emconf_dependencies.details' => '�� �� ��������� ���� ���������� ������ �� ������� ������� �� ������������ � localconf.php',
		'emconf_conflicts.alttitle' => '�������� � ����� ���������� (extension)?',
		'emconf_conflicts.description' => '������ �� ������� �� ���������� � ����� �� �� ������� (� ���� �� ����� �� ����� ���������� ����� ������� �� ����� �������������)',
		'emconf_priority.alttitle' => '������� ��������� ��� ���������',
		'emconf_priority.description' => '���� ����� �� �� �� ����� �� ����� ������������ �� ������� ����� � �������. ��-������������ � ����������.',
		'emconf_module.alttitle' => '����������� Backend ������',
		'emconf_module.description' => '��� ����� �������� ��� ���������� ������� backend ������, ������� �� ���� ����� ������ �� �� �������� ���.',
		'emconf_module.details' => '���� ��������� �� �� �� ���� �� �������������� �� ������, ����� �� ����� ������ �� ������ �� ������ ����� conf.php �� ������ �� �� ����� ���������� TYPO3_MOD_PATH ���������.',
		'emconf_state.alttitle' => '��������� �� ���������� (Development state)',
		'emconf_state.description' => '� ����� ��������� �� �������� �� ������ ������������.',
		'emconf_state.details' => '<b>����</b>
����� ������������ ��������. ���� �� �� ����� ����. 

<b>����</b>
��� ������ ��������. ������ �� ������ �� �����, �� �� � ��������� ��� ���.

<b>��������</b>
�������� � ���������� � ������������ .

<b>���������������</b>
����� ������ ���� ���� ����� ��������... ���� �� � ��� ��� ���� ����.

<b>����</b>
������� ����������, ������������� ���� � ��.',
		'emconf_internal.alttitle' => '�������� ���������� � ������',
		'emconf_internal.description' => '���� ���� ������� ��, �������� ��� �� ������ � ��������� ������ � ������������.',
		'emconf_clearCacheOnLoad.alttitle' => '������� ���� ������ �� ���������',
		'emconf_clearCacheOnLoad.description' => '��� � �������, �� �� ������ �� �� ������� ���� ���� ���� �� � ����������� ������������.',
		'.alttitle' => '��',
		'.description' => '�������� �� ���������� (��)',
		'emconf_private.alttitle' => '������',
		'emconf_download_password.alttitle' => '����� ��������',
		'emconf_type.alttitle' => '��� �� ������������',
		'emconf_type.description' => '���� �� ������������',
		'emconf_doubleInstall.alttitle' => '��� ���� ��� ������ �����������?',
		'emconf_dbReq.alttitle' => '���������� �� ������ �����',
		'emconf_dbStatus.alttitle' => '������ �� ������������ �� ������ �����',
		'emconf_flags.alttitle' => '�������',
		'emconf_TSfiles.alttitle' => '�������� TypoScript �������',
		'emconf_classNames.alttitle' => 'PHP Class �����',
		'emconf_classNames.description' => '������ ��� PHP-������� �� �������� � .php � .inc �������.',
		'emconf_errors.alttitle' => '������',
	),
	'br' => Array (
		'emconf_shy.alttitle' => 'Oculta',
		'emconf_shy.description' => 'Quando selecionada, esta extens�o normalmente � oculta no AE por ser considerada uma extens�o padr�o, ou por algum outro motivo de menor import�ncia.',
		'emconf_shy.details' => 'Use esta op��o se uma extens�o for de "raro interesse" (o que n�o significa que seja de pouca import�ncia - apenas uma extens�o procurada com pouca freq��ncia...)
Esta op��o n�o determina se a extens�o est� ou n�o ativada, apenas determina a visualiza��o no AE.
Normalmente a op��o "oculta" � usada em todas as extens�es carregadas por padr�o, conforme TYPO3_CONF_VARS.',
		'emconf_category.alttitle' => 'Categoria',
		'emconf_category.description' => 'Categoria � qual a extens�o pertence.',
		'emconf_category.details' => '<b>be:</b> Administra��o do Site (Geralmente orientada pela administra��o do site, mas n�o � um m�dulo)

<b>m�dulo:</b> M�dulos de administra��o do site (Quando algo � um m�dulo ou se conecta a algum)

<b>fe:</b> Site (Geralmente orientado pelo site, mas n�o um plugin "real")

<b>plugin</b> Plugins do site (Plugins inseridos como um elemento de conte�do "Inserir Plugin")

<b>misc:</b> Artigos de Miscel�nea (N�o podem ser facilmente colocados em outro lugar)

<b>exemplo:</b> Extens�o de exemplo (Que serve como um exemplo, etc.)',
		'emconf_dependencies.alttitle' => 'Depende de outras extens�es?',
		'emconf_dependencies.description' => 'Esta � uma lista das extens�es das quais esta extens�o depende que sejam carregadas ANTES dela.',
		'emconf_dependencies.details' => 'O AE estabelecer� tal depend�ncia ao gravar a lista de extens�es em localconf.php',
		'emconf_conflicts.alttitle' => 'Gera conflito com outras extens�es?',
		'emconf_conflicts.description' => 'Lista de extens�es com as quais esta extens�o n�o funciona (e portanto n�o pode ser ativada antes que as outras sejam desinstaladas)',
		'emconf_priority.alttitle' => 'Prioridade para carregamento da extens�o',
		'emconf_priority.description' => 'Esta op��o avisa ao AE para tentar carregar a extens�o como a primeira da lista. O padr�o � carreg�-la por �ltimo.',
		'emconf_module.alttitle' => 'M�dulos de administra��o inclusos',
		'emconf_module.description' => 'Se alguma subpasta de uma extens�o contiver m�dulos de administra��o, os nomes das subpastas ser�o listados aqui.',
		'emconf_module.details' => 'Informa ao AE sobre a exist�ncia do m�dulo, o que � importante j� que o AE precisa atualizar o arquivo conf.php do m�dulo para atribuir corretamente a constante TYPO3_MOD_PATH.',
		'emconf_state.alttitle' => 'Status de desenvolvimento',
		'emconf_state.description' => 'Em qual status de desenvolvimento a extens�o se encontra.',
		'emconf_state.details' => '<b>alfa</b>
Desenvolvimento em fase inicial. A extens�o pode n�o estar executando qualquer fun��o.

<b>beta</b>
Sob desenvolvimento. Pode estar funcionando parcialmente, mas n�o est� conclu�da.

<b>est�vel</b>
Est�vel e utilizada normalmente em produ��o.

<b>experimental</b>
N�o se sabe se vai chegar a algum lugar... Talvez seja ainda apenas uma id�ia.

<b>teste</b>
Extens�o para teste, para demonstrar conceitos, etc.',
		'emconf_internal.alttitle' => 'Internamente suportado pelo n�cleo',
		'emconf_internal.description' => 'Esta nota indica que o c�digo fonte do n�cleo est� especificamente ciente desta extens�o.',
		'emconf_internal.details' => 'Em outras palavras, esta marca nota deveria tratar sobre a mensagem "esta extens�o n�o pode ser escrita sem algumas modifica��es do c�digo fonte do n�cleo".

Uma extens�o n�o � interna s� porque usa as classes gerais do TYPO3, por exemplo, aquelas da pasta t3lib/. � claro que extens�es n�o-internas s�o caracterizadas pelo fato de que elas poderiam ser escritas sem fazer mudan�as no c�digo fonte do n�cleo, mas depende apenas de classes existentes no TYPO3 e/ou outras extens�es, al�m de seus pr�prios scripts na pasta de extens�es.',
		'emconf_clearCacheOnLoad.alttitle' => 'Limpar o cache quando instalada',
		'emconf_clearCacheOnLoad.description' => 'Quando selecionada, o AE solicitar� a limpeza do cache quando esta extens�o for instalada.',
		'emconf_modify_tables.alttitle' => 'Tabelas existentes modificadas',
		'emconf_modify_tables.description' => 'Lista de tabelas que apenas foram modificadas - n�o criadas a partir do zero - por esta extens�o.',
		'emconf_modify_tables.details' => 'Tabelas desta lista encontradas no arquivo ext_tables.sql desta extens�o',
		'.alttitle' => 'AE',
		'.description' => 'O Administrador de Extens�es (AE)',
		'emconf_private.alttitle' => 'Particular',
		'emconf_private.description' => 'Se marcado, esta vers�o n�o � mostrada na lista p�blica do reposit�rio online.',
		'emconf_private.details' => 'Uploads "Particulares" requerem que voc� manualmente digite uma chave especial (que ser� mostrada para voc� depois que o upload terminar) para ser poss�vel importar e ver os detalhes da extens�o enviada. Isso � bom para quando trabalha-se com algo internamente e n�o quer que outros vejam. Voc� pode marcar e desmarcar a caixa cada vez que enviar uma extens�o.',
		'emconf_download_password.alttitle' => 'Senha para download',
		'emconf_download_password.description' => 'Senha adicional necess�ria para baixar extens�es particulares.',
		'emconf_download_password.details' => 'Qualquer um que conhece a "chave especial", atribu�da ao upload particular, poder� import�-lo. Especificar uma senha para upload permite que voc� tire a chave de download para uploads particulares dados. A senha pode ser mudada mais tarde.',
		'emconf_type.alttitle' => 'Tipo de instala��o',
		'emconf_type.description' => 'O tipo da instala��o',
		'emconf_doubleInstall.alttitle' => 'Instalado duas vezes ou mais?',
		'emconf_doubleInstall.description' => 'Diz se a extens�o est� instalada em mais de uma localidade: Sistema, Global ou Localmente.',
		'emconf_doubleInstall.details' => 'Devido a uma extens�o residir em tr�s localidades, Sistema, Global e Local, isso indica se a extens�o � achada em outros lugares, al�m do atual. Nesse caso, voc� deve estar ciente de qual delas est� carregada!',
		'emconf_rootfiles.alttitle' => 'Arquivos da raiz',
		'emconf_rootfiles.description' => 'Lista dos arquivos no diret�rio da extens�o. N�o lista arquivos em subdiret�rios.',
		'emconf_dbReq.alttitle' => 'Necessidades do Banco de Dados',
		'emconf_dbReq.description' => 'Mostra as necessidades para as tabelas e campos do banco de dados, se tiver algum.',
		'emconf_dbReq.details' => 'Isso ir� ler o arquivo ext_tables.sql e ext_tables_static+adt.sql e mostrar a voc� quais tabelas, campos e tabelas est�ticas s�o requeridas com esta extens�o.',
		'emconf_dbStatus.alttitle' => 'Situa��o de necessidades do banco de dados',
		'emconf_dbStatus.description' => 'Mostra a estat�stica atual do banco de dados, comparado �s necessidades da extens�o.',
		'emconf_dbStatus.details' => 'Se a extens�o est� carregada, qual ir� mostrar uma mensagem de erro, se alguma das tabelas ou campos n�o se apresentarem no banco de dados como eles deveriam ser!',
		'emconf_flags.alttitle' => 'Marcas',
		'emconf_flags.description' => 'Uma lista de c�digos especiais que dizem a voc� algo sobre quais partes de TYPO3 a extens�o toca.',
		'emconf_errors.alttitle' => 'Erros',
	),
	'et' => Array (
	),
	'ar' => Array (
	),
	'he' => Array (
		'emconf_category.alttitle' => 'קטגוריה',
	),
	'ua' => Array (
	),
	'lv' => Array (
	),
	'jp' => Array (
	),
	'vn' => Array (
	),
);
?>