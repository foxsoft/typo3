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