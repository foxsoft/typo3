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
		'.description' => 'A filemount egy relat�v vagy abszol�t file el�r�si utat jelent a szerveren.',
		'.details' => 'Egy file mount rekord k�sz�t�s�vel �s egy hivatkoz�s elhelyez�s�vel egy Backend felhaszn�l�csoportnak el�r�st lehet adni a file mounthoz a File>Lista modulban.
Legal�bb egy filemount-ot kell k�sz�teni �s be�ll�tani egy \'_temp_\' k�nyvt�rral, ha azt akarod, hogy a felhaszn�l�k file-okat tudjanak felt�lteni a b�ng�sz�n kereszt�l.
A filemount-ok el�r�s is biztos�thatnak egy olyan �tvonalhoz a szerveren, amihez a felhaszn�l�nak van FTP el�r�se. Ne felejts�nk el megfelel� file-jogosults�gokat adni, teh�t a felhaszn�l�nak legal�bb olvas�si joga kell hogy legyen az FTP k�nyvt�rhoz.',
		'title.description' => 'Add meg a filemount nev�t',
		'path.description' => 'Add meg a filemount el�r�si �tj�t, relat�v vagy abszol�t m�don a BASE be�ll�t�sokt�l f�gg�en.',
		'path.details' => 'Ha a B�ZIS relat�vra van �ll�tva, a mountolt �tvonal a "fileadmin/" alk�nyvt�rban tal�lhat�. Ekkor be kell �rnod a "fileadmin/" alk�nyvt�rban tal�lhat� el�r�si utyat. Teh�t ha mountolni akarod a "fileadmin/user_uploads/all/" �tvonalat, akkor "user_uploads/all" �rt�ket kell az �TVONAL mez�be �rni.
Ha a B�ZIS abszol�t, akkor a teljes szerver el�r�si utat be kell �rni, pl. "/home/ftp_upload" vagy "C:/home/ftp_upload". 

<strong>Megjegyz�s:</strong> Figyelj�nk, hogy a webszerver felhaszn�l�, aki a PHP-t futtatja rendelkezzen <em>legal�bb</em> olvas�si joggal az �tvonalhoz. Ha m�gsem, a mount egyszer�en nem fog megjelenni, �s hiba�zenetet sem k�ld.
Ha probl�m�nk ad�dik - k�l�n�sen az abszol�t mount-okkal - pr�b�ljuk valami egyszer�t mountolni, mint pl. egy relat�v �tvonalat a fileadmin-ban. Ha ez m�k�dik, akkor pr�b�ljuk abszol�t �ttal.

A PHP be�ll�t�sunk m�g egy�b akad�lyokat �ll�that, ha a safe-mode t�pus� lehet�s�gek enged�lyezve vannak. Ekkor haszn�ljunk relat�v utakat.',
		'hidden.description' => 'Akkor haszn�ld, ha ideiglenesen le akarsz tiltani egy filemount-ot.',
		'hidden.details' => 'A mount-ot haszn�l� �sszes backend felhaszn�l�nak megsz�nt az el�r�se, bele�rtve az \'Admin\' felhaszn�l�kat is.',
		'base.description' => 'Meghat�rozza, hogy a PATH mez� �rt�ke abszol�t szerver�tk�nt vagy a fileadmin/ alk�nyvt�rhoz k�pest relat�v m�don legyen �rtelmezve.',
	),
	'gl' => Array (
	),
	'th' => Array (
	),
	'gr' => Array (
	),
	'hk' => Array (
		'.description' => '�ɮױ��I�y�z�@�Ӧ��A���������|�A�۹�ε��諸',
		'.details' => '�z�L�إߤ@���ɮױ��I�M�b��ԨϥΪ̸s�դ���m�@�ӰѷӡA�A�i�H�\\�i�@�W�ϥΪ̦s���b�ɮ�>��C�Ҳդ����ɮױ��I�C
�A�ݭn�إߩM�]�w�̤֤@�ӥH �u_temp_�v ���ɮױ��I�A���p�A�Q�ϥΪ̳z�L�����������W���ɮסC
�ɮױ��I�]�\\�P�ɳ]�w��@�Ӧ��A���W�����|���s���v���A�惡�ϥΪ̦� ftp �s���v���C�u�n��O���T�a�]�w�����W���ɮצs���v���A�H���������A���ϥΪ̡]PHP�B��ɪ��ϥΪ̡^���̰򥻪��\\Ū�v���s�� FTP ��Ƨ��C',
		'title.description' => '��J�ɮױ��I���W��',
		'path.description' => '��J�ɮױ��I�����|�A�۹諸�ε��諸�A���G�򥻪��]�w',
		'path.details' => '���p�򥻳]�w���۹諸�A�Q�������|�|�b�����ufileadmin�v���l��Ƨ����C�A���ӿ�J�ufileadmin�v���l��Ƨ������|�C�Ҧp�A�A�Q���W�ufileadmin/user_uploads/all�v���s���v�A�A�N���ӿ�J�uuser_uploads/all�v�@�����|���ȡC
