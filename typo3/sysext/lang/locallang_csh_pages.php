<?php
/**
 * Default  TCA_DESCR for "pages"
 * TYPO3 CVS ID: $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'title.description' => 'Enter the title of the page or folder.',
		'title.syntax' => 'You must enter a page title. The field is required.',
		'.description' => 'A \'Page\' record usually represents a webpage in TYPO3. All pages has an id-number by which they can be linked and referenced. The \'Page\' record does not itself contain the content of the page - for this purpose you should create \'Page content\' records.',
		'.details' => 'Depending on the \'Type\' of the page, it may also represent a general storage for database elements in TYPO3. In that case it is not necessarily available as a webpage but only internally in the page tree as a place to store items such as users, subscriptions etc.
The pages table is the very backbone in TYPO3. All records editable by the mainstream modules in TYPO3 must \'belong\' to a page. It\'s exactly like files and folders on your computers harddrive. 
The pages are organized in a tree structure which is not only a very handy way of organizing in general but also a optimal reflection of how you should organize the pages on your website. And thus you\'ll normally find that the page tree is a reflection of the website navigation itself.

Technically all database elements has a field \'uid\' which is a unique identification number. Further they must have a field \'pid\' which holds the uid-number of the page (page id) to which they belong. If the \'pid\' field is zero the record is found in the so called \'root\'. Only administrators are allowed access to the root and furthermore table records must be configured to either belonging to a page or being found in the root.',
		'doktype.description' => 'Select the page type. This affects whether the page represents a visible webpage or is used for other purposes.',
		'doktype.details' => 'The \'Standard\' type represents a webpage.
\'SysFolder\' represents a non-webpage - a folder acting as a storage for records of your choice.
\'Recycler\' is a garbage bin.

<B>Notice:</B> Each type usually has a specific icon attached. Also certain types may not be available for a user (so you may experience that some of the options is not available for you!). And finally each type is configured to allow only certain table records in the page (SysFolder will allow any record if you have any problems).',
		'TSconfig.description' => 'Page TypoScript configuration.',
		'TSconfig.details' => 'Basically \'TypoScript\' is a concept for entering values in a tree-structure. This is known especially in relation to creating templates for TYPO3 websites.
However the same principle for entering the hierarchy of values is used here to configure various features in relation to the backend, functions in modules, the Rich Text Editor etc. 
The resulting \'TSconfig\' for a page is actually an accumulation of all \'TSconfig\' values from the root of the page tree and outwards to the current page. And thus all subpages are affected as well. A print of the page TSconfig is available from the \'Page TSconfig\' menu in the \'Web>Info\' module (requires the extension "info_pagetsconfig" to be installed).
',
		'TSconfig.syntax' => 'Basic TypoScript syntax <em>without</em> \'Conditions\' and \'Constants\'.

It\'s recommended that only admin-users are allowed access to this field!',
	),
	'dk' => Array (
		'title.description' => 'Indtast titlen p� siden eller mappen.',
		'title.syntax' => 'Du skal indtaste en sidetitel. Dette felt er p�kr�vet.',
		'.description' => 'Et "Side" element repr�senterer normalt en webside i TYPO3. Alle sider har et ID nummer med hvilket man kan referere eller linke til siderne. Side-elementet indeholder ikke selv sidens indhold - til dette form�l b�r du oprette "Indholdselementer".',
		'.details' => 'Afh�ngigt af sidens "Type" s� kan en side ogs� repr�sentere en indholdsfolder for database elementer i TYPO3. I s�dan et tilf�lde er siden ikke n�dvendigvis tilg�ngelig som en webside men kun internt i sidetr�et som et sted, hvor elementer s� som brugere, tilmeldinger etc. kan gemmes.
Side-tabellen er selve TYPO3s rygrad. Alle elementer (records) som kan redigeres med TYPO3 skal "tilh�re" en side. Det er pr�cis som med filer og mapper p� din computers harddisk.
Siderne er organiseret i en tr�struktur som ikke blot er en v�ldig praktisk metode til strukturering i almindelighed men som ogs� er en optimal reflektion af, hvordan du b�r organisere siderne p� dit website. Og s�ledes vil du erfare at side-tr�et normalt er en reflektion af websitets navigationsstruktur.

Teknisk set har alle database elementer et felt, "uid", som er et unikt identifikationsnummer. Derudover skal alle elementer have et "pid" felt, som indeholder uid-nummeret p� den side (page id) som de tilh�rer. Hvis pid-feltet er nul, s� tilh�rer elementet "roden" af sidetr�et. Det er kun administratorer, som har adgang til roden af sidetr�et og desuden skal en tabel konfigureres til at tilh�re enten roden eller et sted i sidetr�ets grene.',
		'doktype.description' => 'V�lg sidens type. Dette p�virker hvorvidt siden repr�senterer en synlig webside eller bruges til andre form�l.',
		'doktype.details' => '"Standard" typen repr�senterer en webside.
"SysFolder" repr�senterer en ikke-webside - en mappe som fungerer som opbevaringsplads for elementer efter dit valg.
"Recycler" er en skraldespand.

<b>Bem�rk:</b> Hver type har normalt et s�rligt ikon tilknyttet. Desuden kan visse typer v�re utilg�ngelige for en bruger (s� du kan opleve at nogle muligheder ikke er tilg�ngelige for dig!). Og endeligt s� er hver type sat op til kun at tillade visse tabel-elementer p� siden. (SysFolder vil dog tillade et hvilken som helst element hvis du skulle f� nogle problemer).',
		'TSconfig.description' => 'TypoScript ops�tningskode for siden.',
	),
	'de' => Array (
	),
	'no' => Array (
		'title.description' => 'Skriv inn tittelen p� siden eller mappen.',
		'title.syntax' => 'Du m� skrive inn en sidetittel. Dette feltet er p�krevd.',
		'.description' => 'Et "Side" element representerer normalt en webside i TYPO3. Alle sider har et ID nummer som kan benyttes for � referere eller linke til sidene. Side-elementet inneholder ikke sidens innhold selv � til dette form�let b�r du opprette "Innholdselementer".',
		'.details' => 'Avhengig av sidens "Type" kan siden ogs� v�re en innholdsmappe for database elementer i TYPO3. I slike tilfeller er ikke siden n�dvendigvis tilgjengelig som en webside, men kun internt i sidetreet som et sted hvor elementer som brukere, innmeldinger etc. kan lagres.
Side-tabellen er selve TYPO3s ryggrad. Alle element (records) som kan redigeres med TYPO3 skal "tilh�re" en side. Det er akkurat som med filer og mapper p� din datamaskins harddisk.
Sidene er organisert i en trestruktur som ikke bare er veldig praktisk metode for strukturering i alminnelighet, men som ogs� er en optimal gjengivelse av hvordan du b�r organisere sidene p� webomr�det ditt. P� den m�ten vil du se at sidetreet normalt er en refleksjon av webomr�dets navigasjonstruktur.

Teknisk sett har alle database elementer et felt, "uid", som er et unikt identifikasjonsnummer. Utover dette m� alle elementer ha et "pid" felt som inneholder uid-nummeret for den siden (page id) som de tilh�rer. Hvis pid-feltet er null tih�rer elementet "roten" av sidetreet. Det er kun administratorer som har tilgang til roten av sidetreet og videre m� en tabell konfigureres til � tilh�re enten roten eller et sted i sidetreets grener.',
		'doktype.description' => 'Velg sidetype. Dette p�virker hvorvidt siden er en synlig webside eller brukes til andre form�l.',
		'doktype.details' => '"Standard" typen er en webside.
"SysFolder" er en ikke-webside � en mappe som fungerer som oppbevaringsplass for valgfrie elementer.
"Papirkurv" er ogs� et valg.

<b>Merk:</b> Hver type har normalt et eget ikon tilknyttet. Dessuten kan visse typer v�re utilgjengelige for en bruker (s� du kan oppleve at noen muligheter ikke er tilgjengelige for deg!). Hver type er satt opp til kun � tillate visse tabellelementer p� siden. (SysFolder vil dog tillate et hvilket som helst element hvis du skulle f� problemer).',
		'TSconfig.description' => 'TypoScript konfigurasjonskode for siden.',
	),
	'it' => Array (
	),
	'fr' => Array (
	),
	'es' => Array (
	),
	'nl' => Array (
	),
	'cz' => Array (
	),
	'pl' => Array (
	),
	'si' => Array (
	),
	'fi' => Array (
		'title.description' => 'Anna sivun tai hakemiston nimi.',
		'title.syntax' => 'Sinun tulee antaa nimi sivulle. T�m� on pakollinen tieto.',
		'.description' => '\'Sivu\' (\'Page\')  tieto esitt�� useimmiten kokonaista www-sivua Typo3ssa. Kaikilla sivuilla on ID-numero jonka perusteella niit� voidaan linkitt�� ja referoida. \'Sivu\' tiedossa ei itsess��n ole sis�lt�� vaan t�h�n tarkoitukseen on Sinun luotava \'Sivun sis�lt�\' (\'Page content\') tiedot.',
		'.details' => '\'Tyyppi\' (\'\'Type\') valinnasta riippuen sivu voi toimia my�s yleisen� Typo3 tietokannan elementtien varastona. T�ss� tapauksessa sivut eiv�t ole v�ltt�m�tt� varsinaisia www-sivuston sivuja vaan sis�isi� sivuja puurakenteessa jonne on talletettu tietoja, kuten k�ytt�j�t, linkit, linkkiluokat tms.
Sivutaulu on TYPO3n selk�ranka. Kaikkien keskeisill� aliohjelmilla muokattavien tietojen TYPO3ssa on \'kuuluttavat\' sivulle. Tilanne on saman kaltainen kuin tiedostot ja hakemistot oman tietokoneesi kovalevyll�.
Sivut on j�rjestetty puurakenteeseen joka ei ole ainoastaan k�yt�nn�llinen menetelm� mutta  vastaa kuinka Sinun tulisi j�rjest�� sivut  optimaalisesti www-sivustollesi. N�in huomaat normaalisti my�s ett� puurakenne vastaa my�s siirtymisi� www-sivustolla.

Teknisesti kaikissa tietokannan elementeiss\' on \'uid\' joka on yksil�llinen tunnus. Edelleen elementeill� tulee olla tieto \'pid\' joka sis�lt�� kunkin sivun \'uid\' tunnuksen mik�m kukin elemntti kuuluu. Jos \'pid\' tieyto on nolla, tietoa kutsutaan silloin ns. juureksi (root).  Vain admistraattoreilla on oikeus juuren k�sittelyyn. Lis�ksi kaikkien taulun tietojen tulee olla asetettuja kuulumaan joko johonkin sivuun tai juureen.',
		'doktype.description' => 'Valitse sivun tyyppi. T�m�n vaikutus on; kuuluuko sivu johonkin n�kyv��n sivuun vai k�ytet��nk� sit� muuhun tarkoitukseen.',
		'doktype.details' => '\'Standard\' tyyppi on normaali esitett�v� www-sivu.
\'SysFolder\' tarkoittaa ei-esitett�v�� sivua - se esitt�� hakemistoa jonne on tallennettu haluamiasi tietoja.
\'Filecycler\' tarkoittaa roskakoria.

<B>Huomautus:</B>Eri tyypeill� on yleens� erilaiset ikonit. On huomattavaa ettei kaikkia tyyppej� ole k�yt�ss� erilaisilla k�ytt�jill� (voit ehk� huomata sen nytkin!) Ja lopuksi, erilaiset tyypit on konfiguroitu k�ytt�m��n ainoastaan m��rittyj� taulu tietoja sivuilla (SysFolder mahdollistaa mink� tahansa tiedon jos Sinulla on ongelmia).',
		'TSconfig.description' => 'Sivun TypoScript asetukset.',
		'TSconfig.details' => 'Periaatteessa \'TypoScript\' on konsepti jolla annetaan arvoja puu-rakenteessa. T�m� tulee erityisesti esille luotaessamallinteita TYPO3 www-sivustoille.
Kuitenkin samaa periaatetta k�ytet��n kun annetaan arvoja hierarkkisesti konfiguroitaessa erilaisia ominaisuuksia taustatoiminnoille, apuohjelmien toiminnalle jne.
Lopputuloksena syntyy sivulle \'TSconfig\' joka on itse asiassa kaikkien arvojen summa juuresta kullekin sivulle asti. My�s ko. sivun alasivut saavat vaikutuksen ylemmist�.Sivun TSconfig tiedodoista saa tulosteen valikosta \'Sivun TSconfig\' (\'Page TSconfig\') \'Web>Info\' modulissa (lis�ohjelma "info_pagetsconfig" tuleeolla asennettuna).',
		'TSconfig.syntax' => 'Perus TypoScript syntaksi <em>ilman</em> \'Conditions\' ja \'Constants\'.

Suositellaan vain admin-k�ytt�jille p��sy� t�h�n tietoon!',
	),
	'tr' => Array (
	),
	'se' => Array (
	),
	'pt' => Array (
	),
	'ru' => Array (
	),
	'ro' => Array (
	),
	'ch' => Array (
	),
	'sk' => Array (
	),
	'lt' => Array (
	),
	'is' => Array (
	),
	'hr' => Array (
	),
	'hu' => Array (
	),
	'gl' => Array (
	),
	'th' => Array (
	),
	'gr' => Array (
	),
	'hk' => Array (
	),
	'eu' => Array (
	),
	'bg' => Array (
	),
	'br' => Array (
	),
	'et' => Array (
	),
	'ar' => Array (
	),
	'he' => Array (
	),
	'ua' => Array (
	),
);
?>