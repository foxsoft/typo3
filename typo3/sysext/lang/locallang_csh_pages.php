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
		'.description' => '\'Sivu\'-tietue esitt�� useimmiten kokonaista www-sivua Typo3ssa. Kaikilla sivuilla on ID-numero, jonka perusteella niihin voidaan linkitt�� ja viitata. \'Sivu\'-tietueessa ei itsess��n ole sis�lt��, vaan t�h�n tarkoitukseen sinun on luotava \'Sivun sis�lt�\' -tietueita.',
		'.details' => '\'Tyyppi\' (\'\'Type\') valinnasta riippuen sivu voi toimia my�s yleisen� Typo3 tietokannan elementtien varastona. T�ss� tapauksessa sivut eiv�t ole v�ltt�m�tt� varsinaisia www-sivuston sivuja vaan sis�isi� sivuja puurakenteessa jonne on talletettu tietoja, kuten k�ytt�j�t, linkit, linkkiluokat tms.
Sivutaulu on TYPO3n selk�ranka. Kaikkien keskeisill� aliohjelmilla muokattavien tietojen TYPO3ssa on \'kuuluttavat\' sivulle. Tilanne on saman kaltainen kuin tiedostot ja hakemistot oman tietokoneesi kovalevyll�.
Sivut on j�rjestetty puurakenteeseen joka ei ole ainoastaan k�yt�nn�llinen menetelm� mutta  vastaa kuinka Sinun tulisi j�rjest�� sivut  optimaalisesti www-sivustollesi. N�in huomaat normaalisti my�s ett� puurakenne vastaa my�s siirtymisi� www-sivustolla.

Teknisesti kaikissa tietokannan elementeiss� on \'uid\' joka on yksil�llinen tunnus. Edelleen elementeill� tulee olla tieto \'pid\' joka sis�lt�� kunkin sivun \'uid\'-tunnuksen jolle kukin elementti kuuluu. Jos \'pid\' tieto on nolla, tietoa kutsutaan silloin ns. juureksi (root). Vain p��k�ytt�jill� on oikeus juuren k�sittelyyn. Lis�ksi kaikkien taulun tietojen tulee olla asetettuja kuulumaan joko johonkin sivuun tai juureen.',
		'doktype.description' => 'Valitse sivun tyyppi. T�m�n tarkoituksena on m��ritt�� n�kyyk� sivu tavallisena web-sivuna vai k�ytet��nk� sit� johonkin muuhun tarkoitukseen.',
		'doktype.details' => '\'Normaali\'-tyyppi on tavallinen esitett�v� www-sivu.
\'SysFolder\' tarkoittaa ei-esitett�v�� sivua - se esitt�� hakemistoa jonne on tallennettu haluamiasi tietoja.
\'Recycler\' tarkoittaa roskakoria.

<B>Huomautus:</B>Eri tyypeill� on yleens� erilaiset ikonit. Kaikki tyypit eiv�t my�sk��n ole k�yt�ss� kaikilla k�ytt�jill� (voit ehk� huomata sen nytkin!). Ja lopuksi, erilaiset tyypit on konfiguroitu k�ytt�m��n ainoastaan m��rittyj� taulutietoja sivuilla (SysFolder mahdollistaa mink� tahansa tiedon jos Sinulla on ongelmia).',
		'TSconfig.description' => 'Sivun TypoScript-asetukset.',
		'TSconfig.details' => 'Periaatteessa \'TypoScript\' on konsepti jolla annetaan arvoja puu-rakenteessa. T�m� tulee erityisesti esille luotaessa mallipohjia TYPO3 www-sivustoille.
Kuitenkin samaa periaatetta k�ytet��n kun annetaan arvoja hierarkkisesti konfiguroitaessa erilaisia ominaisuuksia taustatoiminnoille, apuohjelmien toiminnalle jne.
Lopputuloksena syntyy sivulle \'TSconfig\' joka on itse asiassa kaikkien arvojen summa juuresta kullekin sivulle asti. My�s ko. sivun alasivut saavat vaikutuksen ylemmist�. Sivun TSconfig tiedoista saa tulosteen valikosta \'Sivun TSconfig\' (\'Page TSconfig\') \'Web>Info\' modulissa (lis�ohjelma "info_pagetsconfig" tulee olla asennettuna).',
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
		'title.description' => 'Unesite naslov stranice ili pretinca',
		'title.syntax' => 'Obavezno je unjeti naslov stranice.',
		'.description' => 'Zapis \'stranica\' obi�no predstavlja web stranicu u TYPO3 sustavu. Sve stranice imaju id broj pomo�u kojega mogu biti povezane i referencirane. Zapis \'Stranica\' ne obuhva�a sam sadr�aj ve� je za to potrebno kreirati zapis \'Sadr�aj stranice\'.',
		'.details' => 'U zavisnosti od tipa stranice ona mo�e predstavljati repozitorij raznih podatakovnih elemenata u TYPO3 sustavu. U tom slu�aju nije nu�no da predstavlja web stranicu ve� interno unutar stabla stranica mo�e predstavljati mjesto za pohranu raznih podataka kao �to su korisnici, pretplate i sli�no.
