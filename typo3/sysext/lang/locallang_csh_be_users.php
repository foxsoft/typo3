<?php
/**
 * Default  TCA_DESCR for "be_users"
 * TYPO3 CVS ID: $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'.description' => 'This is the table of backend administration users.',
		'_.seeAlso' => 'be_groups',
		'username.description' => 'Enter the login name of the backend user.',
		'username.details' => 'A username is required and must be in lowercase without spaces in it. Furthermore the username must be unique. If it is not unique a number will be prepended automatically.',
		'_username.seeAlso' => 'be_users:password',
		'password.description' => 'Enter the password for the backend username above (Notice the value you enter <i>will</i> be readable in the field!).',
		'password.details' => 'The password is required. Before the password is sent to the server it\'s md5-hashed, so the password value itself is not transferred over the internet. This is true both when editing the password and when the user logs in. 
While this principle does not reveal the raw password it is <i>not</i> the same as real encryption. If you need the highest degree of security you should install the TYPO3 backend on a secure server.
The password is stored in the database as an md5-hash and thus it\'s not possible to extract the original password from the database either. This means that \'lost passwords\' must be substituted with a new password for the user.',
		'usergroup.description' => 'Assign backend user groups to the user.',
		'usergroup.details' => 'The backend user groups defines the permissions which the backend user will inherit. So unless the backend user is an \'Admin\' user, he needs to be a member of one or more user groups in order to have practically any permissions assigned. The properties set in the user groups are mostly added together.
The first (top) group in the list is the group which will, by default, be the owner of pages the user creates.',
		'_usergroup.seeAlso' => 'be_users:TSconfig,
be_groups',
		'lockToDomain.description' => 'Enter the host name from which the user is forced to login.',
		'lockToDomain.details' => 'A TYPO3 system may have multiple domains pointing to it. Therefore this option secures that users can login only from a certain host name.',
		'_lockToDomain.seeAlso' => 'be_groups:lockToDomain,
fe_users:lockToDomain,
fe_groups:lockToDomain',
		'disableIPlock.description' => 'Disable the lock of the backend users session to the remote IP number.',
		'disableIPlock.details' => 'You will have to disable this lock if backend users are accessing TYPO3 from ISDN or modem connections which may shutdown and reconnect with a new IP. The same would be true for DHCP assignment of IP numbers where new IP numbers are frequently assigned.',
		'db_mountpoints.description' => 'Assign startpoints for the users page tree.',
		'db_mountpoints.details' => 'The page tree used my all Web-submodules to navigate must have some points-of-entry defined. Here you should insert one or more references to a page which will represent a new root page for the page tree. This is called a \'Database mount\'.

<strong>Notice</strong> that backend user groups also has DB mounts which can be inherited by the user. So if you want a group of users to share a page tree, you should probably mount the page tree in the backend user group which they share instead.',
		'_db_mountpoints.seeAlso' => 'be_groups:db_mountpoints,
be_users:file_mountpoints,
be_users:options
',
		'file_mountpoints.description' => 'Assign startpoints for the file folder tree.',
		'file_mountpoints.details' => 'The file folder tree is used by all File-submodules to navigate between the file folders on the webserver. In order to be able to upload <em>any</em> files the user <em>must</em> have a file folder mounted with a folder named \'_temp_\' in it (which is where uploads go by default). 
Notice as with \'DB mounts\' the file folder mounts may be inherited from the member groups of the user. ',
		'_file_mountpoints.seeAlso' => 'be_groups:file_mountpoints,
be_users:db_mountpoints,
be_users:options',
		'email.description' => 'Enter the email address of the user.',
		'email.details' => 'This address is rather important to enter because this is where messages from the system is sent.
<strong>Notice</strong> the user is able to change this value by himself from within the User>Setup module.
',
		'_email.seeAlso' => 'be_users:realName',
		'realName.description' => 'Enter the ordinary name of the user, eg. John Doe.',
		'realName.details' => '<strong>Notice</strong> the user is able to change this value by himself from within the User>Setup module.',
		'_realName.seeAlso' => 'be_users:email',
		'disable.description' => 'This option will temporarily disable the user from logging in.',
		'_disable.seeAlso' => 'be_users:starttime,
be_users:endtime',
		'admin.description' => '\'Admin\' users has TOTAL access to the system!',
		'admin.details' => '\'Admin\' can do anything TYPO3 allows and this kind of user should be used only for administrative purposes. All daily handling should be done with regular users. 
\'Admin\' users don\'t need to be members or any backend user groups. However you should be aware that any page created by an admin user without a group will not have any owner-group assigned and thus it will probably be invisible for other users. If this becomes a problem you can easily solve it by assigning a user group to the \'Admin\' user anyway. This does of course not affect the permissions since they are unlimited, but the first group listed is by default the owner group of newly created pages.
\'Admin\' users are easily recognized as they appear with a red icon instead of the ordinary blue user-icon.

You should probably not assign any other users than yourself as an \'Admin\' user.',
		'options.description' => 'Select if the user should inherit page tree or folder tree mountpoints from member groups.',
		'options.details' => 'It\'s a great advantage to let users inherit mountpoints from membergroups because it makes administration of the same mountpoints for many users extremely easy. 
If you don\'t check these options, you must make sure the mount points for the page tree and file folder tree is set specifically for the user.',
		'_options.seeAlso' => 'be_users:db_mountpoints,
be_users:file_mountpoints',
		'fileoper_perms.description' => 'Select file operation permissions for the user.',
		'fileoper_perms.details' => 'These settings relates to the functions found in the File>List module as well as general upload of files.',
		'_fileoper_perms.seeAlso' => 'be_users:file_mountpoints',
		'starttime.description' => 'Enter the date from which the account is active.',
		'_starttime.seeAlso' => 'be_users:disable,
be_users:endtime,
pages:starttime',
		'endtime.description' => 'Enter the date from which the account is disabled.',
		'_endtime.seeAlso' => 'be_users:disable,
be_users:starttime,
pages:starttime',
		'lang.description' => 'Select the <i>default</i> language.',
		'lang.details' => 'This determines the language of the backend interface for the user. All mainstream parts available for regular users are available in the system language selected. 
\'Admin\'-users however will experience that the \'Admin\'-only parts of TYPO3 is in english. This includes all submodules in "Tools" and the Web>Template module.

<b>Notice</b> this is only the default language. As soon as the user has logged in the language must be changed through the User>Setup module.',
		'userMods.description' => 'Select available backend modules for the user.',
		'userMods.details' => 'This determines which \'menu items\' are available for the user.

Notice that the same list of modules may be configured for the backend user groups and that these will be inherited by the user in addition to the modules you select here. It\'s highly likely that you should not set any modules for the user himself but rather select the modules in the backend groups he\'s a member of. However this list provides a great way to add a single module for specific users.',
		'_userMods.seeAlso' => 'be_groups:groupMods',
		'TSconfig.description' => 'Enter additional TSconfig for the user (advanced).',
		'TSconfig.details' => 'This field allows you to extend the configuration of the user in severe details. A brief summary of the options include a more detailed configuration of the backend modules, setting of user specific default table field values, setting of Rich Text Editor options etc. The list will be growing by time and is fully documented in the adminstration documentation, in particular \'admin_guide.pdf\' (see link below).',
		'_TSconfig.seeAlso' => 'pages:TSconfig,
fe_users:TSconfig,
be_groups:TSconfig
admin_guide.pdf|http://www.typo3.com/doclink.php?key=admin_guide.pdf
',
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
		'.description' => 'Dit is de tabel van het beheer van backendgebruikers',
		'username.description' => 'Vul hier de gebruikersnaam van de beheer gebruiker in.',
		'username.details' => 'Een gebruikersnaam is verplicht en moet in kleine letters zonder spaties worden ingevuld. Verder moet de gebruikersnaam uniek zijn. Als het niet uniek is zal er gelijk een nummer aan toegevoegt worden.',
		'password.description' => 'Geef hier het wachtwoord voor bovenstaande gebruiker in. (De waarde die wordt ingegeven is leesbaar)',
		'password.details' => 'Een wachtwoord is verplicht. Voordat een wachtwoord wordt verstuurd, wordt het md5-hashed, zodat het daadwerkelijke wachtwoord niet over het internet wordt verstuurd. Dit geldt voor het bewerken/invoeren van het wachtwoord, als ook voor het inloggen. Alhoewel niet het daadwerkelijke wachtwoord wordt verstuurd over het internet, is het niet hetzelfde als encryptie. Wil men de hoogste veiligheid dan moet men typo3 installeren op een beveiligde server. 
Het opgeslagen wachtwoord in de database is ook md5-hashed. Dit betekent dat vergeten wachtwoorden moeten worden vervangen door een nieuw wachtwoord voor de gebruiker.',
		'usergroup.description' => 'Voeg een gebruiker toe aan een gebruikersgroep.',
		'usergroup.details' => 'De gebruikersgroep definieert welke eigenschappen de gebruiker overneemt van deze groep. Tenzij men admin gebruiker is, moet men altijd lid zijn van een of meer groepen. De eigenschappen van de groepen worden bij elkaar opgeteld. 
De bovenste groep zal standaard de eigenaar worden van nieuw gecreerde pagina\'s.',
		'lockToDomain.description' => 'Vul de hostnaam waarvandaan de gebruiker dient in te loggen.',
		'lockToDomain.details' => 'Een TYPO3 systeem kan meerdere domeinen hebben die er naar verwijzen. Deze optie zorgt ervoor dat gebruikers alleen in kunnen loggen vanaf een bepaalde hostnaam.',
		'db_mountpoints.description' => 'Bepaald het beginpunt van de gebruikers mappenweergave.',
		'db_mountpoints.details' => 'Alle web-modules maken gebruik van de mappenweergave om te navigeren. Hier geeft men het beginpunt aan, welke wordt weergegeven als nieuw beginpunt van de site. De gebruiker kan vanaf dit punt de pagina\'s aanpassen. Dit wordt een "database mount" genoemd.

<strong>Let op!</strong> Ook backendgebruikersgroepen hebben een DB mount welke kan worden overgenomen door de leden van de groep. Dus als een groep gebruikers hetzelfde gedeelte van de site mogen beheren is het waarschijnlijk beter om de DB mount aan de backendgebruikersgroep toe te kennen.',
		'file_mountpoints.description' => 'Geeft het beginpunt voor de mappenweergave van de bestanden.',
		'file_mountpoints.details' => 'De mappenweergave voor bestanden wordt gebruikt door alle bestandsubmodules om te navigeren tussen de diverse mappen op de webserver. Om bestanden te kunnen uploaden dient er map aanwezig te zijn genaamd \'_temp_\' (hier komen uploads standaard in terecht).
Net zoals bij \'DB mounts\' kunnen de mapkoppelingen (mounts) ook ge�rfd worden van de groepen waar de gebruiker lid van is.',
		'email.description' => 'Vul het emailadres van de gebruiker in.',
		'email.details' => 'Het invoeren van dit adres is vrij belangrijk, daar berichten van het systeem naar dit adres worden gestuurd.
<strong>Let op!</strong> De gebruiker kan het emailadres zelf aanpassen in de setup module.',
		'realName.description' => 'Geef hier de echte naam in van de gebruiker.',
		'realName.details' => '<strong>Let op!</strong> De gebruiker kan dit zelf aanpassen in de setup module.',
		'disable.description' => 'Deze optie zorgt ervoor dat de gebruiker tijdelijk niet kan inloggen.',
		'admin.description' => 'Admin gebruikers hebben toegang tot het gehele systeem.',
		'admin.details' => 'Admin gebruikers hebben alle rechten. Admin gebruiker behoeven geen lid van een beheergroep te zijn, maar men dient wel op te passen dat een pagina die wordt gemaakt door een admin zonder beheergroep soms niet zichtbaar is voor andere gebruikers. Dit is simpel op te lossen door de admin lid te maken van een beheergroep. Admin zijn gemakkelijk te herkennen aan het rode icoontje inplaats van de blauwe.
Het is aan te raden om de admin rechten slechts toe te kennen aan de beheerder van het systeem.',
		'options.description' => 'Hier wordt bepaald of de gebruiker wel of niet de pagina en bestanden mappenweergave overneemt van de gebruikersgroep.',
		'options.details' => 'Het is een groot voordeel om gebruikers de eigenschappen van de groepen te laten overerven. 
Doet men dit niet dan moet men voor iedere gebruiker afzonderlijk een startpunt voor de mappenweergave ingeven.',
		'fileoper_perms.description' => 'Selecteer permissies voor het bewerken van bestanden voor deze gebruiker',
		'fileoper_perms.details' => 'Deze instellingen refereren aan functies die men vindt in de bestandenlijst module. Zij gelden ook in het algemeen voor het uploaden van bestanden.',
		'starttime.description' => 'Geef hier de datum in vanaf wanneer het account voor deze gebruiker ingaat.',
		'endtime.description' => 'Vanaf de ingegeven datum wordt het account van deze gebruiker geactiveerd.',
		'lang.description' => 'Kies de <em>standaard</em> taal.',
		'lang.details' => 'Dit bepaalt de taal van de backendinterface voor de gebruiker.
Admin gebruikers zullen ervaren dat in bepaalde admin gedeeltes van de site alleen de engelse taal beschikbaar is. Dit is o.a in de submodule "Tools" en de module Web>Template.

<strong>Let op!</strong> Deze instelling is de standaard taal. Wanneer de gebruiker is ingelogd kan deze de instelling veranderen in de setupmodule.',
		'userMods.description' => 'Selecteer de beschikbare backendmodules voor de gebruiker.',
		'userMods.details' => 'Dit bepaalt welke \'menu-items\' er beschikbaar zijn voor de gebruiker.

Bedenk dat de modules die men hier selecteert bij de modules die de gebruiker reeds overerft van de gebruikersgroep komen. Het is daarom ook aan te raden hier geen modules te selecteren, maar het is wel een ideale manier om bepaalde gebruikers van een groep meer rechten te geven dan alleen voor de gebruikersgroep gelden.',
		'TSconfig.description' => 'Voeg hier TSConfig aan voor de gebruiker (geavanceerd).',
		'TSconfig.details' => 'Hier kan men de mogelijkheden voor de gebruiker verder uitdiepen. Alle mogelijkheden worden beschreven in admin_guide.pdf (zie link hieronder).',
	),
	'cz' => Array (
	),
	'pl' => Array (
	),
	'si' => Array (
	),
	'fi' => Array (
		'.description' => 'T�m� on taustatoimintojen hallinnan k�ytt�j� taulu.',
		'username.description' => 'Anna taustak�ytt�j�n (login) k�ytt�j�tunnus.',
		'username.details' => 'K�ytt�j�tunnus on pakollinen, pienin kirjaimin ja ilman v�lily�ntej�. K�ytt�j�tunnuksen on oltava lis�ksi yksil�llinen. Jos tunnus ei ole yksil�llinen lis�t��n siihen automaattisesti numero.',
		'password.description' => 'Anna yll�olevalle taustak�ytt�j�lle salasana. (Huomaa, arvo jonka annat <i>n�kyy</i> luettavana kent�ss�!).',
		'password.details' => 'Salasana on pakollinen. Ennenkuin salasana l�hetet��n palvelimelle se salataan md5 toiminnolla, joten itse salasanaa ei siirret� internetin v�lityksell�. N�in tapahtuu sek� muotoiltaessa salasanaa ett� k�ytt�j�n sis��nkirjoittautuessa.
T�m� periaate ei kuitenkaan salaa raakaa salasanaajoka <i>ei</i> olesama kuin todellinen salaus. Jos tarvitset parempaa suojausta tulee Sinun asentaaTYPO3 tausta toiminnat suojattuun palvelimeen.
Salasana tallennetaan tietokantaa md5 toiminnolla suojattuna ja siten ei ole mahdollista purkaa alkuper�ist� salasanaa tietokannastakaan. T�m� tarkoittaa ett� \'hukatut salasanat\' on korvattava kokonaan uusilla k�ytt�j�lle.',
		'usergroup.description' => 'M��rittele taustak�ytt�j�ryhm�t k�ytt�j�lle.',
		'usergroup.details' => 'Taustak�ytt�j�ryhm� m��rittelee mitk� oikeudet taustak�ytt�j� perii. Siten, jos k�ytt�j� ei ole \'Admin\'., tarvitsee h�nelle m��ritell� yksi tai useampia jotta tarvittavat oikeudet voidaan m��ritell�. K�ytt�j�ryhmien oikeudet on useimmiten ryhmiteltyj�.
Ensimm�inen (ylin) ryhm� listalla on, oletusarvoisesti, niiden sivujen omistaja jotka k�ytt�j� luo.',
		'lockToDomain.description' => 'Anna domainin nimi johon k�ytt�j� on pakotettu sis��nkirjoittautumaan (login).',
		'lockToDomain.details' => 'TYPO3 j�rjestelm�ss� voi olla monta domainia. Siksi t�m� vaihtoehto varmistaa k�ytt�j�n p��sev�n vain h�nelle sallittuihin.',
		'disableIPlock.description' => 'Poista taustak�ytt�jilt� session lukitus  ulkoiseen IP numeroon.',
		'disableIPlock.details' => 'Sinun on poistettava t�m� lukitus jos taustak�ytt�j�t TYPO3 k�ytt�ess��n ovat ISDN tai modeemiyhteydess�, jotka yleens� saavat aina uuden IP numeron muodostaessaan uuden linjayhteyden. Sama koskee my�s DHCP:n antamia IP-osoitteita, jotka uusiutuvat aika ajoin.',
		'db_mountpoints.description' => 'M��rittele puurakenteen aloituskohta k�ytt�j�lle.',
		'db_mountpoints.details' => 'Sivujen puurakenteeseen, jota WEB-aliohjelmat k�ytt�v�t, tulee m��ritell� joitakin liitynt� pisteit�. T�ss� lis��t yhden tai useamman referenssin sivulle jotka edustavat sivuston rakenteen uutta juurta (alkupistett�).
T�t� kutsutaan \'Tietokannan asetukseksi" ("Database mount").
<strong>Huomaa</strong> taustak�ytt�j�ryhm�ll� voi olla Tietokantaasetuksia jotka k�ytt�j� perii. Joten jos haluat ryhm�ll� k�ytt�ji� jakavan sivurakenteen, kannattaa Sinun asettaa sivurakenne taustak�ytt�j�ryhm�lle joka on yhteinen k�ytt�jille.',
		'file_mountpoints.description' => 'M��rittele aloituskohdat tiedostohakemistolle rakenteelle.',
		'file_mountpoints.details' => 'Tiedostohakemisto rakennetta k�ytt�v�t kaikki Tiedosto-aliohjelmat (File-modules) siirtyess��n hakemistoissa palvelimella. Jotta k�ytt�j�lle olisi mahdollista ladata (upload) tiedostoja <em>tulee</em> asetettuna ollahakemisto jossa \'_temp_\' hakemisto (t�nne ladataan (upload) tiedostot oletusarvoisesti).
Huomaa ett� Tietokanta asetukset voivat periyty� k�ytt�j�lle silt� k�ytt�j�ryhm�lt� jonka j�sen h�n on.',
		'email.description' => 'Anna k�ytt�j�n s�hk�postiosoite.',
		'email.details' => 'T�m� osoite on t�rke� koska siihen l�hetet��n j�rjestelm�n viestit.
<strong>Huomaa</strong> k�ytt�j� voi muuttaa t�t�t tietoa itse K�ytt�j�>Asetukset (User>Setup) aliohjelmasta.',
		'realName.description' => 'Anna k�ytt�j�n oikea nimi, esim.Matti Meik�l�inen.',
		'realName.details' => '<strong>Huomaa</strong> k�ytt�j� voi itse muuttaa t�t� arvoa K�ytt�j�>Asetukset (User>Setup) aliohjelmasta.',
		'disable.description' => 'T�m� vaihtoehto poistaa k�ytt�j�n sis��nkirjoittautumis oikeuden v�liaikaisesti.',
		'admin.description' => '\'Admin\' k�ytt�jill� on T�YDELLISET oikeudet j�rjestelm��n!',
		'admin.details' => '\'Admin\' voi tehd� mit� tahansa TYPO3 salliikin ja siksi t�m�nkaltaista k�ytt�j�� tulisikin hy�dynt�� vain hallinnollisiin teht�viin. Kaikki p�iivtt�inen ty�skentely tulisi tehd� normaalein k�ytt�j�tunnuksin.
\'Adminin\' ei tarvitse olla mink�� k�ytt�j�ryhm�n tai taustak�ytt�j�ryhm�n j�sen. Huomaa kuitenkin erityisesti seuraavaa, sivut jotka \'admin\'-k�ytt�j� luo eiv�t kuulu minhink��n ryhm��n ja voivat olla siksi toisten k�ytt�jien n�kym�tt�miss�. Jos t�m� tulee ongelmaksi voi luoda \'Admin\'k�ytt�j�lle ryhm�n joka tapauksessa. T�ll� ei ole vaikutusta \'Admin-k\'ytt�j�n oikeuksiin vaan uusien sivujen omistajaksi tulee listan ensimm�inen ryhm�.
\'Admin\' k�ytt�j�t tunnistaa helposti punaisesta ikonista tavallisten k�ytt�jien ikonin ollessa sininen.

Sinun tulee luultavasti m��ritell� vain itsesi \'Admin\'-k�ytt�j�ksi.',
		'options.description' => 'Valitse periik� k�ytt�j� sivujen puurakenteen tai hakemistopuun k�ytt�j�ryhm�lt�.',
		'options.details' => 'On suuri etu antaa k�ytt�jien peri asetuskohdat k�ytt�j�ryhmilt� koska se tekee samojen asetuskohtien hallinnan usealle k�ytt�j�lle helpoksi.
Jos et k�yt� n�it� vaihtoehtoja, Sinun tulee varmistaa ett� sivurakenteen ja tiedostovalikoiden astukset ovat asetettu juuri t�lle k�ytt�j�lle.',
		'fileoper_perms.description' => 'Valitse mitk� tiedostotoiminnot ovat sallittuja k�ytt�j�lle.',
		'fileoper_perms.details' => 'N�m� asetukset liittyv�t Tiedosto>Lista (File>List) aliohjelmaan se yleiseen tiedostojen vientiin (upload).',
		'starttime.description' => 'Valitse p�iv�ys mist� alkaen k�ytt�j�n tili on voimassa.',
		'endtime.description' => 'Valitse p�iv�ys jolloin k�ytt�j�n tili poistetaan (voimassaolo).',
		'lang.description' => 'Valitse oletuskieli.',
		'lang.details' => 'T�m� m��rittelee kielen taustak�ytt�j�lle. Kaikki keskeiset osat ovat k�ytett�viss� j�rjestelm�n kielell� tavallisille k�ytt�jille.
\'Admin\'-k�ytt�j�t kokevat kuitenkin ett� vain heille tarkoitetut osat ovat englanniksi. T�m� tarkoittaa kaikkia aliohjelmia Ty�kalut (Tools) ja Web>Mallinteet (Web>Templates) aliohjelmia.

<b>Huomaa</b> t�m� on vain oletuskieli. Kun k�ytt�j� on sis��nkirjoittautunut voi kielen vaihtaa K�ytt�j�>Asetukset aliohjelmassa.',
		'userMods.description' => 'Valitse mitk� taustatoimintojen aliohjelmat ovat sallittuja k�ytt�j�lle.',
		'userMods.details' => 'T�m� m��rittelee mitk�\'Valikon toiminnat\' ovat k�ytt�j�n k�ytett�viss�.

Huomaa ett� sama aliohjelmien lista voidaan konfiguroida k�ytt�j�ryhm�lle aj se periytyy k�ytt�j�lle tass� valitsemiesi aliohjelmien lis�ksi. On ep�todenn�k�ist� ett� Sinun tarvitsee t�ss� valita mit��n aliohjelmia k�ytt�j�lle vaan voit tehd� sen k�ytt�j�ryhm�n avulla joissa h�n on j�sen.
T�m� kuitenkin mahdollistaa oivan tavan lis�t� yhden erillisen aliohjelman k�ytt�j�lle.',
		'TSconfig.description' => 'Valitse TSconfig lis�ykset k�ytt�j�lle (laajennetut).',
		'TSconfig.details' => 'T�m� tieto antaa Sinulle mahdollisuuden antaa k�ytt�j�lle erityisi� asetuksia. Esimerkiksi vaihtoehdot voivat sis�lt�� yksityiskohtaisen konfiguraation tausta alimoduleista, erityisten k�ytt�j�kohtaisten taulujen oletusarvoista, tai RTE asetuksista jne. T�m� lista kasvaa ajan my�t� ja on dokumentoitu Administraatio ohjestuksessa, erityisesti \'admin_guide.pdf\' (katso linkki alla).',
	),
	'tr' => Array (
	),
	'se' => Array (
		'.description' => 'Detta �r tabellen med backend administrat�rsanv�ndare.',
		'username.description' => 'Fyll i backend-anv�ndarens inloggningsnamn',
		'username.details' => 'A username is required and must be in lowercase without spaces in it. Furthermore the username must be unique. If it is not unique a number will be prepended automatically.',
		'password.description' => 'Fyll i backend-anv�ndarens l�senord (M�rk, att det du fyller i kommer att synas)',
		'password.details' => 'The password is required. Before the password is sent to the server it\'s md5-hashed, so the password value itself is not transferred over the internet. This is true both when editing the password and when the user logs in. 
While this principle does not reveal the raw password it is <i>not</i> the same as real encryption. If you need the highest degree of security you should install the TYPO3 backend on a secure server.
The password is stored in the database as an md5-hash and thus it\'s not possible to extract the original password from the database either. This means that \'lost passwords\' must be substituted with a new password for the user.',
		'usergroup.description' => 'V�lj vilka backend-anv�ndargrupper som anv�ndaren h�r till.',
		'usergroup.details' => 'The backend user groups defines the permissions which the backend user will inherit. So unless the backend user is an \'Admin\' user, he needs to be a member of one or more user groups in order to have practically any permissions assigned. The properties set in the user groups are mostly added together.
The first (top) group in the list is the group which will, by default, be the owner of pages the user creates.',
		'lockToDomain.description' => 'Fyll i fr�n vilken v�rddator anv�ndaren m�ste logga in',
		'lockToDomain.details' => 'A TYPO3 system may have multiple domains pointing to it. Therefore this option secures that users can login only from a certain host name.',
		'disableIPlock.description' => 'St�nger m�jligheten att l�sa backend-anv�ndarens session till en speciell IP-nummer.',
		'disableIPlock.details' => 'You will have to disable this lock if backend users are accessing TYPO3 from ISDN or modem connections which may shutdown and reconnect with a new IP. The same would be true for DHCP assignment of IP numbers where new IP numbers are frequently assigned.',
		'db_mountpoints.description' => 'Ange startpunkter f�r anv�ndarens sidtr�d.',
		'db_mountpoints.details' => 'The page tree used my all Web-submodules to navigate must have some points-of-entry defined. Here you should insert one or more references to a page which will represent a new root page for the page tree. This is called a \'Database mount\'.

<strong>Notice</strong> that backend user groups also has DB mounts which can be inherited by the user. So if you want a group of users to share a page tree, you should probably mount the page tree in the backend user group which they share instead.',
		'file_mountpoints.description' => 'Ange startpunkter f�r filernas katalogtr�d.',
		'file_mountpoints.details' => 'The file folder tree is used by all File-submodules to navigate between the file folders on the webserver. In order to be able to upload <em>any</em> files the user <em>must</em> have a file folder mounted with a folder named \'_temp_\' in it (which is where uploads go by default). 
Notice as with \'DB mounts\' the file folder mounts may be inherited from the member groups of the user.',
		'email.description' => 'Fyll i anv�ndarens epostadress.',
		'email.details' => 'This address is rather important to enter because this is where messages from the system is sent.
<strong>Notice</strong> the user is able to change this value by himself from within the User>Setup module.',
		'realName.description' => 'Fyll i anv�ndarens riktiga namn, t.ex. Pelle Svensson.',
		'realName.details' => '<strong>M�rk</strong> att anv�ndaren sj�lv kan �ndra detta v�rde via modulen Anv�ndare>Inst�llningar',
		'disable.description' => 'Denna option st�nger tillf�lligt anv�ndarens r�ttigheter att logga in.',
		'admin.description' => '\'Admin\'-anv�ndare har TOTAL �tkomst till systemet!',
		'admin.details' => '\'Admin\' can do anything TYPO3 allows and this kind of user should be used only for administrative purposes. All daily handling should be done with regular users. 
\'Admin\' users don\'t need to be members or any backend user groups. However you should be aware that any page created by an admin user without a group will not have any owner-group assigned and thus it will probably be invisible for other users. If this becomes a problem you can easily solve it by assigning a user group to the \'Admin\' user anyway. This does of course not affect the permissions since they are unlimited, but the first group listed is by default the owner group of newly created pages.
\'Admin\' users are easily recognized as they appear with a red icon instead of the ordinary blue user-icon.

You should probably not assign any other users than yourself as an \'Admin\' user.',
		'options.description' => 'V�lj om anv�ndaren skall erh�lla sidtr�ds- eller katalogtr�dsmonteringspunkter fr�n medlemsgrupper.',
		'options.details' => 'It\'s a great advantage to let users inherit mountpoints from membergroups because it makes administration of the same mountpoints for many users extremely easy. 
If you don\'t check these options, you must make sure the mount points for the page tree and file folder tree is set specifically for the user.',
		'fileoper_perms.description' => 'V�lj fil�ndringsr�ttigheter f�r anv�ndaren.',
		'fileoper_perms.details' => 'These settings relates to the functions found in the File>List module as well as general upload of files.',
		'starttime.description' => 'Fyll i fr�n vilket datum kontot skall vara i bruk',
		'endtime.description' => 'Fyll i n�r kontot skall st�ngas',
		'lang.description' => 'V�lj <i>standard</i> spr�k.',
		'lang.details' => 'This determines the language of the backend interface for the user. All mainstream parts available for regular users are available in the system language selected. 
\'Admin\'-users however will experience that the \'Admin\'-only parts of TYPO3 is in english. This includes all submodules in "Tools" and the Web>Template module.

<b>Notice</b> this is only the default language. As soon as the user has logged in the language must be changed through the User>Setup module.',
		'userMods.description' => 'V�lj vilka backend-moduler anv�ndaren skall f�.',
		'userMods.details' => 'This determines which \'menu items\' are available for the user.

Notice that the same list of modules may be configured for the backend user groups and that these will be inherited by the user in addition to the modules you select here. It\'s highly likely that you should not set any modules for the user himself but rather select the modules in the backend groups he\'s a member of. However this list provides a great way to add a single module for specific users.',
		'TSconfig.description' => 'Fyll i ytterligare TSconfig f�r anv�ndaren (avancerat).',
		'TSconfig.details' => 'This field allows you to extend the configuration of the user in severe details. A brief summary of the options include a more detailed configuration of the backend modules, setting of user specific default table field values, setting of Rich Text Editor options etc. The list will be growing by time and is fully documented in the adminstration documentation, in particular \'admin_guide.pdf\' (see link below).',
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
		'.description' => 'Ovo ja tablica backend korisnika.',
		'username.description' => 'Unesite korisni�ko ime backend korisnika.',
		'username.details' => 'Korisni�ko ime je obavezno i mora biti uneseno malim slovima bez razmaka. Korisni�ko ime mora biti jedinstveno. Ako nije uneseno jedinstveno korisni�ko ime sustav �e mu automatski pridodati broj.',
		'password.description' => 'Unesite zaporku za prethodno upisano korisni�ko ime (Zaporka koju unesete <i> biti �e vidljiva</i> u polju za unos.',
		'password.details' => 'Zaporka je obavezna. Poslu�itelju se ne �alje vrijednost same zaporke, 
ve� kod dobiven pomo�u MD5-hash algoritma. Ovaj se postupak po�tuje 
i kod administracije zaporke, kao i kod autentifikacije korisnika prilikom 
pristupanja poslu�itelju.
Iako ovaj princip ne otkriva pravu vrijednost zaporke, on <i>nije</i> 
isto �to i stvarna enkripcija. Ako trebate najvi�i stupanj sigurnosti,
potrebno je instalirati Typo3 backend na sigurni popslu�itelj.
Zaporka je pohranjena u bazu podataka u MD5-hash obliku, pa je nemogu�e
iz te baze podataka otkriti izvornu zaporku.Zato u slu�aju \'izgubljenje zaporke\' 
ona se mora zamijeniti novom korisni�kom zaporkom.',
		'usergroup.description' => 'Dodijeli backend korisni�ke grupe korisniku.',
		'usergroup.details' => 'Backend korisni�ke grupe odre�uju ovlasti koje �e backend korisnik 
naslijediti. Zato, osim u slu�aju da korisnik ima \'admin\' ovlasti, 
korisnik mora biti �lan jedne ili vi�e korisni�kih grupa kako bi dobio
potrebne ovlasti. Parametri ovlasti postavljeni u pojedinim korisni�kim 
grupama se uglavnom zbrajaju.
Prva (najvi�a) grupa u listi je grupa koja �e u pravilu bit vlasnik stranica 
koje korisnik napravi.',
		'lockToDomain.description' => 'Unesi ime ra�unala s kojeg je korisnik prisiljen prijaviti se za rad.',
		'lockToDomain.details' => 'TYPO3 sustav mo�e imati vi�etruke domene koje upu�uju na njega. Stoga ova opcija osigurava da se korisnici mogu prijaviti samo s odre�enog ra�unala.',
		'disableIPlock.description' => 'Onemogu�i zaklju�avanje odre�enog sessiona za udeljenu IP adresu.',
		'disableIPlock.details' => 'Morati �ete isklju�iti ovo zaklju�avanje ako korisnici pristupaju backendu pomo�u ISDN ili modemskih veza koje se mogu odspojiti i spojiti sa novom IP adresom.',
		'db_mountpoints.description' => 'Dodijeli po�etne to�ke zkorisni�kom stablu stranice.',
		'db_mountpoints.details' => 'Stablo stranica koje koriste svi Web-podmoduli za navigaciju 
mora imati odre�ene po�etne to�ke ulaska u stablo. Ovdje bi trebali
upisati jednu ili vi�e referenci na stranicu koja �e predstavljati novu
korijen stranicu u stablu stranica. 
To se naziva \'Poveznica baze podataka\' (DB poveznica).

<strong>Primjetite da</strong> Backend korisni�ke grupe tako�er
sadr�e DB poveznice koje korisnik mo�e naslijediti. U slu�aju da �elite vi�e 
korisnika koji dijele jedno stablo stranice, trebate napraviti poveznicu stabla 
stranice u backend korisni�koj grupi koju �e korisnici naslijediti.',
		'file_mountpoints.description' => 'Dodijeli po�etne to�ke stablu datoteka',
		'file_mountpoints.details' => 'Stablo datoteka koriste svi podmoduli za navigaciju me�u direktorijima na web poslu�itelju. Kako bi bili u mogu�nosti izvr�iti upload <em>bilo koje</em> datoteke korisnik  <em>mora</em> imati direktorij postavljen sa poddirektorijem nazvanim \'_temp_\' unutar njega (kamo idu uploadi).
Primjetite da kao i sa \'DB mounts\' direktoriji za datoteke isto mogu biti naslije�eni od korisni�ke grupe kojoj pripada korisnik.',
		'email.description' => 'Upi�ite email adresu korisnika.',
		'email.details' => 'Ovu je adresu vrlo va�no unijeti jer se na nju �alju sistemske poruke.
<strong>Primjdba</strong> Korisnik mo�e sam mijenjati adresu
u Korisnik>Postavke modulu.',
		'realName.description' => 'Unesi pravo ime korisnika, npr. Ivo Ivi�',
		'realName.details' => '<strong>Napomena</strong> Korisnik mo�e sam mijenjati adresu u Korisnik>Postavke modulu.',
		'disable.description' => 'Ova mogu�nost privremeno onemogu�ava korisniku pristup.',
		'admin.description' => '\'Admin\' korisnici imaju POTPUN pristup sustavu!',
		'admin.details' => '\'Admin\' mo�e raditi sve �to TYPO3 omogu�uje i ovaj bi se tip korisnika trebao koristiti samo u administracijske svrhe. Sve drugo bi trebalo raditi s obi�nim korisnicima. 
\'Admin\' korisnici ne moraju biti �lanovi ni jedne korisni�ke grupe. Svejedno, treba imati na umu da �e svaka stranica koju napravi admin korisnik koji nije �lan neke grupe biti napravljena bez zadanog vlasnika ili grupe, pa ne�e biti vidljiva ostalim korisnicima. Ako to postane problem, lako je rje�iv time da se admin korisniku dodijeli neka postoje�a grupa. Time se naravno ne utje�e na ovlasti jer su one ionako za admin korisnika neograni�ene.
\'Admin\' korisnike je lako razaznati jer je njihova ikona u crvene umjesto plave boje obi�nog korisnika.

Vjerovatno ne bi trebali odrediti nikoga osim sebe kao \'Admin\' korisnika.',
		'options.description' => 'Odaberite treba li korisnik naslijediti stablo stranica ili stablo direktorija od korisni�kih grupa kojima pripada.',
		'options.details' => 'Velika je prednost ukoliko se dopusti da korisnici naslijede postavljene direktorije od korisni�kih grupa kojima pripadaju jer je na taj na�in administracija ve�eg broja korisnika vrlo laka. 
Ako ne odaberete ove opcije, morate osigurati da je stablo stranica i stablo direktorija postavljeno za svakog korisnika zasebno.',
		'fileoper_perms.description' => 'Odaberite dozvole za rad s datotekama za korisnika.',
		'fileoper_perms.details' => 'Ove postavke vrijede za funkcije u Datoteka>Popis modulu kao i za op�eniti upload datoteka.',
		'starttime.description' => 'Unesite datum od kojeg �e korisni�ki ra�un biti aktivan.',
		'endtime.description' => 'Unesite datum od kojeg �e korisni�ki ra�un biti onemogu�en.',
		'lang.description' => 'Odaberite <i>zadani</i> jezik.',
		'lang.details' => 'Ovom postavkom se odre�uje jezik backend su�elja korisnika. Svi glavni dijelovi sustava dostupni su u odabranom jeziku.
\'Admin\' korisnici primjetiti �e da su dijelovi TYPO3 namijenjeni samo \'Admin\'-ima na engleskom. To uklju�uje sve podmodule u "Tools" i sve Web>Template module.

<b>Napomena</b> Ova postavka vrijedi samo za zadani jezik. �im se korisnik prijavi na sustav ova postavka se mora promieniti kroz User>Setup modul.',
		'userMods.description' => 'Odaberite backend module koji �e biti dostupni korisniku',
		'userMods.details' => 'Ovom postavkom se odre�uje sadr�aj menija koji �e biti dostupan korisniku.

Primjetite da ista lista modula mo�e biti konfigurirana za backend korisni�ke grupe te �e u tom slu�aju ona biti naslije�ena i dopunjena s modulima koji su ovdje selektirani. Po�eljno je postavljati dostupne module putem backend korisni�kih grupa umjesto dodavanja modula putem ove opcije. Naravno ova opcija vam omogu�ava da dodate pojedini modul specifi�nom korisniku.',
		'TSconfig.description' => 'Unesite dodatne TSconfig instrukcije za korisnika (napredno).',
		'TSconfig.details' => 'Putem ovog polja mogu�e je pro�iriti konfiguraciju koirsnika u nekoliko detalja. Ukratko ovdje mo�ete detaljnije konfigurirati backend module, postaviti za posebno za kosirnika predefinirana vrijednos tpojedninih polja, definirati postavke WYSWYG editora (RTE editor), itd. Popis opcije koje mo�ete pode�avati putem ovog polja raste s vremenom i u potpunosti je dokumentiran u administratorskoj dkoumentaciji, posebno u \'admin_guide.pdf\' (pogledaj link ispod).',
	),
	'hu' => Array (
		'.description' => 'Ez a Backend adminisztr�tor felhaszn�l�k t�bl�ja.',
		'username.description' => 'Add meg a backend felhaszn�l� bejelentkez� nev�t.',
		'username.details' => 'A felhaszn�l� n�v sz�ks�ges �s csak kisbet�kb�l �llhat sz�k�z n�lk�l. Tov�bb� a felhaszn�l�i n�vnek egyedinek kell lennie. Ha nem egyedi, akkor el� automatikusan egy sz�m ker�l.',
		'password.description' => 'Add meg a fenti backend felhaszn�l� r�sz�re a jelsz�t. Figyelj, mert a be�rt adat <i>olvashat� lesz</i> a mez�ben.',
		'password.details' => 'A jelsz� k�telez�. Miel�tt a szerverre tov�bb�t�sra ker�l md5
szerint k�dol�dik, �gy maga a jelsz� nem tov�bb�t�dik az
interneten. ez igaz mind a jelsz� szerkeszt�s�re mind a
felhaszn�l� bejelentkez�s�re is.
Mivel  ez a dolog nem l�that� k�v�lr�l, a feldolgozott jelsz�
<i>nem</i> azonos a val�di titkos�t�ssal. Ha magasabb
fok� biztons�g sz�ks�ges, a TYPO3 backend rendszert egy
biztons�gos szerverre kell telep�teni.
A jelsz� md5 k�dol�ssal ker�l t�rol�sra az adatb�zisban, �gy
a jelsz�t nem lehet visszafejteni az adatb�zisb�l sem. Ezt azt
jelenti, hogy az elfelejtett jelsz�t �jjal kell helyettes�teni',
		'usergroup.description' => 'Backend felhaszn�l�csoportot rendel a felhaszn�l�hoz.',
		'usergroup.details' => 'A backend felhaszn�l�csoport jogosults�gokat ad meg,
amelyeket a backend felhaszn�l� �r�k�l. �gy a felhaszn�l�
hacsak nem \'Adminisztr�tor \' felhaszn�l�, egy vagy t�bb
csoporttags�ggal kell rendelkeznie, hogy gyakorlatilag
jogosults�ggal rendelkezzen  A felhaszn�l� csoport
tulajdons�gai �ltal�ban �sszead�dnak.
Ez els� (legfels�) csoport a list�ban az a csoport, amelyik a
felhaszn�l� �ltal l�trehozott oldal tulajdonosa lesz.',
		'lockToDomain.description' => 'Add meg annak a hosztg�pnek a nev�t, ahonnan a felhaszn�l�nak be kell jelentkeznie.',
		'lockToDomain.details' => 'A TYPO3 rendszerre t�bb domain mutathat. �gy az opci� biztos�tja, hogy a felhaszn�l� csak bizonyos hosztg�pr�l jelentkezhet be.',
		'disableIPlock.description' => 'T�voli backend felhaszn�l�k IP c�m z�rol�s�nak megsz�ntet�se.',
		'disableIPlock.details' => 'Akkor kapcsold ki, ha vannak backend felhaszn�l�k, akik ISDN vagy modem haszn�lat�val kapcsol�dnak a TYPO3-hoz, �s az IP c�m�k v�ltozhat �jrakapcsol�d�skor. Ugyanez �rv�nyes, ha DHCP szerver rendeli a felhaszn�l�khoz az IP c�meket.',
		'db_mountpoints.description' => 'A felhaszn�l� oldalrendszer�hez kiindul�pontot rendel.',
		'db_mountpoints.details' => 'Az �sszes, navig�l�sra haszn�lt web-almodul
oldalrendszer�nek rendelkeznie kell megadott bel�p�si
ponttal. Itt egy vagy t�bb hivatkoz�st kell besz�rni egy
oldalhoz, amely az oldalcsoporthoz �j  kiindul� oldalt ad
 meg. Ezt h�vj�k adatb�zis csatol�snak.
<strong>Figyelem:</strong> a backend felhaszn�l�
csoportoknak szint�n vannak adatb�ziscsatol�saik, amelyek a 
felhaszn�l�t�l �r�kl�dtek. �gy, hogy egy felhaszn�l�csoport
megoszthasson egy oldalrendszert, azt val�szin�leg csatolni
kell ahhoz a backend felhaszn�l� csoporthoz, amely
megosztja azokat.',
		'file_mountpoints.description' => 'A f�jlrendszerhez kiindul�pontot rendel.',
		'file_mountpoints.details' => 'A f�jl k�nyvt�r-rendszert az �sszes, a webszerver
f�jlk�nyvt�rai k�z�tti navig�l�sra sz�nt  f�jl almodul haszn�lja.
<em>B�rmely<-/em> f�jlfelt�lt�shez a felhaszn�l�nak
<em>rendelkeznie kell</em> \'_temp_\' nev� csatolt
f�jlk�nyvt�rral (amelyik a felt�lt�s alap�rtelmezett k�nyvt�ra).
Meg kell jegyezni, hogy az adatb�zis csatol�sokhoz hasonl�an, a
f�jlk�nyvt�r csatol�sok is �r�kl�dnek a csoporthoz tartoz�
felhaszn�l�kt�l.',
		'email.description' => 'Add meg a felhaszn�l� email c�m�t.',
		'email.details' => 'A c�met nagyon fontos megadni mivel ide �rkeznek a
rendszer �zenetei.
<strong>Figyelem:</strong> a felhaszn�l� maga
megv�ltoztathatja ezt az adatot a Felhaszn�l�>Be�ll�t�s
modulban.',
		'realName.description' => 'Add meg a felhaszn�l� szab�lyos nev�t, pl.: John Doe',
		'realName.details' => '<strong>Figyelem:</strong> a felhaszn�l� maga megv�ltoztathatja ezt az adatot a Felhaszn�l�>Be�ll�t�s modulban.',
		'disable.description' => 'Ez az opci� ideiglenesen megakad�lyozza a felhaszn�l�t a bejelentkez�sben.',
		'admin.description' => 'Az \'Adminisztr�tor\' felhaszn�l�k az �SSZES jogosults�ggal rendelkeznek a rendszerben!',
		'admin.details' => 'Az \'Admin\' b�rmit megtehet, amit a TYPO3 megenged,
ez az adminisztr�tor t�pus csak adminisztr�ci�s c�llal
haszn�lhat�. A napi karbantart�sokat norm�l felhaszn�l�kkal
aj�nlatos elv�geztetni. Az \'Admin\' felhaszn�l�knak nem kell
sz�ks�gk�ppen egyik backend felhaszn�l� csoporthoz sem
tartozni. Teh�t �vakodni kell att�l, hogy oldalakat
l�trehoz� \'Admin\' felhaszn�l�k ne tartozzanak egyik csoportba
sem, mert �gy val�szin�leg l�thatatlanok m�s felhaszn�l�k
r�sz�re. Ha ez a probl�ma felmer�l, k�nnyen megoldhat� egy
csoport hozz�rendel�se az \'Admin\'-hoz valamilyen m�don.
Ez term�szetesen nem �rinti a jogosults�gokat, mivel ezek
korl�tlanok, de az els� list�ba felvett csoport
alap�rtelmez�sk�nt az �jonnan l�trehozott oldalak
tulajdonos csoportja.
Az \'Admin\' felhaszn�l�k k�nnyen felismerhet�ek piros ikonukr�l
a szok�sos k�k felhaszn�l�i ikonnal ellent�tben.
Val�sz�n�leg csak magadat fogod \'Admin\' felhaszn�l�k�nt
felvenni.',
		'options.description' => 'V�laszd ki, ha a felhaszn�l�nak �r�k�lnie aj�nlatos az oldal- �s f�jlrendszer csatlakoz�si pontokat a tagcsoportt�l.',
		'options.details' => 'Nagy el�ny a felhaszn�l�knak a tagcsoportt�l �r�kl�si
csatol�pontokat adni, mert ez igen megk�nny�ti ugyanannak a
csatol�pontnak az adminisztr�ci�j�t.
Ha nem ellen�rz�d ezeket a funkci�kat, meg kell gy�z�dn�d
arr�l, hogy az oldalrendszer csatol�pontjai �s a f�jl
k�nyvt�rrendszer be legyen �ll�tva a felhaszn�l� r�sz�re.',
		'fileoper_perms.description' => 'V�lassz m�k�d�si enged�lyt a felhaszn�l�nak.',
		'fileoper_perms.details' => 'Ezek a be�ll�t�sok kapcsol�dnak a F�jl>Lista modul-ban tal�lhat� funkci�khoz.',
		'starttime.description' => 'Add meg azt a d�tumot, amikort�l a fi�k akt�v.',
		'endtime.description' => 'Add meg azt a d�tumot, amikort�l a fi�k nem enged�lyezett.',
		'lang.description' => 'V�laszd ki az <i>alap�rtelmezett</i> nyelvet!',
		'lang.details' => 'Meghat�rozza a felhaszn�l� r�sz�re a backend fel�let nyelv�t.
Minden, a norm�l felhaszn�l�k r�sz�re el�rhet� f�folyam a
rendszer kiv�lasztott nyelv�n lesz el�rhet�.
Az \'Admin\' felhaszn�l�k teh�t azt tapasztalj�k, hogy a
TYPO3-ban csak \'Admin\'-r�szek angol nyelv�ek. Ebbe
beletartozik az "Eszk�z�k" �sszes almodulja valamint
a Web>Sablon modul.
<b>Figyelem:</b> ez csak az alap�rtelmezett nyelv. Amint a 
felhaszn�l� bejelentkezik, a nyelv megv�ltoztathat� a
Felhaszn�l�>Telep�t�s modulban.',
		'userMods.description' => 'V�laszd ki  a felhaszn�l� sz�m�ra el�rhet� backend modulokat.',
		'userMods.details' => 'Megadja a felhaszn�l� �ltal el�rhet� men�pontokat.
Fontos, hogy maga a modullista konfigur�lhat� a backend
felhaszn�l�  csoportok r�sz�re �s ezeket a felhaszn�l� �r�k�lje
az itt kiv�laszott modulokkal egy�tt. Igen val�sz�n�, hogy nem
�ll�tunk be semmilyen modult mag�ra a felhaszn�l�ra, hanem
ink�bb annak a csoportnak, aminek a tagja. Teh�t a lista nagy
lehet�s�get biztos�t egy egyszer� modul hozz�rendel�shez
bizonyos felhaszn�l�k r�sz�re.',
		'TSconfig.description' => 'Adj kieg�sz�t� TSconfig-ot a felhaszn�l�nak (r�szletes).',
		'TSconfig.details' => 'Ez a mez� lehet�s�get ad a felhaszn�l� konfigur�l�s�nak jelent�s kiterjeszt�s�re. Az opci� r�vid �sszegz�se mag�ban foglalja a backend modulok r�szletes konfigur�ci�j�t a felhaszn�l� specifikus alap�rtelmezett t�bla mez�k be�ll�t�s�val, a Rich Text Editor kiv�laszt�si lehet�s�g�vel. A lista id�vel n�ni fog �s az adminsztr�ci�s dokument�ci�ban r�sztesen ki lesz fejtve, f�leg az \'admin_guide.pdf\'-ben (l�sd al�bb).',
	),
	'gl' => Array (
	),
	'th' => Array (
	),
	'gr' => Array (
	),
	'hk' => Array (
		'.description' => '�o�O��Ժ޲z�ϥΪ̪���ƪ�',
		'username.description' => '��J��ԨϥΪ̪��n�J�W��',
		'username.details' => '�ϥΪ̦W�٬O�������M�@�w�H�Ӷ���A�䤤���঳�Źj�C�ϥΪ̦W�٬O�W�@���C���p���O�W�@���A�|�۰ʥ[�W�Ʀr',
		'password.description' => '��J�W����ԨϥΪ̪��K�X�]�d�N�A�b�椤��J����<i>�|</i>�Q�ݨ��^',
		'password.details' => '�ݭn�K�X�C�b�K�X��MD5�[�K�ǰe�h���A�����e�A�]���K�X�ȥ������|�z�L���p���ǰe�C�b�ϥΪ̭ק�K�X�ɩM�n�J�ɳ��O�o�ˡC
�o�ӭ�h���|�ҥܭ�l�K�X�A���O��<i>���O</i>�P�u�����[�K�ۦP�C���p�A�n�󰪵{�ת��O�K�A�A���ӧ�TYPO3����Ԧw�˦b�@�Ӧw�������A���W�C
�K�X�HMD5�[�K���Φ��x�x�s�b��Ʈw���A�]���]���i��q������쥻���K�X�C�o�N��ϥΪ̡u�򥢪��K�X�v�@�w�n�ηs���K�X���N�C',
		'usergroup.description' => '�]�w��ԨϥΪ̩��ݪ��s��',
		'usergroup.details' => '��ԨϥΪ̸s�թw�q��ԨϥΪ̩ҩ�ŧ���v���C�]���A���D��ԨϥΪ̬O�u�޲z���v�ŨϥΪ̡A�_�h�L�ݭn�����@�өΥH�W���ϥΪ̸s�ժ������A�H�P�L�i�H��b�a�o��ҽᤩ���v���C�b�ϥΪ̸s�դ��ҳ]�w�����ʤj�����Q�s�X��������C
�b�W�����Ĥ@�ӡ]�̤W���^�ϥΪ̸s�աA�w�]���ϥΪ̩ҫإߪ��������֦���',
		'lockToDomain.description' => '��J�D�����W�١A�ϥΪ̥����q���n�J',
		'lockToDomain.details' => '�@��TYPO3�t�Υi�H���h�Ӻ���ϥΡC�]���A�o�ӿﶵ�O�ҥu�i�H�q�Y�@�D���n�J',
		'disableIPlock.description' => '�����O����ԨϥΪ�IP��}���\\��',
		'disableIPlock.details' => '�A�ݭn�������\\��A���p����ԨϥΪ̥HISDN��MODEM�s���Ӷi�JTYPO3�A�]�o�ǳs���|�b�����A�s����o��s��IP��}�C��DHCP���t��}��@�ˡA�`�`�|���t��s��IP��}',
		'db_mountpoints.description' => '�]�w�ϥΪ̺�����Ϫ��_�l�I',
		'db_mountpoints.details' => '������ϳQ�Ҧ������ƼҲեΥH���������A���@�w�n���Y�өw�q���_�l�I�C�o�̧A���Ӵ��J�ΥH�W���ѷӭӬ���Ϥ����s�ڭ��C�o�٬��u��Ʈw���I�v

<strong>�d�N</strong>�ϥΪ̥i�H��ŧ���ݪ���ԨϥΪ̸s���u��Ʈw���I�v�C�]���A���p�A�Q�@�s�ժ��ϥΪ̦@�Τ@�Ӿ�ϡA�A���Ӧb�L�̦P�ݪ��s�դ����J��ϡC',
		'file_mountpoints.description' => '�]�w�ɮ׸�Ƨ���Ϫ��_�l�I',
		'file_mountpoints.details' => '�ɮ׾�ϳQ�Ҧ��ɮװƼҲեΥH�������������W���ɮסC���F����W��<em>����</em>�ɮסA�ϥΪ�<em>�@�w</em>�n���@���ɮ׸�Ƨ�����@�Ӻ٬��u_temp_�v�]�o�O�W�����ɮ׹w�]���x�s��m�^����Ƨ����W�C
�d�N�A���p�u��Ʈw���I�v�@�ˡA�ɮ׸�Ƨ����I�]�i�H�Q�ϥΪ̱q�ϥΪ̸s�դ���ŧ�C',
		'email.description' => '��J�ϥΪ̪��q�l�a�}',
		'email.details' => '�O�_��J�o�Ӧa�}���ӭ��n�A�o�O�H�X�T�����t�Ϊ��a�}�C
<strong>�d�N</strong>�ϥΪ̥i�H�ۤv�b�u�ϥΪ�>�]�w�v�Ҳդ����ܳo�ӭ�',
		'realName.description' => '��J�ϥΪ̯u�m�W',
		'realName.details' => '<strong>�d�N</strong>�ϥΪ̯���ۤv�ϥΡu�ϥΪ�>�]�w�v�Ҳէ��ܳo�ӭ�',
		'disable.description' => '�o�ӿﶵ�|�Ȯ������ϥΪ̪��n�J�\\��',
		'admin.description' => '�u�޲z���v�ϥΪ̹�t�Φ����㪺�s���v',
		'admin.details' => '�u�޲z���v�i�H������TYPO3�e�\\���ơA�ӳo���ϥΪ����Ӭ��F�޲z���ت��~�|�B�ΡC�Ҧ���`���u�@���ӥH���q���ϥΪ̳B�z�C�u�޲z���v�����ݩ�����ԨϥΪ̸s�աC�M�ӧA���ӯd�N�Ѥ��ݩ���s�ժ��޲z���ŨϥΪ̩ҫإߪ��Ҧ������N���|��t�����󪺦��̸s�աA�]����L�ϥΪ̤]�\\�|�ݤ���o�Ǻ����C���p�����D�X�{�A�A�i�H�����a�z�L�t���s�յ��u�޲z���v�ϥΪ̨ӸѨM�o�Ӱ��D�C�˰���M���|�v�T�F�v���A�]���v���O�S������A���O�W��W�Ĥ@�Ӹs�ճQ�w�]���s�إߪ��������֦��̸s�աC
�u�޲z���v�ϥΪ̬O�����{���A�]���L�֦̾����⪺�ϥΪ̹ϥܡA�o�P�@��ϥΪ��x��ϥܦ��Ҥ��P�C

�A�̦n���F�ۤv�H�~�A���t������ϥΪ̧@���u�޲z���v�ϥΪ̡C',
		'options.description' => '���p�ϥΪ����ӱq�s�թ�ŧ������ϩθ�Ƨ���ϱ��I�A�п�ܳo�ӿﶵ',
		'options.details' => '���ϥΪ̱q�s�դ���ŧ���I���ܦn���n�B�A�]���|�Ϻ޲z�h�ӨϥΪ̦@�P�ϥΤ@�ӱ��I�ܬ������e��
���p�A����ܳo�ӿﶵ�A�A�@�w�n���ϥΪ̯S�O�b������ϩM�׾�Ϥ��]�w���I�C',
		'fileoper_perms.description' => '���ϥΪ̿���ɮ׹B�@���v��',
		'fileoper_perms.details' => '�o�ǳ]�w���Y��b�u�ɮ�>��C�v����쪺�\\��A�]���Y��@�몺�ɮפW��',
		'starttime.description' => '��J�b��ͮĪ����',
		'endtime.description' => '��J�b�ᥢ�Ī����',
		'lang.description' => '���<i>�w�]</i>���y��',
		'lang.details' => '�M�w�ϥΪ̩ҨϥΪ���Ԥ������y���C�Ҧ��i�Ѥ@��ϥΪ̨ϥΪ��D�n�������i�H�b��ܪ��t�λy�����B�ΡC�M�ӡu�޲z���ϥΪ̡v�|�g��TYPO3���u�u���޲z���v�����O�^�y���C�]�A�F�Ҧ��u�u��v�Ҳդ����ƼҲթM�u����>�˪��v�ҲաC

<b>�d�N<��b>�o�u�O�w�]�y���C�@���ϥΪ̤w�g�n�J�A�y���@�w�n�z�L�u�ϥΪ�>�]�w�v�Ҳէ���',
		'userMods.description' => '���ϥΪ̿�ܥi�H����ԼҲ�',
		'userMods.details' => '�M�w�����ǡu��涵�ءv�i�ѨϥΪ̨ϥΡC

�d�N��ԨϥΪ̸s�ժ��Ҳճ]�w�i�H�O�ۦP���A���F�A���ܪ��Ҳե~�A�A�[�W�q�s�թ�ŧ���Ҳզ����F�i�Ϊ��ҲզW��C���ο�k�O���n���ӧO�ϥΪ̳]�w�ҲղM��A�ӬO�b����ݪ���ԨϥΪ̸s�դ��]�w�i�μҲժ��M��C�M�ӳo�̪��W��i�H���ѫܦn���~�|�Ӭ��Y�ӨϥΪ̥[�J�@�ӼҲ�',
		'TSconfig.description' => '���ϥΪ̿�J���[�� TSconfig�]�i���^',
		'TSconfig.details' => '�o�����e�\\�A���׸ԲӦa�����ϥΪ̪��]�w�C�o�ӿﶵ��²���]�A�@�ӸԺɪ���ԼҲճ]�w�A�]�w�ϥΪ̦�����ƪ����ȡA�]�w�h�\\���r�s�边���ﶵ���C�o�ӦW��|�H�ɶ��W�[�A�åB�b�޲z������󤤦��Ժɪ������A�S�O�O�uadmin_guide.pdf�v�]�ѬݥH�U�s���^',
	),
	'eu' => Array (
	),
	'bg' => Array (
	),
	'br' => Array (
		'.description' => 'Esta � a tabela de usu�rios com acesso ao Painel de Administra��o.',
		'username.description' => 'Digite o nome de login do usu�rio-administrador.',
		'username.details' => 'Um nome de usu�rio � necess�rio, e deve estar em min�sculas e sem conter espa�os. Al�m disso, o nome de usu�rio deve ser exclusivo. Se n�o for, um n�mero ser� adicionado ao nome automaticamente.',
		'password.description' => 'Digite a senha correspondente para o usu�rio-administrador acima (note que a senha digitada <i>estar�</i> vis�vel neste campo!).',
		'password.details' => 'A senha � necess�ria. Antes de ser enviada ao servidor, a senha � codificada (md5), para que o valor original n�o seja enviado atrav�s da internet. Isso ocorre tanto ao editar a senha quanto no login do usu�rio.
Embora este princ�pio n�o revele a senha original, <i>n�o</i> � o mesmo que encripta��o de verdade. Se voc� precisar do m�ximo grau de seguran�a, deve instalar o Painel de Adminstra��o do TYPO3 em um servidor seguro.
A senha � armazenada no banco de dados como um c�digo md5 e sendo assim tamb�m n�o � poss�vel extrair a senha original a partir do banco de dados. Isso significa que \'senhas esquecidas\' precisam ser substitu�das por uma nova senha para cada usu�rio.',
		'usergroup.description' => 'Atribuir grupos de usu�rios-administradores a este usu�rio.',
		'usergroup.details' => 'Os grupos de usu�rios-administradores definem as permiss�es que ser�o herdadas pelo usu�rio. Portanto, exceto quando um usu�rio-administrador � um usu�rio \'Admin\', ele deve ser membro de um ou mais grupos para receber as permiss�es adequadas. As propriedades definidas aos grupos de usu�rios s�o na sua maioria inclu�das juntas.
O primeiro grupo (do topo) da lista � o grupo que, por padr�o, ser� propriet�rio das p�ginas criadas pelo usu�rio.',
		'lockToDomain.description' => 'Insira o nome do servidor pelo qual o usu�rio � for�ado a logar.',
		'lockToDomain.details' => 'Um sistema TYPO3 pode ter m�ltiplos dom�nios apontando para ele. Logo, esta op��o garante que usu�rios apenas possam logar a partir de um certo dom�nio.',
		'db_mountpoints.description' => 'Delegar pontos de partida para a �rvore de p�ginas dos usu�rios.',
		'db_mountpoints.details' => 'A �rvore de p�ginas usada por todos os Subm�dulos-web para navegar deve ter alguns pontos-de-entrada definidos. Voc� deve inserir aqui uma ou mais refer�ncias para uma p�gina que ir� representar uma nova p�gina raiz para a �rvore de p�ginas. Isto se chama \'Montar banco de dados\'.

<strong>Aten��o</strong> grupos de usu�rios-administradores tamb�m t�m montagens de banco de dados que podem ser herdadas pelo usu�rio. Ent�o se voc� quer que um grupo de usu�rios compartilhe uma �rvore de p�ginas, voc� deve montar a �rvore de p�ginas no grupo de usu�rios-administradores ao qual pertencem.',
		'file_mountpoints.description' => 'Delegar pontos de partida para a �rvore de pastas de arquivos.',
		'file_mountpoints.details' => 'A �rvore de pastas de arquivos � utilizada por todos os subm�dulos-Arquivo para a navega��o pelas pastas de arquivos do servidor. Para poder enviar <em>qualquer</em> arquivo, o usu�rio <em>precisa</em> ter uma pasta de arquivos montada, com outra pasta de nome \'_temp\' dentro dela (para onde os arquivos s�o enviados por padr�o).
Observe que, assim como a \'montagem de banco de dados\', a montagem de pastas de arquivos pode ser herdada dos grupos aos quais o usu�rio pertence.',
		'email.description' => 'Insira o endere�o de e-mail do usu�rio.',
		'email.details' => 'Este endere�o � importante pois � para onde as mensagens do sistema ser�o enviadas.
<strong>Aten��o</strong> o usu�rio tem a op��o de mudar este campo sozinho atrav�s do m�dulo Usu�rios>Configura��o.',
		'realName.description' => 'Insira o nome do usu�rio, ex: Jo�o Ningu�m.',
		'realName.details' => '<strong>Aten��o</strong> o usu�rio tem a op��o de mudar este campo sozinho atrav�s do m�dulo Usu�rio>Configura��o.',
		'disable.description' => 'Esta op��o ir� desabilitar temporariamente o login de usu�rios.',
		'admin.description' => 'Usu�rios \'Admin\' t�m acesso TOTAL ao sistema!',
		'admin.details' => 'Usu�rios \'Admin\' podem fazer qualquer coisa que o TYPO3 permitir, assim este tipo de usu�rio deve ser utilizado apenas para tarefas administrativas. Todo o manuseio di�rio deve ser feito atrav�s de usu�rios comuns.
Usu�rios \'Admin\' n�o precisam ser membros de algum grupo de usu�rios. Entretanto, note que qualquer p�gina criada por um usu�rio \'Admin\' sem grupo n�o ter� um grupo-propriet�rio atribu�do, e assim provavelmente ficar� invis�vel a outros usu�rios. Se isso se tornar um problema, voc� pode facilmente resolv�-lo atribuindo um grupo ao usu�rio \'Admin\'. Isso, claro, n�o afeta as permiss�es, j� que s�o ilimitadas, mas o primeiro grupo listado � por padr�o o grupo-propriet�rio das novas p�ginas criadas.
Usu�rios \'Admin\' s�o facilmente reconhecidos, j� que s�o indicados por um �cone vermelho ao inv�s do �cone de usu�rio normal, azul.

Voc� provavelmente n�o definir� quaisquer outros usu�rios, al�m de voc� mesmo, como usu�rios \'Admin\'.',
		'options.description' => 'Selecione se o usu�rio deve herdar dos grupos de usu�rio os pontos de montagem de p�gina ou pastas.',
		'options.details' => '� uma grande vantagem permitir que os usu�rios herdem pontos de montagem dos grupos de usu�rios, uma vez que torna a administra��o destes pontos de montagem extremamente f�cil no caso de muitos usu�rios.
Se voc� n�o marcar estas op��es, deve se certificar de que os pontos de montagem para a �rvore de p�ginas e para a �rvore de pastas de arquivos est�o configuradas individualmente para cada usu�rio.',
		'fileoper_perms.description' => 'Selecione as permiss�es de opera��o de arquivos para o usu�rio.',
		'fileoper_perms.details' => 'Estes ajustes est�o relacionados �s fun��es localizadas no m�dulo Arquivo>Lista, assim como ao envio de arquivos em geral.',
		'starttime.description' => 'Digite a data a partir da qual a conta estar� ativa.',
		'endtime.description' => 'Digite a data a partir da qual a conta estar� inativa.',
		'lang.description' => 'Selecione o idioma <i>padr�o</i>.',
		'lang.details' => 'Determina o idioma da interface de administra��o para o usu�rio. Todas as se��es usuais de trabalho dispon�veis para usu�rios normais estar�o dispon�veis na l�ngua selecionada.
Usu�rios-Administradores, no entanto, notar�o que as partes de uso exclusivo de \'Administradores\' estar�o em ingl�s. Isso inclui todos os subm�dulos em "Ferramentas" e o m�dulo Internet>Modelos.

<b>Nota</b> este � apenas o idioma do modo padr�o. Assim que o usu�rio se logar, o idioma deve ser modificado atrav�s do m�dulo Usu�rio>Configura��o.',
		'userMods.description' => 'Selecione os m�dulos de Administra��o dispon�veis para o usu�rio.',
		'userMods.details' => 'Determina quais \'itens de menu\' estar�o dispon�veis para o usu�rio.

Note que a mesma lista de m�dulos pode ser configurada para os grupos de usu�rios, e que estes m�dulos ser�o herdados pelo usu�rio em adi��o aos selecionados aqui. � altamente recomendado que voc� n�o atribua m�dulos aos usu�rios, e ao inv�s disso selecione os m�dulos nos grupos de usu�rios onde s�o membros. De qualquer modo, esta listagem permite uma grande forma de adicionar um �nico m�dulo a usu�rios espec�ficos.',
		'TSconfig.description' => 'Digite TSconfig adicional para o usu�rio (avan�ado).',
		'TSconfig.details' => 'Este campo permite a voc� estender a configura��o do usu�rio em v�rios detalhes. Um breve sum�rio das op��es inclui uma configura��o mais detalhada dos m�dulos de administra��o, ajuste de valores de campos de tabelas padr�o espec�ficos dos usu�rios, ajustes de op��es do Editor Rich Text, etc. A lista deve crescer com o tempo e est� fartamente documentada na documenta��o de administra��o, em particular \'admin_guide.pdf\' (veja o link abaixo).',
	),
	'et' => Array (
	),
	'ar' => Array (
	),
	'he' => Array (
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