���p�򥻳]�w�O���諸�A�A���ӿ�J���A���W��������|�A�Ҧp�G�u/home/ftp_upload�v�ΡuC:/home/ftp_upload�v

<strong>�d�N�G</strong>�b���󱡪p�U�A�֩w�������A���B��PHP���ϥΪ̦����|<em>�̰�</em>��Ū���v���C���p�S���A���I�N���|�X�{�A�ӥB���|�S������ĵ�i�C
���p�A�����D - �S�O�O���ﱾ�I - ���ձ��J�@�ǡu²��v�A�p�@�Ӧbfileadmin�����۹���|�C���p�B�@�}�n�A�A���յ�����|�C

�A�� PHP �]�w�]�\\�P�˷|�[�W��L�����A�A���p�ҰʤF�����w���Ҧ�(safe-mode)�����\\��C�˴N�n�ά۹���|�C',
		'hidden.description' => '�ϥγo�ӿﶵ�ӼȮ������ɮױ��I�C',
		'hidden.details' => '�Ҧ��ϥα��I����ԨϥΪ̱N����s���I�C�]�A�F�u�޲z���v�ϥΪ̡C',
		'base.description' => '�M�w���|�檺�ȬO�Q�ݬ����A���W��������|�άO�@�Ӭ۹�������fileadmin���l��Ƨ������|',
	),
	'eu' => Array (
	),
	'bg' => Array (
		'.description' => '���� ����������� (Filemounts) ������ ���� ���� �� �������, ����������� ��� ���������.',
		'title.description' => '�������� ��� �� ���� ����������� (filemount)',
		'path.description' => '�������� ���� �� ���� ����������� (filemount), ����������� ��� ��������� � ���������� �� ����������� �� BASE.',
		'hidden.description' => '����������� ���� ����� �� �� ��������� �������� ���� ����������� (filemount).',
		'hidden.details' => '������ backend ����������� ���������� ����������� (mount), ���� �� ���� ������ ������. ���� ������� � \'�����\' �������������.',
		'base.description' => '���������� ���� ���������� �� ��� (PATH) ������ ���� �� ���� ���������� ���� ��������� ��� �� ������� ��� ���� ����������� ��� ��� ���������/ �������� �� ��� ����������.',
	),
	'br' => Array (
		'.description' => 'Pontos-de-entrada descrevem um caminho de arquivo no servidor, relativo ou absoluto.',
		'.details' => 'Ao criar um registro de ponto-de-entrada e colocar uma refer�ncia a ele num grupo de usu�rio Administrador, voc� pode conceder acesso ao ponto-de-entrada a um usu�rio no m�dulo Arquivo>Lista.
Voc� deve criar ao menos um ponto-de-entrada com uma pasta \'_temp_\' nela se quiser que usu�rios sejam capazes de enviar arquivos atrav�s de um navegador web.
Pontos-de-entrada tamb�m podem configurar acesso a um caminho no servidor onde o usu�rio tenha acesso via FTP. Apenas lembre de criar permiss�es de arquivo corretamente no servidor para que o usu�rio do servidor (aquele que est� rodando o PHP) tenha ao menos capacidade de leitura no diret�rio FTP.',
		'title.description' => 'Insira um t�tulo para o ponto-de-entrada',
		'path.description' => 'Insira o caminha para o ponto-de-entrada, relativo ou absoluto, dependendo das configura��es da BASE.',
		'path.details' => 'Se BASE for configurada como relativa, o caminho montado ser� encontrado na subpasta "fileadmin/" do site. Ent�o voc� deve inserir uma subpasta de "fileadmin/" como caminho. Por exemplo, se voc� quiser montar acesso para "fileadmin/user_uploads/all", ent�o insira o valor "user_uploads/all" como o valor de PATH.
Se BASE for absoluta, voc� deve inserir o caminho absoluto no servidor. Por exemplo "/home/ftp_upload" ou "C:/home/ftp_upload".

<strong>Aten��o:</strong> Em todo caso, certifique-se de que o usu�rio do servidor web rodando PHP tenha <em>ao menos</em> permiss�o de leitura no caminho. Se n�o, o ponto-de-entrada simplesmente n�o aparecer�, sem advert�ncias.
Se voc� tiver problemas - especialmente com montagens absolutas - tente montar algo "simples", como um caminho relativo em "fileadmin".  Se isto funcionar corretamente, tente o caminho absoluto.

Sua configura��o de PHP tamb�m pode impor outras restri��es se caracter�sticas como \'safe-modo\' estiverem habilitadas. Ent�o use caminhos relativos.',
		'hidden.description' => 'Use esta op��o para desativar o ponto-de-entrada temporariamente.',
		'hidden.details' => 'Todos os usu�rios-administradores usando o ponto-de-entrada n�o ter�o mais acesso a ele. Isto inclui usu�rios \'Admin\'.',
		'base.description' => 'Determina se o valor do campo PATH deve ser reconhecido como um caminho absoluto no servidor ou um caminho relativo � pasta \'fileadmin/\' do site.',
	),
	'et' => Array (
	),
	'ar' => Array (
		'.description' => '���� ������� ���� �� ��� ���� ����� ��� ������� ���� ����� �� �����',
		'.details' => '�� ���� ����� ��� ���� ���� � ���� ����� ���� �� ������ ���������� ��������. � ��� ��� �� ���� ������ ��� ����� ������  �� ������: ��� < �������.
��� ����� ������ ��� ����� ��� ���� ���� ����� ���� ������ ������ \'_temp_\'  .',
	),
	'he' => Array (
		'.description' => 'מוצבי קבצים מתארים נתיב קבצים על השרת, יחסי או מוחלט.',
		'.details' => 'דרך יצירת רשומה של מוצב קבצים והנחת התייחסות אליו בקבוצת משתמשי ממשק אחורי, הנך יכול לאפשר גישת משתמשים למוצב קבצים במודול "קובץ>רשימה". עליך ליצור ולהגדיר לפחות מוצב קבצים אחד עם תיקייה "_temp_" בתוכו אם הנך רוצה לאפשר למשתמשים להעלות קבצים דרך דפדפן אינטרנט. מוצבי קבצים יכולים גם לעצב גישה לנתיב על השרת, אליו יש למשתמש גישת FTP. צריך לזכור רק להגדיר הרשאות קבצים על השרת בצורה נכונה, כך שמשתמש של השרת (שה-PHP משתמש בזהותו) נושא לפחות זכות קריאה לתיקיית FTP זו.',
		'title.description' => 'הכנס שם של מוצב קבצים.',
		'path.description' => 'הכנס נתיב של מוצב קבצים, יחסי או מוחלט, תלוי בהגדרתו של בסיס (BASE).',
		'path.details' => 'במיקרה בו הבסיס (BASE) מכוון להיות יחסי, הנתיב שמוצב נמצא בתת-תיקייה "fileadmin/" של האתר. לכן עליך לציין תת-תיקייה של "fileadmin/" בנתיב. לדוגמה, אם ברצונך ליצור מוצב ל-"fileadmin/user_uploads/all/" עליך לציין "user_uploads/all" בתור ערך לשדה "נתיב". במידה ובסיס (BASE) הינו מוחלט - עליך לציין נתיב מוחלט על השרת, כגון "/home/ftp_upload" או "C:/home/ftp_upload".
<strong>הערה:</strong>
בכל מקרה, נא לוודע שמשתמש שבזהותו משתמש ה-PHP נושא לפחות זכות קריאה לנתיב. אם לא - המוצב פשוט לא יופיע, ללא כל אזהרה. אם יש בעיות , במיוחד עם מוצבים מוחלטים - נסה לצור מוצב פשוט יותר - כמו יחסי ל "fileadmin". אם זה עובד כרצוי - נסה נתיב מוחלט.
תצורת PHP יכולה להטיל הגבלות נוספות. לכן כדאי יותר להשתמש בנתיבים יחסיים.',
		'hidden.description' => 'השתמש באפשרות זו כדי להפוך מוצב קבצים ללא זמין זמנית.',
		'hidden.details' => 'כל משתמשי ממשק האחורי לא יקבלו אישור גישה יותר. זה כולל משתמשי "Admin" גם.',
		'base.description' => 'קובע אם ערך של שדה "נתיב" הוא נתיב מוחלט או יחסי לתיקייה fileadmin.',
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