Stranice su duboko ukorijenjene u TYPO3. Svi zapisi koji se mogu editirati iz glavnih TYPO3 modula moraju pripadati nekoj stranici. To je vrlo sli�no datotekama koje moraju pripadati pretincima.
Stranice su organizirane u stablo �to nije samo prikladan na�in organiziranja podataka ve� i uobi�ajen na�in organiziranja stanica unutar web sjedi�ta. Tako�er, uobi�ajeno je da stablo stranica predstavlja i sam na�in organizacije navigacije.

Tehni�ki gledano svi elementi baze imaju polje \'uid\' koje predstavlja jedinstveni identifikacioni broj. Tako�er moraju imati i polje \'pid\' koji sadr�i uid oznaku stranice kojoj odre�enmi element pripada. Ukoliko je \'pid\' oznaka nula zapis senalazi u po�etnoj (root) stranici. Samo administraotri imaju dozvolu pristupa po�etnoj stranici i osim toga zapisi moraju biti konfigurirani tako da pripadaju nekoj od stranica ili biti u po�etnoj stranici.',
		'doktype.description' => 'Selektirajte tip stranice. Ovo ima utjecaj na sadr�aj stranice, da li �e biti web stranica ili iskori�tena za neku drugu svrhu.',
		'doktype.details' => 'Standardni tip predstavlja web stranicu.
\'SysFolder\' (sistemski pretinac) predstavlja repozitorij - pretinac u koji mo�ete spremiti razne zapise prema vlastitom izboru.
\'Recycler\' predstavlja kanticu za sme�e, to jest obrisani sadr�aj.

<B>Napomena:</B> Svaki tip obi�no je specificiran odre�enom ikonom. Tako�er, glavni tipovi mogu biti nedostupni za korisnika (tako da mo�ete imati osje�aj da vam neke od opcija nisu dostupne!). I na kraju svaki tip stranice omogu�ava samo odre�ene zapise na stranici (ukoliko imate bilo kakvih problema SysFolder omogu�ava svaki zapis).',
		'TSconfig.description' => 'Stranica TypoScript konfiguracije.',
		'TSconfig.details' => 'U osnovi \'TypoScript\' je koncept za unos vrijednosti putem strukture stabla. Princip je poznat iz na�ina kreiranja predlo�aka za TYPO3 web sjedi�te.
Tako�er, ovdje se primjenjuje jednak princip hijerarhijskog unosa vrijednosti za potrebe konfiguriranja razli�itih zna�ajki u odnosu na osnovu sustava (backend), funkcije modula, WYWIWYG editora i sli�no. 
Kona�ni \'TSconfig\' stranice je rezultat akumuliranja svih \'TSconfig\' vrijednosti od po�etne stranice stabla prema trenutnoj stranici. Na taj na�in sve prethodne stranice u hijerarhiji utje�u na konfiguraciju. Ispis stranice TSconfig mogu� je iz menija \'Stranica TSconfig\' u \'Web>Info\' modulu (zahtijeva da bude instalirano pro�irenje "info_pagetsconfig").',
		'TSconfig.syntax' => 'Osnovna TypoScript sintaksa <em>bez</em> \'uvjeta\' i \'konstanti\'.

