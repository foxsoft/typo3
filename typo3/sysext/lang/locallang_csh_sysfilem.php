<?php
/**
 * Default  TCA_DESCR for "sys_filemounts"
 * TYPO3 CVS ID: $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'.description' => 'Filemounts describe a filepath on the server, relative or absolute.',
		'.details' => 'By creating a file mount record and placing a reference to it in a Backend usergroup you can allow a user access to the file mount in the File>List module. 
You need to create and set at least one filemount with a folder \'_temp_\' in it if you want users to upload files through the webbrowser.
Filemounts may also configure access to a path on the server to which the user has FTP-access. Just remember to set file-permissions on the server correctly so the webserver user (which PHP is running as) has at least read access to the FTP-dir.',
		'_.seeAlso' => 'be_users,
be_groups',
		'title.description' => 'Enter a title for the filemount',
		'path.description' => 'Enter the path of the filemount, relative or absolute depending on the settings of BASE.',
		'path.details' => 'If BASE is set to relative, the path mounted is found in the subfolder "fileadmin/" of the website. Then you should enter the subfolder in "fileadmin/" as path. For instance if you want to mount access to "fileadmin/user_uploads/all/" then enter the value "user_uploads/all" as the value of PATH.
If BASE is absolute you should enter the absolute path on the server, eg. "/home/ftp_upload" or "C:/home/ftp_upload". 

<strong>Notice:</strong> In any case, make sure the webserver user which PHP is running as has <em>at least</em> read-access to the path. If not, the mount will simply not appear without any warnings. 
If you have problems - especially with absolute mounts - try to mount something "simple" like a relative path in fileadmin. If that is working well, try the absolute path.

Your PHP-configuration may also impose other restrictions on you if safe-mode like features are enabled. Then use relative paths.',
		'_path.seeAlso' => 'sys_filemounts:base',
		'hidden.description' => 'Use this option to temporarily disable the filemount.',
		'hidden.details' => 'All backend users using the mount will not have access anymore. This includes \'Admin\'-users.',
		'base.description' => 'Determines whether the value of the PATH field is to be recognized as an absolute path on the server or a path relative to the fileadmin/ subfolder to the website.',
		'_base.seeAlso' => 'sys_filemounts:path',
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
	),
	'cz' => Array (
	),
	'pl' => Array (
	),
	'si' => Array (
	),
	'fi' => Array (
		'.description' => 'Tiedostoasetukset (filemount) kuvaavattiedostopolkua palvelimella, relatiivista tai absoluuuttista.',
		'.details' => 'Luomalla tiedostoasetus tiedon ja asettamalla sen viitteeksi Tausta k�ytt�j�joukolla voit antaa k�ytt�j�oikeuksia tiedostoasetuksille File->List aliohjelmassa.
Sinun tulee luoda v�hint��n yksi tiedostoasetus jossa hakemistona on \'_temp_\' jotta k�ytt�j� pystyv�t my�s viem��n tiedostoja palvelimelle.
Tiedostoasetuksella voidaan konfiguroida ,y�s polku jonne k�ytt�j�ll� on FTP-oikeus. Muista vain asettaa tiedosto-oikeudetoikein siten ett� www-palvelink�ytt�j� (mill� PHP toimii) on v�hint�in luku oikeus FTP-hakemistoon.',
		'title.description' => 'Anna tiedostoasetuksen (Filemount) nimi',
		'path.description' => 'Anna tiedostoasetusten polku, joko relatiivinen tai absoluuttinen, riippuen BASE asetuksista.',
		'path.details' => 'Jos Base on asetettu relatiiviseksi, voimassa oleva polku l�ytyy hakemiston fileadmin/ alta www-palvelimessa.
N�in ollen Sinun tulee asettaa hakemisto \'fileadmin/\' poluksi. Esimerkiksi jos haluat tiedostoasetukseksi "fileadmin/user_upload/all/" on Sinun annettava PATH tiedoksi "user_upload/all/".
Jos BASE on absoluuttinen, on Sinun annettava absoluuttinen polku palvelimessa, esim. /home/ftp_upload" tai "C:/home/ftp_upload". 

<strong>Huomautus:</strong> Kaikissa tapuksissa, varmista ett� palvelink�ytt�j� jolla PHP toimii on <em>ainakint</em> luku-oikeudet polkuun. Jos n�in ei ole, tiedostoasetukset eiv�t yksinkertaisesti tule n�kyviin eik� varoituksia.
Jos Sinulla on ongelmia - erityisesti absoluuttisten asetusten kanssa - yrita asettaa jotain \'yksinkertaista\' kuten relatiivinen asetus fileadmin hakemiston sis�ll�. Jos t�m�toimii oikein yrit� asettaa absoluuttinen polku.

Voi olla ett� my�s PHP-asetukset aiheuttavat rajoituksia Sinulle. kuten esimerkikis safe-moodi asetukset. K�yt� silloin relatiivisia asetuksia.',
		'hidden.description' => 'K�yt� t�t� vaihtoehtoa poistaaksesi tiedostoasetukset v�liaikaisesti.',
		'hidden.details' => 'Kenell�k��n taustk�ytt�j�lle ei ole en�� oikeuksia tiedostoasetukseen. T�m� koskee my�s \'Admin\'-k�ytt�ji�.',
		'base.description' => 'T�ll� p��tell��n onko PATH kent�n tieto tunnistettava absoluuttiseksi vai relatiiviseksi poluksi fileadmin/ hakemiston alla olevaksi alihakemistoksi',
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
		'.description' => 'Poveznice (filemounts) opisuje putanju na poslu�itelju, relativnu ili apsolutnu.',
		'.details' => 'Kreiranjem zapisa poveznice i postavljenjem reference na nju unutar pozadinske grupe korisnika mo�emo dozvoliti korisnicima da koriste poveznicu unutar Datoteka>Popis (File>List) modula.
Trebate kreirati i postaviti barem jednu poveznicu s pretincem \'_temp_\' ukoliko �elite da korisnici mogu prenositi datoteke putem web preglednika.
Poveznice tako�er mogu konfigurirati putanju tako da se mo�e pristupati datotekama do kojih korisnici imaju FTP pristup. Nemojte zaboraviti postaviti dozvole nad datotekama tako da korisnik, pod �ijim ovlastima je pokrenut web poslu�itelj, mo�e imati barem dozvolu �itanja.',
		'_.seeAlso' => 'be_korisnici,
be_grupe',
		'title.description' => 'Unesite naslov za poveznicu',
		'path.description' => 'Unesite putanju poveznice, relativnu ili apsolutnu u zavisnosti od postavljenje opcije BASE.',
		'path.details' => 'Ukoliko je BASE opcija postavljena kao relativna onda putanja pokazuje na potpretinac "fileadmin/" web sjedi�ta. Tada morate unjeti potpretinac unutar "fileadmin/" kao putanju. Na primjer �elite li povezati pristup do "fileadmin/user_uploads/all/" onda unesite vrijednost "user_uploads/all" kao vrijednost putanje.
Ukoliko je BASE opcija postavljena kao apsolutna onda ptrbate unjeti apsolutnu putanju na poslu�itelju, npr. "/home/ftp_upload" ili "C:/home/ftp_upload".

<strong>Napomena:</strong> U svakom slu�aju budite sigurni da korisnik pod �ijim ovlastima je pokrenut web poslu�itelj ima <em>najmanje>7em> prava �itanja unesene putanje. Ukoliko nema tih prava povezani sadr�aj ne�e se pojaviti bez ikakvih upozorenja.
Imate li problema - posebno s apsolutnim povezivanjem - poku�ajete povezati ne�to "jednostavnije" kao �to je relativna ptanja unutar fileadmin pretinca. Ukoliko to radi ispravno probajte s apsolutnom putanjom.

Va�a PHP konfiguracija tako�er mo�e nametnuti odre�ena ograni�enja ukoliko je safe-mod ili sli�na zna�ajka omogu�ena. Tada koristite ralativnu putanju.',
		'_path.seeAlso' => 'sys_filemounts:base',
		'hidden.description' => 'Kori�tenjem ove opvije privremeno onemogu�avate poveznicu.',
		'hidden.details' => 'Svi pozadinski korisnici koriste',
		'base.description' => 'Odre�uje da li �e vrijednost PATH polja biti prepoznat kao apsolutni  put na poslu�itelju ili relativni put u odnosu na fileadmin/ podpretinac web sjedi�ta.',
		'_base.seeAlso' => 'sys_filemounts:path',
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