Preporu�ljivo je da samo korisnici s administratorskim dozvolama imaju pristup do ovog polja!',
	),
	'hu' => Array (
		'title.description' => 'Add meg az oldal vagy k�nyvt�r c�m�t.',
		'title.syntax' => 'Meg kell adnod egy oldalc�met. Ez a mez� k�telez�.',
		'.description' => 'A \'Page\' rekord �ltal�ban egy weboldalt jelent a TYPO3-ban. Minden oldalnak van egy id-sz�ma, amivel hivatkozni lehet r�. A \'Page\' rekord nem tartalmazza az oldal tartalm�t - ez�rt l�tre kell hozni \'Oldal tartalom\' rekordokat.',
		'.details' => 'Az oldal t�pus�t�l f�gg�en ez is az adatb�zis elemek t�rol�s�t
k�pviseli a TYPO3-ban. Abban az esetben , ha nem sz�ks�ges
az el�r�s weblapk�nt, hanem csak bels�leg az oldalrendszeren
bel�l olyan t�rol�si hely gyan�nt, mint felhaszn�l�k,
feliratkoz�sok, stb.
Az oldalak t�bl�ja adja a TYPO3 gerinc�t. A TYPO3-ban
minden f��ram� modul �ltal szerkeszthet� rekord egy oldalhoz
\'tartozik\'. Pontosan �gy, mint a f�jlok �s k�nyvt�rak a
merevlemezen.
Az oldalak egy faszer� strukt�r�ba vannak rendezve, amely
nemcsak k�nnyen kezelhet�s�get biztos�t, hanem egy
optim�lis t�kre annak, hogy hogyan kell az oldalakat
szervezni a webhelyen bel�l. �s �gy r�j�het�nk arra, hogy a
fastrukt�ra mag�nak a webhely navig�ci�nak a
visszat�kr�z�d�se.

Technikailag minden adatb�zis elemnek van egy \'uid\' azaz
egyedi azonos�t� sz�mot k�pvisel� mez�je. Tov�bb� ezek
az elemeknek rendelkezni�k kell egy \'pid\' sz�l�azonos�t�
mez�vel, amely azonos�tja azt az oldalt, ahova tartoznak.
Ha egy \'pid\' mez� z�rus, akkor a rekord az �n. \'gy�k�rben\'
tal�lhat�. A gy�k�rhez csak az adminisztr�torok f�rnek hozz�
illetve a t�blarekordokat �gy kell konfigur�lni, hogy vagy egy
oldalhoz vagy a gy�k�rhez tartozzanak.',
		'doktype.description' => 'V�laszd ki az oldal t�pus�t. Ett�l f�gg, hogy az oldal l�that� vagy egy�b c�lokra szolg�l.',
		'doktype.details' => 'A \'Standard\' t�pus egy weboldalt k�pvisel, a \'SysFolder\'
- amely nem weboldal - egy olyan k�nyvt�r, amely az �ltalad
kiv�lasztott rekordok kezel�s�t v�gzi, a \'Recycler\' pedig
egy lomt�r.

<B>Figyelem:</B> Minden t�pushoz egy speci�lis ikon van
csatolva. Vannak bizonyos, felhaszn�l�k �ltal el nem �rhet�
t�pusok (a tapasztalat szerint olyanok, amit nem tudsz el�rni).
�s v�g�l minden t�pus �gy van konfigur�lva, hogy csak
az oldal bizonyos t�blarekordjait enged�lyezik (a SysFolder
enged�lyez b�rmely rekordot probl�ma eset�n).',
		'TSconfig.description' => 'Az oldal TypoScript be�ll�t�sa.',
		'TSconfig.details' => 'Alapj�ban a \'TypoScript\' egy koncepci� �rt�kek elhelyez�s�re a 
fastrukt�r�ban. Ez k�l�n�sen j�l ismert a TYPO3 weboldalak
�s a sablonk�sz�t�s kapcsolat�ban.
Teh�t ugyanaz az beviteli hierarchia alapelv haszn�latos itt is,
amely be�ll�t sz�mos elemet a backenddel kapcsolatban,
m�veleteket a modulokban, a Rich Text Editor, stb.
Ez eredm�ny \'TSconfig\' egy oldalra n�zve az gy�k�rt�l az adott
oldalig az �sszes oldal \'TSconfig\' �rt�kek halmoz�sa. �gy
minden aloldal is �rintve van. A TSconfig oldal nyomata
el�rhet� az \'Oldal TSconfig\' men�b�l, amely a \'Web>Info\'
modulban tal�lhat� (sz�ks�ges az "info_pagetsconfig"
kiterjeszt�s el�zetes telep�t�se).',
		'TSconfig.syntax' => 'Alap TypoScript szintaxis \'Felt�telek\' �s \'Konnstansok\' <em>n�lk�l</em>.

Javaslat: csak admin-felhaszn�l�knak legyen enged�lyezve a mez� el�r�se!',
	),
	'gl' => Array (
	),
	'th' => Array (
	),
	'gr' => Array (
	),
	'hk' => Array (
		'title.description' => '��J�����θ�Ƨ����W��',
		'title.syntax' => '�A�����n��J�@�Ӻ����W�١C�o��O�������C',
		'.description' => '�b TYPO3 ���@�ӡu�����v�O���q�`�N��@�Ӻ����C�Ҧ����������@�ӽs���A�z�L�o�ӽs�������i�H�Q�s���M�ѷӡC�u�����v�O���������t�����������e - �n�F���o�ت��A���ӫإߡu�������e�v�O���C',
		'.details' => '���G�������u�����v, ���]�i�H�N��b TYPO3 ���@�Ӵ��q����Ʈw�����x�s�C�b�o�ӱ��p�U�A�������O�@�ӥi�[�ݪ������A�ӥu�O������Ϥ����b�@���x�s����]�ϥΪ̩M�q�\\���^���a��C
������ƪ�O TYPO3 �����ϡC�Ҧ��i�H�g TYPO3 �D�Ҳխק諸���O���@�w�u�ݩ�v�@�Ӻ����C�N�n���A���q���w�Ф�����Ƨ��M�ɮפ@�ˡC
�����Q��´���@�ӡu��ϡv�A������O�@�ӫD�`��K����´�A�]�̦��ĤϬM�A���Ӧp���´�A�����������C�]���A�q�`�A�|�o�{������ϤϬM�����������ɦV�C
�޳N�W�A�Ҧ�����Ʈw���󳣦��@�ӡuUID�v��A���O�W�@���u�{�ҡv�s���C�������~�A���̤@�w���@�ӡuPID�v��A���t���L�̩��ݪ��������s���C���p�uPID�v��O�s�A�O���N�O�b�Q�٬��u�ڡv���C�u���޲z���Q�\\�i�s���ڡA�ӥB��ƪ�O���@�w�n�]�w���ݩ�@�Ӻ����Φ��ڤ��C',
		'doktype.description' => '��ܺ��������C�o�v�T�����O�@�ӥi�[�ݪ������άO�@����L�γ~�C',
		'doktype.details' => '�u�зǡv�����N��@�Ӻ����C
�u�t�θ�Ƨ��v�N��@�ӫD���� - �@�Ӹ�Ƨ��@���A��ܪ��O�����x�s�C
�u�^�����v�O�@�өU���c�C

<B>�d�N�G</B>�C�@���q�`�������@�ӯS�w���ϥܡC�P�ɹ�Y�ӥήa�i�ण��ϥάY�Ǻ����]�]���A�i��g����A����ϥάY�ǿﶵ�^�C�̫�C�@�������Q�]�w�Ӯe�\\�u���Y�Ǹ�ƪ�O���s��������]�t�θ�Ƨ��|�e�\\����O���A���p�A��������D�^�C',
		'TSconfig.description' => '���� TypoScript �]�w�C',
		'TSconfig.details' => '�򥻤W�@�uTypoScript�v�O�@�Ӧb��Ϥ���J�ƭȪ������C�S�O�O���Y�쬰 TYPO3 �����إ߼˪��ɡC
�M�ӬۦP����h�A�Ω��J�ƭȨt�ΥH�]�w�P��Ԩt�Τ����P���\\��, �Ҳժ��\\��, �h�\\���r�s�边���C
�@�Ӻ������̲סuTSconfig�v��b�O�ֿn�F�q������Ϫ��ڭ��ܲ{���������Ҧ��uTSconfig�v�ƭȡC�Ӧ]���Ҧ��ƭ����Q�v�T�C�A�i�H�b�uWeb>Info�v�]�A�ݭn�w�� "info_pagetsconfig" �����u��^�Ҳդ����uPage TSconfig�v��椤��@�Ӻ����� �uTSconfig�v�ƥ��C',
		'TSconfig.syntax' => '�򥻪� TypoScript �y�k <em>�S��</em>�u����v�M�u�`�ȡv�C

�ڭ̫�ĳ�u���޲z���ŨϥΪ̤~�Q�\\�i�s���o����ءC',
	),
	'eu' => Array (
	),
	'bg' => Array (
		'title.description' => '�������� �������� �� ���������� ��� �������.',
		'title.syntax' => '������ �� �������� �������� �� ����������. ������ � ���������.',
		'.description' => '����� \'��������\' ����������� ������������ ��� �������� � TYPO3. ������ �������� ���� id-����� �� ����� ����� �� ����� ��������� ��� �������������. ������ \'��������\' �� ������� � ���� �� ������������ �� ���������� - �� ���� ��� ������ �� ��������� ����� \'���������� �� ����������\'.',
		'doktype.description' => '�������� ��� �� ����������. ���� ������ ���� ���������� �� ������������ ������ ��� �������� ��� � �� �������� �� ����� �����.',
		'TSconfig.description' => '������������ �� TypoScript ����������.',
		'TSconfig.syntax' => '�������� TypoScript ��������� <em>���</em> \'�������\' and \'���������\'.

�������������� � ���� ����� ����������� �� ���� �������� ������ �� ���� ����!',
	),
	'br' => Array (
		'title.description' => 'Digite o t�tulo da p�gina ou pasta.',
		'title.syntax' => 'Voc� precisa digitar um t�tulo para a p�gina. Este campo � obrigat�rio.',
		'.description' => 'Um registro do tipo \'P�gina\' normalmente representa uma p�gina web no TYPO3. Todas as p�ginas possuem um n�mero de identifica��o atrav�s do qual elas podem ser acessadas e referenciadas. O registro \'p�gina\' n�o armazena em si o conte�do da p�gina - para essa finalidade voc� deve criar registros do tipo \'Conte�do de p�gina\'.',
		'.details' => 'Dependendo do \'Tipo\' da p�gina, ela pode representar um armaz�m de elementos da base de dados do TYPO3. Neste caso, n�o estar� necessariamente dispon�vel como uma p�gina web, mas apenas internamente na �rvore de p�ginas, como um local para armazenar �tens como usu�rios, assinaturas, etc. A tabela de p�ginas � a estrutura b�sica no TYPO3. Todos os registros edit�veis pelos m�dulos principais do TYPO3 precisam \'pertencer\' a uma p�gina. � exatamente como os arquivos e pastas do disco r�gido de seu computador.
As p�ginas s�o organizadas dentro de uma estrutura de �rvore, a qual � n�o apenas uma forma bastante pr�tica de organiza��o de modo geral, mas tamb�m uma representa��o apropriada de como voc� deve organizar as p�ginas dentro do seu site. Desta forma, voc� perceber� que a �rvore de p�ginas � uma representa��o da pr�pria estrutura de navega��o do site.

Tecnicamente, todos os elementos do banco de dados possuem um campo \'uid\', que cont�m um n�mero de identifica��o �nico. Al�m disso, possuem tamb�m um campo \'pid\', que cont�m o n�mero de identifica��o da p�gina � qual eles pertencem. Se o campo \'pid\' � zero, o registro se encontra na chamada \'raiz\'. Apenas usu�rios-administradores possuem acesso � raiz e portanto os registros precisam ser configurados, ou para pertencer a uma p�gina, ou para serem encontrados na raiz.',
		'doktype.description' => 'Selecione o tipo da p�gina. Esta op��o define se a p�gina representa uma p�gina web vis�vel ou se � usada para outras finalidades.',
		'doktype.details' => 'O tipo \'Padr�o\' representa uma p�gina web. \'Pasta de Sistema\' representa uma p�gina n�o-web - uma pasta atuando como armaz�m de registros � sua escolha. \'Lixeira\' representa um local para exclus�o de registros.

<B>Nota:</B> Cada tipo normalmente possui um �cone espec�fico. Al�m disso, certos tipos podem n�o estar dispon�veis a todos os usu�rios (assim talvez algumas das op��es podem n�o estar dispon�veis para voc�!). E finalmente, cada tipo � configurado para permitir apenas certas op��es de registros dentro da p�gina (o tipo \'Pasta de Sistema\' permitir� qualquer registro, caso voc� encontre algum problema).',
		'TSconfig.description' => 'Configura��o TypoScript da p�gina.',
		'TSconfig.details' => 'Basicamente, \'TypoScript\' � um conceito para atribuir valores em uma estrutura de �rvore. Este conceito � observado especialmente durante a cria��o de modelos para sites TYPO3.
Entretanto, o mesmo princ�pio para atribui��o da hierarquia de valores � usado aqui para configurar v�rias caracter�sticas em rela��o � administra��o do site, �s fun��es dos m�dulos, ao editor Rich Text, etc. O \'TSconfig\' resultante para a p�gina � na verdade o ac�mulo de todos os valores \'TSconfig\' herdados desde a raiz do site at� a p�gina atual. E da mesma forma, todas as subp�ginas ser�o afetadas tamb�m. 
Uma visualiza��o do TSconfig da p�gina est� dispon�vel no menu \'TSconfig da p�gina\', presente no m�dulo \'Web>Info\' (requer a instala��o da extens�o "info_pagetsconfig").',
		'TSconfig.syntax' => 'Sintaxe b�sica TypoScript <em>sem</em> \'Condi��es\' e \'Constantes\'.

� recomendado que apenas os usu�rios-administradores tenham acesso permitido a este campo!',
	),
	'et' => Array (
	),
	'ar' => Array (
	),
	'he' => Array (
		'title.description' => 'הכנס שם הדף או התיקייה',
		'title.syntax' => 'עליך להזין שם הדף. השדה נדרש.',
		'.description' => 'רשומה מסוג "דף" בדרך כלל מייצג דף אינטרנט ב-TYPO3. לכל הדפים יש מספר זהות לפיו ניתן לצור קישורים אליהם. רשומה מסוג "דף" לא מכילה תוכן דף בתוכה. בשביל זה עליך לצור רשומות מסוג "תוכן דף".',
		'.details' => 'תלוי בסוג של דף, זה יכול להוות מקום איחסון כללי לפרטי מאגר מידע ב-TYPO3. במקרה כזה, זה לא בהכרח זמין בתור דף אינטרנט, אלא פנימית, בתור מקום לאחסן פריטים כמו: משתמשים, כתובות וכו\'. טבלת דפים היא "עמוד השדרה" ב-TYPO3. כל רשומות שניתנים לעריכה צריכים "להשתייך" לדף. זה בדיוק כמו קבצים ותיקיות על הדיסק הקשיח. דפים מסודרים בצורת עץ, שהיא לא רק צורה נוחה, אלא גם מראה איך עליך לסדר דפים באתר.
טכנית, לכל הרכיבים במאגר מידע יש שדה "uid" שהוא מספר זיהוי ייחודי. בנוסף יש גם שדה "pid" שמכיל מספר uid של דף, אליו הוא שייך. אם pid הוא 0 - הרשומה נמצאת בשורש. רק מנהלים רשאים לגשת לשורש ועל כל רשומות להשתייך או לשורש או לדף.',
		'doktype.description' => 'בחר סוג הדף. זה מגדיר אם הדף מייצג דף אינטרנט או בשימוש לצרכים אחרים.',
		'doktype.details' => 'סוג "רגיל" מייצג דף אינטרנט. "SysFolder" אינו מייצג דף אינטרנט, אלא תיקייה בה ניתן לאחסן רשומות שתבחר. "סל מיחזור" - הוא פח אשפה.
<b>הערה:</b>לכל סוג בדרך כלל יש סמל מוצמד. יכול להיות שסוגים מסוימים לא נגישים למשתמש. ולבסוף, כל סוג מוגדר כך, שהוא מאפשר רק רשומות מסוימות בדף (SysFolder יאפשר כל רשומה, אם יש לכם בעיה עם זה).',
		'TSconfig.description' => 'תצורת TypoScript של דף.',
		'TSconfig.details' => 'עקרונית, "TypoScript" היא שיטה לסדר ערכים בצורת עץ. זה ידוע בעיקר יחסית ליצירת תבניות לאתרי TYPO3. בכל זאת, באותו עיקרון לסדר ערכים משתמשים גם כדי להגדיר תכונות שונות בממשק האחורי, פעולות במודולים, Rich Text Editor, וכו\' לבסוף, "TSconfig" של דף הינו בעצם אוסף של כל ארכי "TSconfig" מהשורש של עץ דפים ועד לדף נוכחי. לכן, כל תת-דפים מושפעים גם הם. הקוד של "TSconfig" ניתן לראות בתפריט -"TSconfig של דף"במודול "אינטרנט->מידע" (דורש תוספת "info_pagetsconfig" שתהיה מותקנת)',
		'TSconfig.syntax' => 'תחביר TypoScript בסיסי <em>ללא</em> "Conditions" ו-"Constants".
מומלץ שרק למנהלים תהיה גישה לשדה זה.',
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