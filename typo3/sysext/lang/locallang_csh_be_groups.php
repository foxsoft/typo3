<?php
/**
 * Default  TCA_DESCR for "be_groups"
 * TYPO3 CVS ID: $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'.description' => 'This is the backend administration user groups available for the Backend users. These determine the permissions for the Backend users.',
		'_.seeAlso' => 'be_users',
		'title.description' => 'Name of the Backend usergroup',
		'db_mountpoints.description' => 'Assign startpoints for the users page tree.',
		'db_mountpoints.details' => 'The page tree used my all Web-submodules to navigate must have some points-of-entry defined. Here you should insert one or more references to a page which will represent a new root page for the page tree. This is called a \'Database mount\'.
DB mounts may be inherited by the users which are members of this group. This does depend on whether the user is configured to include the mounts set in the member groups. However it\'s recommended to use backend user groups like this to configure mounts. Especially if the need to be shared amoung many users.',
		'_db_mountpoints.seeAlso' => 'be_groups:file_mountpoints,
be_users:db_mountpoints,
be_users:options
',
		'file_mountpoints.description' => 'Assign startpoints for the file folder tree.',
		'file_mountpoints.details' => 'The file folder tree is used by all File-submodules to navigate between the file folders on the webserver.
Notice as with \'DB mounts\' the file folder mounts may be inherited by the users which are members of this group.',
		'_file_mountpoints.seeAlso' => 'be_groups:db_mountpoints,
be_users:file_mountpoints,
be_users:options
',
		'pagetypes_select.description' => 'Select which \'Types\' of Pages the members may set.',
		'pagetypes_select.details' => 'This option limits the number of valid choices for the user when he is about to select a page type.',
		'_pagetypes_select.seeAlso' => 'pages:doktype,
be_groups:inc_access_lists',
		'tables_modify.description' => 'Select which tables the members may modify.',
		'tables_modify.details' => 'An important part of setting permissions is to define which database tables a user is allowed to modify. 
Tables allowed for modification is automatically also allowed for selection and thus you don\'t need to set tables entered here in the "Tables (listing)" box.

<strong>Notice</strong> that this list adds to the fields selected in other member groups of a user.',
		'_tables_modify.seeAlso' => 'be_groups:tables_select,
be_groups:inc_access_lists',
		'tables_select.description' => 'Select which tables the members may see in record lists (\'modify\' tables does not need to be re-entered here!).',
		'tables_select.details' => 'This determines which tables - in addition to those selected in the "Tables (modify)" box - may be viewed and listed for the user. He is thus not able to <em>edit</em> the table - only select the records and view the content.
This list is not so very important. It\'s a pretty rare situation that a user may select tables but not modify them.',
		'_tables_select.seeAlso' => 'be_groups:tables_modify,
be_groups:inc_access_lists',
		'non_exclude_fields.description' => 'Certain table fields are not available by default. Those fields can be explicitly enabled for the group members here.',
		'non_exclude_fields.details' => '"Allowed excludefields" allows you to detail the permissions granted to tables. By default all these fields are not available to users but must be specifically enabled by being selected here.
One application of this is that pages are usually hidden by default and that the hidden field is not available for a user unless he has been granted access by this list of "Allowed excludefields". So the user may create a new page, but cannot un-hide the page. Unless of course he has been assigned the "Page: Hidden" exclude field through one of his member groups.
Of course it does not make any sense to add fields from tables which are not included in the list of table allowed to be modified.',
		'_non_exclude_fields.seeAlso' => 'be_groups:inc_access_lists',
		'hidden.description' => 'Disables a user group.',
		'hidden.details' => 'If you disable a user group all user which are members of the group will in effect not inherit any properties this group may have given them.',
		'lockToDomain.description' => 'Enter the host name from which the user is forced to login.',
		'lockToDomain.details' => 'A TYPO3 system may have multiple domains pointing to it. Therefore this option secures that users can login only from a certain host name.',
		'_lockToDomain.seeAlso' => 'be_users:lockToDomain,
fe_users:lockToDomain,
fe_groups:lockToDomain',
		'groupMods.description' => 'Select available backend modules for the group members.',
		'groupMods.details' => 'This determines which \'menu items\' are available for the group members.
This list of modules is added to any modules selected in other member groups of a user as well as the corresponding field of the user himself.',
		'_groupMods.seeAlso' => 'be_users:userMods,
be_groups:inc_access_lists',
		'inc_access_lists.description' => 'Select whether Page type, Table, Module and Allowed excludefield access lists are enabled for this group.',
		'_inc_access_lists.seeAlso' => 'be_groups:pagetypes_select,
be_groups:tables_modify,
be_groups:tables_select,
be_groups:groupMods,
be_groups:non_exclude_fields
',
		'description.description' => 'Enter a short description of the user group, what it is for and who should be members. This is for internal use only.',
		'_description.seeAlso' => 'fe_groups:description',
		'TSconfig.description' => 'Additional configuration through TypoScript style values (Advanced).',
		'TSconfig.syntax' => 'TypoScript style without conditions and constants.',
		'_TSconfig.seeAlso' => 'be_users:TSconfig
fe_users:TSconfig
fe_groups:TSconfig
pages:TSconfig',
		'hide_in_lists.description' => 'This option will prevent the user group from showing up in lists, where user groups are selected.',
		'hide_in_lists.details' => 'This will affect the list of user groups in the Task Center To-Do and Messages parts as well as the Web>Access module.
The option is extremely useful if you have general user groups defining some global properties which all your users are members of. Then you would probably not like all those users to \'see\' each other through the membership of this group, for instance sending messages or To-Dos to each other. And this is what is option will prevent.',
		'subgroup.description' => 'Select backend user groups which are automatically included for members of this group.',
		'subgroup.details' => 'The properties or subgroups are added to the properties of this groups and basically they will simply be added to the list of member groups of any user which is a member of this group.
This feature provides a great way to create \'Supervisor\' user groups.',
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
		'.description' => 'Ceci est l\'interface BE d\'administration des groupes utilisateurs disponible pour les utilisateurs BE: ici sont d�termin�es les permissions pour les utilisateurs BE',
		'title.description' => 'Nom du groupe utilisateur Backend',
		'db_mountpoints.description' => 'Assigne le point de d�part de l\'arborescence de pages de l\'utilisateur',
		'db_mountpoints.details' => 'L\'arborescence de pages vue dans les sous-modules web en naviguant doit avoir des points d\'entr�e d�finis. Ici vous devriez ins�rer une ou plusieurs r�f�rences � des pages qui repr�senteront de nouvelles pages racine dans l\'arborescence. Ceci est appel� un \'point de montage de base de donn�es\' (DB mounts, faisant r�f�rence � la notion de point de montage Unix)
Les DB mounts peuvent h�rit�s des utilisateurs qui sont membres de ce groupe. Ceci d�pend de la fa�on dont l\'utilisateur est configur�, s\'il doit inclure les DB mounts sp�cifi�s dans son (ses) groupes. Cependant il est recommand� d\'utiliser les groupes utilisateures comme ceci pour configurer les montages, surtout s\'ils doivent �tre partag�s par un grand nombre d\'utilisateurs',
		'file_mountpoints.description' => 'Assigne des points de d�part pour l\'arborescence de fichiers',
	),
	'es' => Array (
		'.description' => 'Este es el administrador de grupos de usuarios del backend disponible para los usuarios del Backend. Dichos grupos determinan los permisos para los usuarios del Backend.',
		'title.description' => 'Nombre del grupo de usuarios del Backend',
		'db_mountpoints.description' => 'Asigna puntos de entrada para el �rbol de p�ginas de los usuarios',
		'db_mountpoints.details' => 'El �rbol de p�ginas usado por todos mis subm�dulos Web para navegar debe tener algunos puntos de entrada definidos. Aqu� deber�as insertar una o m�s referencias a una p�gina que representar� una nueva p�gina ra�z para el �rbol de p�ginas. Esto es conocido como un �Punto de montaje de base de datos�.
Los Puntos de Montaje de BBDD pueden ser heredados por los usuarios miembros de este grupo. Esto depende de si el usuario est� configurado para incluir los puntos de montaje establecidos en los grupos de usuarios a los que pertenece. De cualquier manera, es recomendable utilizar grupos de usuarios para configurar dichos puntos de montaje, especialmente si deben ser compartidos por varios usuarios.',
		'file_mountpoints.description' => 'Asigna puntos de entrada para el �rbol de carpetas de ficheros.',
		'file_mountpoints.details' => 'El �rbol de carpetas de ficheros es utilizado por todos los subm�dulos de �Fichero� para navegar entre las carpetas de servidor web.
Como ocurre con los puntos de montaje de BBDD, los puntos de montaje de ficheros pueden ser heredados por los usuarios que son miembros de este grupo.',
		'pagetypes_select.description' => 'Selecciona qu� "Tipos" de p�ginas pueden utilizar los miembros del grupo.',
		'pagetypes_select.details' => 'Esta opci�n limita el n�mero de opciones v�lidas para el usuario cuando �ste va a seleccionar un tipo de p�gina.',
		'tables_modify.description' => 'Selecciona qu� tablas pueden modificar los miembros.',
		'tables_modify.details' => 'Un parte importante al establecer permisos es definir qu� tablas de la base de datos puede modificar un usuario.
Las tablas que se han seleccionado para modificaci�n autom�ticamente son seleccionadas para visualizaci�n, por lo que no es necesario especificarlas tambi�n en el cuadro �Tablas (Visualizaci�n)�.

<strong>Nota:</strong> Esta lista se acumula con las que existen en otros grupos de los que es miembro el usuario.',
		'tables_select.description' => 'Seleciona qu� tablas puede ver el usuario en las listas de registros (no es necesario especificar aqu� las tablas para modificaci�n).',
		'tables_select.details' => 'Esto determina qu� tablas � adem�s de las seleccionadas en el cuadro �Tablas (modificar)� - deben ser visibles y listadas por el usuario. Por tanto �l no puede <em>editar</em> la tabla, sino tan s�lo seleccionar los registros y ver el contenido.
Esta lista no es demasiado importante. Es una situaci�n bastante extra�a el que un usuario pueda ver unas tablas pero no modificarlas.',
		'non_exclude_fields.description' => 'Algunos campos de las tablas no est�n disponibles por defecto. Dichos campor pueden ser activados expl�citamente para los miembros del grupo aqu�.',
		'non_exclude_fields.details' => '�Campos permitidos� permite detallar los permisos asignados a las tablas. Por defecto todos esos campos no est�n disponibles a los usuarios y deben ser activados espec�ficamente seleccion�ndolos aqu�.
Una aplicaci�n de esto es que las p�ginas est�n normalmente ocultas por defecto y el campo �Ocultar� no est� disponible para los usuarios a no ser que se active expl�citamente en esta lista. As�, el usuario puede crear una p�gina nueva pero no la puede dejar visible. A no ser por supuesto que tenga seleccionado el campo �P�gina: Ocultar� en uno de los grupos de los que es miembro.
Por supuesto no tiene sentido a�adir campos de tablas que no est�n en la lista de tablas con permiso para modificar.',
		'hidden.description' => 'Desactiva un grupo de usuarios.',
		'hidden.details' => 'Si desactivas un grupo de usuarios, todos los usuarios que sean miembros del grupo no heredar�n ninguna de las propiedades que el grupo les ofec�a.',
		'lockToDomain.description' => 'Introduce el nombre del equipo desde el cual el usuario est� forzado a autentificarse.',
		'lockToDomain.details' => 'Un sistema TYPO3 puede tener m�ltiples dominios apuntando a �l. Esta opci�n asegura que los usuarios s�lo puedan entrar desde cierto equipo.',
		'groupMods.description' => 'Selecciona los m�dulos de backend disponibles para los miembros del grupo.',
		'groupMods.details' => 'Esto determina qu� �elementos de men�� est�n disponibles para los miembros del grupo. 
Esta lista de m�dulos se suma a las de los otros grupos a los que pertenece el usuario, as� como a los seleccionados en el mismo campo del propio usuario.',
		'inc_access_lists.description' => 'Selecciona que listas de acceso de tipo de p�gina, tabla, m�dulo y campos permitidos est�n activados en este grupo.',
		'description.description' => 'Introduce una peque�a descripci�n del grupo de usuarios, para qu� se utiliza y quienes deben ser los miembros. Esto es s�lo para uso interno.',
		'TSconfig.description' => 'Configuraci�n adicional mediante valores de estilo de TypoScript (Avanzado).',
		'TSconfig.syntax' => 'Estilo de TypoScript sin condiciones ni constantes.',
		'hide_in_lists.description' => 'Esta opcion previene al grupo de usuarios de aparecer en las listas donde son seleccionados los grupos de usuarios.',
		'hide_in_lists.details' => 'Esto afectar� el listado de grupos de usuarios en en Centro de Tareas (partes de Tareas y Mensajes) y tambi�n en el m�dulo Web>Acceso.
Esta opci�n es extremadamente �til si dispones de grupos de usuarios generales que definen algunas propiedades globales de los que son miembros tus usuarios. Seguramente no quieras que todos esos usuarios �vean� a los otros ya que son miembros del mismo grupo, para por ejemplo enviar mensajes o tareas entre ellos. Y esto es lo que previene esta opci�n.',
		'subgroup.description' => 'Selecciona grupos de usuarios del backend que ser�n incluidos autom�ticamente para miembros de este grupo.',
		'subgroup.details' => 'Las propiedades o subgrupos son a�adidos a las propiedades de estos grupos y b�sicamente ser�n a�adidos a la lista de grupos miembros de cualquier usuario que sea miembro de este grupo.
Esta car�cter�stica ofrece una buena manera de crear grupos de usuarios de �Supervisores�.',
	),
	'nl' => Array (
		'.description' => 'Dit zijn de backendbeheer-gebruikersgroepen die beschikbaar zijn voor de Backendgebruikers. Deze bepalen de permissies voor de Backendgebruikers.',
		'title.description' => 'Naam van de backendgebruikersgroep',
		'db_mountpoints.description' => 'Startpunten toekennen voor de gebruikers paginaboom.',
		'db_mountpoints.details' => 'De paginaboom, gebruikt om door alle web-submodules te navigeren, dient een aantal ingangspunten gedefini�erd te hebben. Hier moeten een aantal referenties naar een pagina worden ingevoegd die een nieuwe rootpagina representeren voor de paginaboom. Dit word een \'Databasestartpunt\' genoemd.
Databasestartpunten kunnen worden ge-erfd door gebruikers die lid zijn van deze groep. De gebruiker dient dan wel zo geconfigureerd te zijn dat deze de startpunten bevat zoals bepaald in de gebruikersgroepen. Het wordt echter aanbevolen de backend gebruikersgroepen te gebruiken om de startpunten te configureren. Vooral als ze gedeeld worden door een groot aantal gebruikers.',
		'file_mountpoints.description' => 'Startpunten toekennen aan de mappenweergave.',
		'file_mountpoints.details' => 'Om de mappenweergave met alle sub-modules zichtbaar te maken moeten er startpunten ingegeven worden. Hier worden een of meer referenties aangegeven naar een pagina welke zichtbaar wordt als een beginpunt voor de mappenweergave. Dit wordt een "Database mount" genoemd. DB mounts worden door leden van een gebruikersgroep overgenomen, mits dit zo is ingesteld. Het wordt aangeraden om met gebruikersgroepen te werken, zeker als er veel gebruikers zijn.',
		'pagetypes_select.description' => 'Selecteer welke \'Type\' pagina\'s de leden van de groep mogen bepalen.',
		'pagetypes_select.details' => 'Deze optie beperkt het aantal geldige keuzes voor de gebruiker als deze een paginatype wil selecteren.',
		'tables_modify.description' => 'Selecteer welke tabellen door de leden van de groep aangepast mogen worden.',
		'tables_modify.details' => 'Een zeer belangerijke optie is welke database velden (tabellen) de gebruiker mag aanpassen. De velden die hier worden geselecteerd worden automatisch toegevoegd aan de lijst van velden (tabellen).

<strong>p.s.</strong> Bedenk wel dat de geselecteerde velden ook worden toegevoegd aan eventuele subgroepen van deze beheergroep.',
		'tables_select.description' => 'Om de boomstructuur met alle sub-modules zichtbaar te maken moeten er startpunten ingegeven worden. Hier worden een of meer referenties aangegeven naar een pagina welke zichtbaar wordt als een beginpunt voor de boomstructuur. Dit wordt een "Database mount" genoemd. DB mounts worden door leden van een gebruikersgroep overgenomen, mits dit zo is ingesteld. Het wordt aangeraden om met gebruikersgroepen te werken, zeker als er veel gebruikers zijn.',
		'tables_select.details' => 'Deze optie bepaalt welke velden - als toevoeging aan degene die reeds zijn geselecteerd (Tables (modify) in aan te passen velden - in de lijst van bestanden komen die bekeken kunnen worden.
Deze lijst is niet zo belangrijk. Het komt zelden voor dat een gebruiker wel tabellen kan selecteren, maar niet kan aanpassen.',
		'non_exclude_fields.description' => 'Bepaalde velden zijn niet standaard beschikbaar. Deze velden kunnen hier expliciet, voor groepsleden, beschikbaar gemaakt worden.',
		'non_exclude_fields.details' => '"Toegestane uitgesloten velden" geven de mogelijkheid om tot in detail permissies aan velden toe te kennen. Standaard zijn deze velden niet beschikbaar voor gebruikers, maar beschikbaar gemaakt worden door ze hier te selecteren. 
Een toepassing van dit is dat pagina\'s normaal gesproken verborgen worden en dat de verberg optie niet beschikbaar is voor de gebruiker, tenzij hier geselecteerd. Dit betekend dat de gebruiker wel een nieuwe pagina kan creeren, maar niet verbergen, tenzij deze gebruiker via de gebruikersgroep de permissie heeft om de pagina te verbergen. 
Het heeft geen zin om hier velden te selecteren als men deze niet ook heeft geselecteerd in de tabel voor aan te passen velden.',
		'hidden.description' => 'Verbergt een gebruikersgroep',
		'hidden.details' => 'Ten gevolge van het verbergen (uitschakelen) van een gebruikersgroep, zullen de leden van deze groep niet de instellingen van deze groep overerven.',
		'lockToDomain.description' => 'Geef hier op van welk domein de gebruiker MOET inloggen.',
		'lockToDomain.details' => 'Sommige TYPO3 installatie\'s hebben meerdere domeinen. Deze optie zorgt ervoor dat gebruikers alleen van een bepaald domein kunnen inloggen.',
		'groupMods.description' => 'Selecteer beschikbare backendmodules voor de groepsleden.',
		'groupMods.details' => 'Dit bepaald welke menu items beschikbaar zijn voor groepsleden. 
De lijst van menu items worden automatisch aan de leden van de groep toegevoegt.',
		'inc_access_lists.description' => 'Selecteer hier welke pagina types, tabellen, modules zichtbaar zijn voor deze groep',
		'description.description' => 'Geef een korte beschrijving van de gebruikers groep, wat voor soort groep is het en wie er leden zouden moeten zijn. Dit is alleen voor intern gebruik.',
		'TSconfig.description' => 'Additionele configuratie d.m.v typoscript.',
		'TSconfig.syntax' => 'Typoscript zonder condities en constantes',
		'hide_in_lists.description' => 'Deze optie voorkomt dat gebruikersgroepen verschijnen in lijsten, waar men gebruikersgroepen kan selecteren.',
		'hide_in_lists.details' => 'Dit heeft gevolgen voor de lijst van gebruikersgroepen in het taakcentrum, bij to-do en de berichten, en in de Web>toegang module. 
Deze optie is erg handig als er algemene gebruikersgroepen zijn met globale instellingen waar alle gebruikers lid van zijn. Dit voorkomt dat men elkaar kan waarnemen als lid van een groep en men elkaar berichten en to-do kan sturen.',
		'subgroup.description' => 'Selecteer de beheergroepen die als leden tot deze groep behoren.',
		'subgroup.details' => 'De eigenschappen van de subgroepen worden toegevoegd aan de eigenschappen van deze groep, waardoor elk lid van deze groep alle eigenschappen van de groep en de subgroep heeft.
Deze feature is ideaal om een \'Supervisor\' gebruikersgroep aan te maken.',
	),
	'cz' => Array (
	),
	'pl' => Array (
	),
	'si' => Array (
	),
	'fi' => Array (
		'.description' => 'T�m� on taustan hallinta k�ytett�viss� oleville Taustak�ytt�jien (BE) k�ytt�j�ryhmille. N�m� ryhm�t m��rittelev�t k�ytt�oikeudet Taustak�ytt�jille (BE).',
		'title.description' => 'Taustak�ytt�jien ryhm�n nimi.',
		'db_mountpoints.description' => 'M��rittele aloituskohta k�ytt�jien sivurakenteelle.',
		'db_mountpoints.details' => 'Sivujen puurakenteeseen, jota WEB-aliohjelmat k�ytt�v�t, tulee m��ritell� joitakin liitynt� pisteit�. T�ss� lis��t yhden tai useamman referenssin sivulle jotka edustavat sivuston rakenteen uutta juurta (alkupistett�).
T�t� kutsutaan \'Tietokannan asetukseksi" ("Database mount").
Tietokanta asetukset periytyv�t k�ytt�j�lle silt� k�ytt�j�ryhm�lt� jonka j�sen h�n on. T�m� ei riipu onko k�ytt�j�lle konfiguroitu k�ytt�j�ryhm�n sis�lt�m�t asetukset. On kuitenkin suositeltavaa k�ytt�� t�m�nkaltaisia k�ytt�j�ryhmi� asetusten konfiguroimiseksi. Erityisesti jos n�it� jaetaan useiden k�ytt�jien kesken.',
		'file_mountpoints.description' => 'M��rittele aloituskohta tiedostohakemistojen rakenteelle.',
		'file_mountpoints.details' => 'Tiedostohakemistoa k�ytt�v�t kaikki Tiedosto-aliohjelmat siirtyess��n palvelimen tiedostohakemistoissa.
Huomaa, ett� kuten \'DB asetuksissa\' tiedostohakemistojen k�ytt�oikeudet k�ytt�jille periytyv�t niist� k�ytt�j�ryhmist� joiden j�seni� k�ytt�j�t ovat.',
		'pagetypes_select.description' => 'Valitse mihin sivutyyppeihin k�ytt�jill� on oikeus.',
		'pagetypes_select.details' => 'T�m� valinta rajoittaa valintaehtojen lukum��r�� k�ytt�jille kun he valitsevat sivun tyyppi�.',
		'tables_modify.description' => 'Valitse mihin tauluihin k�ytt�jill� on muutosoikeus.',
		'tables_modify.details' => 'Asetusten asettamisen t�rke� osa on kuinka m��ritell��n k�ytt�j�lle sallittujen tietokannan taulujen muutosoikeus.
Taulujen muutosoikeus asettaa oikeudet my�s taulun valinnann eik� Sinun tarvitse asettaa tauluja t�h�n "Taulut (listaus)" laatikkoon.

<strong>Huomaa</strong> ett� t�m� lista lis�� valitut tiedot my�s k�ytt�j�n muihin k�ytt�j�ryhmiin.',
		'tables_select.description' => 'Valitse mitk� taulut k�ytt�j�t voivat n�hd� tietolistoilla (\'muokkaa\' tauluja ei tarvitse lis�t� uudelleen t�ss�!).',
		'tables_select.details' => 'T�m� m��rittelee mit� tauluja - niiden lis�ksi jotka olet valinnut "Taulut (muokkaa) laatikossa" - k�ytt�j� n�kee. K�ytt�j� ei siisvoi <em>muokata</em> taulua - ainoastaan valita tietoja ja katsoa sis�lt��.
T�m� lista ei siis ole kovin t�rke�. On perin harvinaista ett� k�ytt�j� voi valita taulun muttei muuttaa sen sis�lt��.',
		'non_exclude_fields.description' => 'Er��t taulujen tiedot eiv�t ole oletusarvoisesti k�ytett�viss�. Nuo tiedot voidaan eksplisiittisesti saattaa voimaan ryhm�n j�senille t�ss�.',
		'non_exclude_fields.details' => '"Sallitut suljetut tiedot" antavat Sinullemahdollisuuden m��ritell� yksityiskohtasia oikeuksia tauluille. Oletusarvoisesti eiv�tmitk��n n�ist� tiedoista ole sallittuja k�ytt�jille vaan niille on erityisesti annettava oikeudet valitsemalla t�st�.
Esimerkki, sivut ovat oletuksena piilotettuja ja piilotettu kentt� ei ole k�ytt�j�n saavutettavissa ilman ett� h�nelle on annettu oikeuksia t�ll� "Sallitut suljetut tiedot" listalla. Joten k�ytt�j� voi luoda uuden sivun muttei voi piilottaa sivua. T�m� tietenkin jos k�ytt�j�lle ei ole annettu oikeuksia "Sivu:Piilotettu" ("Page:Hidden") suljettu tietoon jonkin h�nen k�ytt�j�ryhm�ns� kautta.
Ei ole kuitenkaan mielt�� antaa k�ytt�j�lle oikeuksia sellaisiin tietoihin eri tauluista johon h�nell� ei ole muokkausoikeuksia.',
		'hidden.description' => 'Poista k�ytt�j�ryhm�n voimassaolo.',
		'hidden.details' => 'Jos poistat voimassaolon k�ytt�j�ryhm�lt�',
		'lockToDomain.description' => 'Anna domainin nimi mihin k�ytt�j� on pakoitettu sis��nkirjoittautumaan.',
		'lockToDomain.details' => 'Typo3 j�rjestelm�ss� voi olla useita domaineja. Siksi t�m� vaihtoehto varmistaa ett� k�ytt�j�t p��sev�t vain heille tarkoittuihin domaineihin.',
		'groupMods.description' => 'Valitse k�ytett�viss� olevat tausta-aliohjelmat ryhm�n k�ytt�jille.',
		'groupMods.details' => 'T�m� m��rittelee mitk� \'valikko osat\' ovat k�ytett�viss� ryhm�lle.
T�m� aliohjelma lista lis�t��n kaikkiin muihinkin k�ytt�j�n ryhmiin kuin my�s vastaavaan tietoon k�ytt�j�lle itselleen.',
		'inc_access_lists.description' => 'Valitse mitk� Sivu tyypit (Page type), Taulut (Table), Aliohjelmat (Module) ja Sallitut estetyt kent�t (Allowed excludefields) ovat sallittuja t�lle k�ytt�j�ryhm�lle.',
		'description.description' => 'Anna lyhyt kuvaus k�ytt�j�ryhm�st�, miksi se on olemassa ja mink�laisia k�ytt�ji� siihen kuuluu. T�m� tieto on vain sis�iseen k�ytt��n.',
		'TSconfig.description' => 'Lis�asetukset k�ytt�en TypoScript-tyylitietoja (Laajennettu eli Advanced).',
		'TSconfig.syntax' => 'TypoScript-tyyli ilman ehtoja (conditions) ja vakioita (constants).',
		'hide_in_lists.description' => 'T�m� valinta est�� k�ytt�j�ryhm�� n�kym�st� listoilla kun k�ytt�j�ryhmi� valitaan.',
		'hide_in_lists.details' => 'T�m� vaikuttaa k�ytt�j�ryhm�listalle Toimanta Keskuksen To-Do ja Viesti osiin kuin my�s Web>Oikeudet aliohjelmaan.
Vaihtoehto on erityisen hy�dyllinen jos Sinulla on yleisi� k�ytt�j�ryhmi� jotka tarvitsevat ylesi� ominaisuuksia. 
Jos et esimerkiksi halua t�m�n ryhm�n l�hett�v�n viestej� toisilleen tai et halua heid�n n�kev�n toistensa To-Do listaa on t�m� vaihtoehto mit� tarvitset.',
		'subgroup.description' => 'Valitse taustak�ytt�j�ryhm�, joka automaattisesti lis�t��n t�m�n ryhm�n j�senille.',
		'subgroup.details' => 'Ominaisuudet ja aliryhm�t lis�t��n t�m�n ryhm�n ominaisuuksiin. Periaatteessa ne yksinkertaisesti lis�t��n kaikkien kaikille ryhm�n j�senille.
T�m� mahdollistaa helpon tavan luoda \'Supervisor\' k�ytt�j�ryhm�n.',
	),
	'tr' => Array (
	),
	'se' => Array (
		'.description' => 'Deth�r �r backend-administrationens anv�ndargrupper som BE-anv�ndare kan anv�nda. Dessa begr�nsar BE-anv�ndarnas r�ttigheter.',
		'title.description' => 'Backend-anv�ndargruppens namn',
		'db_mountpoints.description' => 'Best�m startpunkter f�r anv�ndarnas sidtr�d.',
		'db_mountpoints.details' => 'The page tree used my all Web-submodules to navigate must have some points-of-entry defined. Here you should insert one or more references to a page which will represent a new root page for the page tree. This is called a \'Database mount\'.
DB mounts may be inherited by the users which are members of this group. This does depend on whether the user is configured to include the mounts set in the member groups. However it\'s recommended to use backend user groups like this to configure mounts. Especially if the need to be shared amoung many users.',
		'file_mountpoints.description' => 'Best�m startpunkter f�r filhanteringstr�det.',
		'file_mountpoints.details' => 'The file folder tree is used by all File-submodules to navigate between the file folders on the webserver.
Notice as with \'DB mounts\' the file folder mounts may be inherited by the users which are members of this group.',
		'pagetypes_select.description' => 'V�lj vilka "Typer" av sidor som medlemmarna kan anv�nda',
		'pagetypes_select.details' => 'Denna option begr�nsar vilka sidor en anv�ndare kan ta i bruk.',
		'tables_modify.description' => 'V�lj vilka tabeller en anv�ndare kan �ndra.',
		'tables_modify.details' => 'An important part of setting permissions is to define which database tables a user is allowed to modify. 
Tables allowed for modification is automatically also allowed for selection and thus you don\'t need to set tables entered here in the "Tables (listing)" box.

<strong>Notice</strong> that this list adds to the fields selected in other member groups of a user.',
		'tables_select.description' => 'V�lj vilka tabeller anv�ndarna kan se i listan (\'�ndra\' tabellerna beh�ver inte fyllas i h�r ocks�!).',
		'tables_select.details' => 'This determines which tables - in addition to those selected in the "Tables (modify)" box - may be viewed and listed for the user. He is thus not able to <em>edit</em> the table - only select the records and view the content.
This list is not so very important. It\'s a pretty rare situation that a user may select tables but not modify them.',
		'non_exclude_fields.description' => 'Vissa tabellf�lt �r som standard sp�rrade. Dessa f�lt kan h�r �ppnas f�r gruppens medlemmar.',
		'non_exclude_fields.details' => '"Allowed excludefields" allows you to detail the permissions granted to tables. By default all these fields are not available to users but must be specifically enabled by being selected here.
One application of this is that pages are usually hidden by default and that the hidden field is not available for a user unless he has been granted access by this list of "Allowed excludefields". So the user may create a new page, but cannot un-hide the page. Unless of course he has been assigned the "Page: Hidden" exclude field through one of his member groups.
Of course it does not make any sense to add fields from tables which are not included in the list of table allowed to be modified.',
		'hidden.description' => 'Sp�rra en anv�ndargrupp.',
		'hidden.details' => 'Om du sp�rrar en anv�ndargrupp kommer  de egenskaper, som du st�llt in f�r alla medlemmar i gruppen att begr�nsas.',
		'lockToDomain.description' => 'Fyll i fr�n vilken v�rddator anv�ndaren m�ste logga in.',
		'lockToDomain.details' => 'Ett TYPO3-system kan ha m�nga domain under sig. Denna option s�kerst�ller att anv�ndarna kan logga in endast fr�n en viss v�rddator.',
		'groupMods.description' => 'V�lj tillbudsst�ende moduler f�r gruppens medlemmar',
		'groupMods.details' => 'This determines which \'menu items\' are available for the group members.
This list of modules is added to any modules selected in other member groups of a user as well as the corresponding field of the user himself.',
		'inc_access_lists.description' => 'V�lj om denna grupp skall kunna anv�nda Sidtyp, Tabell, Modul och Godk�nda f�lt.',
		'description.description' => 'Fyll i en kort f�rklaring f�r anv�ndargruppen, gruppens uppgift och vilka medlemmarna �r. Detta �r endast f�r internt bruk.',
		'TSconfig.description' => 'Till�ggskonfigurering med TypoScript stilv�rden (avancerad).',
		'TSconfig.syntax' => 'TypoScript stilar utan villkor och konstanter',
		'hide_in_lists.description' => 'Denna option f�rebygger att en anv�ndargrupp inte visas i listorna d�r anv�ndargrupper v�ljs.',
		'hide_in_lists.details' => 'This will affect the list of user groups in the Task Center To-Do and Messages parts as well as the Web>Access module.
The option is extremely useful if you have general user groups defining some global properties which all your users are members of. Then you would probably not like all those users to \'see\' each other through the membership of this group, for instance sending messages or To-Dos to each other. And this is what is option will prevent.',
		'subgroup.description' => 'V�lj de backend-anv�ndargrupper som automatiskt ges �t medlemmar i denna grupp.',
		'subgroup.details' => 'The properties or subgroups are added to the properties of this groups and basically they will simply be added to the list of member groups of any user which is a member of this group.
This feature provides a great way to create \'Supervisor\' user groups.',
	),
	'pt' => Array (
	),
	'ru' => Array (
		'.description' => '������ ���������� �������������, ��������� ��� ������������� �������. �������� � ������� ���������� ����� ������������� �������.',
		'title.description' => '�������� ������ ������������',
		'db_mountpoints.description' => '������� �������� ����� ��� ������ �������, �������� ��������������.',
	),
	'ro' => Array (
	),
	'ch' => Array (
		'.description' => '���Ǻ�˹����û���,�Ժ���û���Ч.����Ϊ����û�ȷ��Ȩ��.',
		'title.description' => '����û��������',
		'db_mountpoints.description' => 'δ�û�ҳ�������俪ʼ��.',
		'db_mountpoints.details' => 'ҳ����ʹ�����е�վ����ģ����ж�λ,
�����Ѷ�����һЩ�����.
�˴���Ӧ��Ϊһ��ҳ�����һ���Ͷ���ο�,
��ҳ�潫Ϊҳ������ʾһ���µĸ�ҳ��.�ⱻ
��Ϊ\'���ݿ�mount\'.
DB mounts���Կ��Դ���Ϊ���Ա���û������̳�.
��ȡ�����ڳ�Ա�����û��Ƿ�����Ϊ����mounts set.
������ν���ʹ�ú���û���������mounts.�ر��������
�û�֮���й�������ʱ.',
		'file_mountpoints.description' => 'Ϊ�ļ�Ŀ¼�����俪ʼ��.',
		'file_mountpoints.details' => '���е��ļ���ģ�����ļ�Ŀ¼����վ��������ϵ��ļ�Ŀ¼֮����ж�λ.
����\'DB mounts\'���ļ�Ŀ¼mounts�����Ǵ���Ϊ���Ա���û�����̳�
�˸�����.',
		'pagetypes_select.description' => 'ѡ���Ա�������õ�ҳ������.',
		'pagetypes_select.details' => '�Խ�ѡ��ҳ�����͵��û���ѡ����������Чѡ�������.',
		'tables_modify.description' => 'ѡ���Ա�����޸ĵı��.',
		'tables_modify.details' => '����Ȩ�޵�һ����Ҫ�����Ƕ�����Щ���ݿ��������û��޸�.
�����޸ĵı��Ҳͬ���Զ�����ѡ��,���������Ҫ�ڴ˴�"���(�б�)"
����������.

<strong>ע��</strong>���б���ӵ����û�����һ����Ա������ѡ��
������.',
		'tables_select.description' => 'ѡ���Ա�ڼ�¼�б��п���Ҫ�鿴�ı��(\'�޸�\'�����Ҫ�ڴ˴���������!)',
		'tables_select.details' => '���������Щ��� - ������"���(�޸�)"������ѡ��ı��֮�� - ���ܱ�
�û��鿴���г��ı��. ����������<em>�༭</em>��� - ֻ��ѡ��
��¼�Ͳ鿴����.
���б��Ƿǳ���Ҫ.һ�㲻̫������û�ѡ���񵫲��޸����ǵ����.',
		'non_exclude_fields.description' => 'ĳЩ�������ȱʡ���������Ч��.��Щ���ڴ˶������Ա����.',
		'non_exclude_fields.details' => '"����excludefields"������Ϊ�����ϸָ��׼���Ȩ��.ȱʡ��������е���Щ
������û��ǲ����õ�,������ͨ���ڴ˴�ѡ����ָ��Ϊ����.
һ��Ӧ��ʵ��Ϊͨ��ҳ����ȱʡ���Ǳ����ص�,���ұ����ص�ҳ������û�
�ǲ����õ�,�����������б�"����excludefields"׼�����. ����û����Դ���һ��
�µ�ҳ��,�����ܲ�����ҳ��.��Ȼ�������Ѿ�ͨ�����ĳ�Ա���е�һ���鱻
������"ҳ��:����"������������.
��Ȼ,����Щ�������������޸ĵı���б��еı�������Ҳû���κ�����.',
		'hidden.description' => '��ֹһ���û���.',
		'hidden.details' => '�������ֹ��һ���û���,��ô����������û������ܼ̳и����������ǵ��κ�����.',
		'lockToDomain.description' => '�����û���Ҫ���¼����������.',
		'lockToDomain.details' => 'һ��TYPO3ϵͳ�����ж����ָ����.��˸�ѡ�֤�û�ֻ���Դ�ĳһ���������Ƶ�¼.',
		'groupMods.description' => 'Ϊ���Աѡ����Ч�ĺ��ģ��.',
		'groupMods.details' => '���������Щ\'�˵���\'�������Ա����.
��ģ���б���ӵ��κ�һ���û���������Ա������ѡ��ģ���Լ��û��Լ�
��ص���.',
		'inc_access_lists.description' => 'ѡ��ҳ������,���,ģ�������excludefields�����б���ڴ����Ƿ����.',
		'description.description' => '����һ���û���ļ������,����Ŀ�ĺ����Ա. ��ֻ���ڲ�ʹ��.',
		'TSconfig.description' => 'ͨ��TypoScript��ʽֵ(�߼�)�ĸ�������.',
		'TSconfig.syntax' => 'TypoScript��ʽ���������ͳ���.',
		'hide_in_lists.description' => '��ѡ���ֹ�û�����ʾ�ڱ�ѡ�е��û����б���.',
		'hide_in_lists.details' => '�⽫Ӱ�쵽To-Do���������ڵ��û����б����Ϣ�����Լ�վ��>����ģ��.
������ж�����һЩȫ�����Ե�һ���û���, ���������û����ǳ�Ա, ��ѡ
��ǳ�����.Ȼ������ϣ�����е���Щ�û�ͨ������ĳ�Ա��ϵ\'����\'����
��Ա,���緢����Ϣ�������������.����Ǵ�ѡ����Ҫ��ֹ��.',
		'subgroup.description' => 'ѡ���Զ������ڸ����Ա�еĺ���û���.',
		'subgroup.details' => '���Ժ����鱻��ӵ������������,���һ��������ǽ�����ȫ����ӵ���Ϊ
�����Ա���κ��û��ĳ�Ա���б���.
�������ṩ��һ���ܺõķ���������\'����Ա\'�û���.',
	),
	'sk' => Array (
	),
	'lt' => Array (
	),
	'is' => Array (
	),
	'hr' => Array (
		'.description' => 'Ovo je pozadinska administracija korisni�kih grupa dostupna pozadinskim korisnicima. Ovdje se odre�uju dozvole za pozadinske korisnike.',
		'title.description' => 'Naziv grupe pozadinskih korisnika',
		'db_mountpoints.description' => 'Pridru�i po�etnu to�ku stabla stranica korisnika.',
		'db_mountpoints.details' => 'Stablo stranica koje koriste svi podmoduli unutar Web navigacije mora imati definiranu to�ku ulaska. Ovdje mo�ete unjeti jednu ili vi�e referenci na stranicu koja �e predstvljati novu po�etnu stranicu stabla. To se naziva \'Database mount\' (DB poveznica).
DB poveznica mo�e biti naslije�ena od korisnika koji je �lan grupe. Ovo zavisi od toga da li je korisnik konfiguriran tako da uklju�uje svoje poveznice u grupu �iji je �lan. Preporu�ljivo je koristiti pozadinske korisni�ke grupe sli�ne ovoj za konfiguraciu poveznica, posebno ako je trebate dijeliti izme�u mnogo korisnika.',
		'file_mountpoints.description' => 'Pridru�i po�etnu to�ku stabla pretinaca.',
		'file_mountpoints.details' => 'Stablo pretinaca koristi se od svih podmodula unutar menija \'Datoteka\' radi navigacije izme�u pretinaca web sjedi�ta. Napomenimo da sli�no kao i kod \'DB povezince\' (DB mount) povezinca pretinaca mo�e biti naslije�ena od korsinika koji je �lan grupe.',
		'pagetypes_select.description' => 'Selektirajte koji tip stranice �lanovi grupe mogu postaviti.',
		'pagetypes_select.details' => 'Ova opcija ograni�ava broj izbora koji korisnik mo�e odabrati prilikom selektiranja tipa stranice.',
		'tables_modify.description' => 'Selektirajte koje tablice �lanovi grupe mogu modificirati.',
		'tables_modify.details' => 'Va�an dio postavljanja dozvola predstavlja definiranja tablica baze koje korsinici mgu mijenjati. Tablice nad kojima je omogu�eno mijenjanje tako�er je automatski omogu�ena i selekcija i tako da nemate potrebu za postavljanjem tablica unutar "Tables (popis)" okvira.

<strong>Napomena:</strong>',
		'tables_select.description' => 'Selektirajte koje tablice �lanovi grupe mogu vidjeti u popisu (tablice nad kojima je omogu�eno modificiranje ne moraju ponovo biti une�ene ovdje).',
		'tables_select.details' => 'Ovdje definirate koje tablice - u dodatku onih selektiranih u okviru "Tables (modify)" - mogu biti dodane na popis tablica koje korisnik mo�e pregledavati. Korisnik nije u mogu�nosti <em>editirati</em> tablice ve� samo selektirati zapis i pregledati njegov sadr�aj.
Ovaj popis nije pretjerano va�an. Prili�no su rijetke situacije u kojima korisnik mo�e selektirati tablice ali ih ne mo�e i mijenjati.',
		'non_exclude_fields.description' => 'Odre�ena polja tablice po�etno nisu dostupna. Ta polja ovdje trebaju biti eksplicitno omogu�ena �lanovima grupe.',
		'non_exclude_fields.details' => '"Allowed excludefields" omogu�avaju detaljnije dozvole nad dostupnim tablicama. Po�etno sva ova polja nisu dostupna korisnicima ve� moraju ovdje biti selektirana.
Jedana primjena ovog svojstva su stranice koje su obi�no po�etno definirane kao skrivene i polje koje sadr�i to svojstvo nije dostupno korisniku dokle god mu to pravo nije dano pomo�u "Allowed excludefields". Dakloe korisnik mo�e kreirati novu stranicu ali �e ona ostati skrivena dokle god on ne bude pridru�en isklju�enom polju "Page: Hidden" putm �lanstva u grupi.
Naravno nema nikakvog smisla dodavati polja tablica koje nisu uklju�ene  na popis tablica koje grupa mo�e mijenjati.',
		'hidden.description' => 'Onemogu�ava grupu korisnika',
		'hidden.details' => 'Ukoliko onemogu�ite grupu korisnika niti jedan �lan grupe ne�e naslijediti svojstva ove grupe.',
		'lockToDomain.description' => 'Unesite naziv poslu�itelja (domene) putem kojega se prisiljava korisnika za prijavu.',
		'lockToDomain.details' => 'TYPO3 sustav omogu�ava opslu�ivanje vi�e domena. Ovom opcijom osiguravate da se korisnik mo�e prijaviti na sustav samo putem zadane domene (naziva poslu�itelja - URLa).',
		'groupMods.description' => 'Selektirajte dostupne pozadinske module �lanovima grupe.',
		'groupMods.details' => 'Ova opcija odre�uje koji sadr�aj menija �e biti dostupan �lanovima grupe.
Ova lista modula biti �e dodana listi modula koje korisnik dobiva kao �lan drugih grupa kao i odgovaraju�im postavkama samog korisnika.',
		'inc_access_lists.description' => 'Odaberite jesu li tip stranice, tablica, modul i "allowed excludefield" pristupne liste omogu�ene za ovu grupu.',
		'description.description' => 'Unesite kratak opis korisni�ke grupe, koja joj je namjena i tko mo�e postati njezin �lan. Ovo je samo za internu upotrebu.',
		'TSconfig.description' => 'Dodatna konfiguracija kroz unos vrijednosti u TypoScript stilu (napredna opcija).',
		'TSconfig.syntax' => 'TypoScript stil bez uvjeta i konstanti.',
		'hide_in_lists.description' => 'Ova opcija omogu�ava skrivanje korisni�ke grupe u popisu grupa.',
		'hide_in_lists.details' => 'Ova opcija ima efekt na korisni�ke grupe unutar "Task Center To-Do" i "Messagess" dijela kao i Web>Pristup modula.
Ova opcija je izrazito korisna kada imate op�enite korisni�ke grupe koje definiraju neka globalna svojstva �iji su �lanovi svi korisnici. Tada vjerojatno ne�ete htjeti da svi korisnici vide ostale kroz �lanstvo u ovoj grupi, tako da npr. ne mogu slati poruke ili dodjeljivati zadatke jedni drugima.',
		'subgroup.description' => 'Odaberite pozadinsku grupu korisnika u koja �e automatski biti dodani �lanovi ove grupe.',
		'subgroup.details' => 'Osobine ili podgrupe se dodaju osobinama ovih grupa i u osnovi one �e jednostavno biti dodane popisu grupa �lanica bilo kojeg korisnika koji je pripadnik ovih grupa.
Ova mogu�nost pru�a sjajan na�in da se kreiraju "nadzorne" korisni�ke grupe.',
	),
	'hu' => Array (
		'.description' => 'Ez a Backend felhaszn�l�k �ltal el�rhet� Backend adminisztr�ci�s csoport. Jogosults�gokat ad meg a Backend felhaszn�l�k r�sz�re.',
		'title.description' => 'Backend felhaszn�l�csoport neve',
		'db_mountpoints.description' => 'A felhaszn�l�i oldalrendszerhez rendel kiindul� pontot.',
		'db_mountpoints.details' => 'Az �sszes, navig�l�sra haszn�lt web-almodul
oldalrendszer�nek rendelkeznie kell egy megadott bel�p�si
ponttal. Itt egy vagy t�bb hivatkoz�st kell besz�rni egy
oldalhoz, amely az oldalcsoporthoz �j kiindul� oldalt ad
meg. Ezt h�vj�k adatb�zis csatol�snak. Az adatb�zis
csatol�sok �r�kl�dhetnek a csoporthoz tartoz�
felhaszn�l�kt�l. Ez f�gg att�l, hogy a felhaszn�l�nak a
csoportban van-e jogosults�ga csatol�shoz. 
Teh�t aj�nlatos backend felhaszn�l� csoportokat alkalmazni a
csatol�sok be�ll�t�s�hoz. K�l�nosen akkor, ha sz�ks�ges a
megoszt�s sok felhaszn�l� k�z�tt.',
		'file_mountpoints.description' => 'A f�jlk�nyvt�r csoporthoz rendel kiindul� pontot.',
		'file_mountpoints.details' => 'A f�jl k�nyvt�r-rendszert az �sszes, a webszerver
f�jlk�nyvt�rai k�z�tti navig�l�sra sz�nt f�jl almodul
haszn�lja. Meg kell jegyezni, hogy az adatb�zis
csatol�sokhoz hasonl�an, a f�jlk�nyvt�r csatol�sok is
�r�kl�dnek a csoporthoz tartoz� felhaszn�l�kt�l.',
		'pagetypes_select.description' => 'V�laszd ki, hogy a csoporttagok milyen t�pus� oldalakat �ll�thatnak be.',
		'pagetypes_select.details' => 'Ez az opci� korl�tozza az �rv�nyes v�laszt�si lehet�s�gek sz�m�t, ha a felhaszn�l� az oldal t�pus�nak kiv�laszt�s�ra k�sz�l.',
		'tables_modify.description' => 'V�laszd ki, hogy a csoporttagok milyen t�bl�kat m�dos�thatnak.',
		'tables_modify.details' => 'Az enged�lybe�ll�t�sok eset�n fontos annak a megad�sa, hogy
melyik t�bl�t m�dos�thatja egy felhaszn�l�.
A m�dos�t�sra enged�lyezett t�bl�k el�rhet�ek kiv�laszt�sra
is, �gy nem sz�ks�ges az itt megadott t�bl�kat a
"T�bl�k (list�z�s)" dobozban be�ll�tani.',
		'tables_select.description' => 'V�laszd ki, hogy mely t�bl�kat l�thatj�k a tagok a list�ban (a m�dos�tand� t�bl�kat nem sz�ks�ges �jra megadni!).',
		'tables_select.details' => 'Megadja, hogy melyik t�bl�k - bele�rtve a
"T�bl�k (m�dos�t�s)" dobozban kiv�lasztottak is - l�that�k �s
list�zhat�k ki a felhaszn�l� r�sz�re. �gy nem k�pes
<em>szerkeszteni</em> a t�bl�t, csak a rekordokat
kiv�lasztani �s a tartalmukat megjelen�teni.
Ez a lista nem annyira fontos. El�g ritka az a helyzet, amikor
egy felhaszn�l� t�bl�kat v�laszthat ki de nem m�dos�thatja
azokat.',
		'non_exclude_fields.description' => 'Bizonyos t�blamez�k alap�rtelmez�sben nem el�rhet�ek. Ezek explicit m�don enged�lyezhet�ek a csoporttagok r�sz�re.',
		'non_exclude_fields.details' => 'A "mez�kiz�r�s enged�lyez�s" lehet�v� teszi a t�bl�khoz
kiosztott enged�lyek r�szletez�s�t. Alap�rtelmez�sk�nt a
felhaszn�l�k nem �rhetik el ezeket a mez�ket, de speci�lisan
el�rhet�v� tehetik itt kiv�lasztva �ket. Ennek egy
alkalmaz�sa, hogy ezek az oldalak gyakran rejtettek
alap�rtelmez�sben �s az, hogy a rejtett mez�k sem
hozz�f�rhet�ek egy felhaszn�l� sz�m�ra, hacsak nincs
jogosults�ga a hozz�f�r�shez a "mez�kiz�r�s enged�lyez�s"
alapj�n. �gy a felhaszn�l� �j oldalt hozhat l�tre, de nem rejtheti el az oldalt. Hacsak nincs
hozz�rendelve  "Oldal: rejtett"  kiz�r� mez� a tagcsoportok
egyik�n kereszt�l.
Term�szetesen ez nem �rinti a mez� hozz�ad�s�t olyan
t�bk�kb�l, amelyek nincsenek besz�rva a m�dos�t�sra
enged�lyezett t�bla list�ban.',
		'hidden.description' => 'Nem enged�lyez egy felhaszn�l�i csoportot.',
		'hidden.details' => 'Ha egy felhaszn�l�i csoport nincs enged�lyezve, a csoportnak minden tagja nem �r�kli azokat a tulajdons�gokat, amelyeket val�sz�n�leg a csoportjukb�l kifoly�lag kaptak.',
		'lockToDomain.description' => 'Add meg azt a hosztnevet, ahonnan a felhaszn�l�nak be kell jelentkeznie.',
		'lockToDomain.details' => 'A TYPO3 rendszernek t�bb r�mutat� tartom�nypontja is lehet. �gy ez az opci� biztos�tja, hogy a felhaszn�l�k csak bizonyos hosztn�vr�l jelentkezhessenek be.',
		'groupMods.description' => 'V�laszd ki az csoporttagok sz�m�ra el�rhet� backend modulokat.',
		'groupMods.details' => 'Meghat�rozza, hogy melyik men�pont �rhet� el a
felhaszn�l�csoport r�sz�re.
Ez a modullista hozz�ad�dik b�rmelyik, m�s tagcsoport �ltal
kiv�lasztottakhoz tov�bb� a megfelel� mag�nak a
felhaszn�l�nak a megfelel� mez�je.',
		'inc_access_lists.description' => 'V�laszd ki, hogy az Oldalt�pus, T�bla, Modul �s Mez�kiz�r�s enged�lyez�s list�k el�rhet�ek-e ezen csoport r�sz�re.',
		'description.description' => 'Add meg a felhaszn�l� csoport r�vid le�r�s�t, mire val� �s ki lehet tag. Csak bels� haszn�latra.',
		'TSconfig.description' => 'Kieg�sz�t� be�ll�t�sok TypoScript st�lus� �rt�keken (R�szletes).',
		'TSconfig.syntax' => 'TypoScript st�lus felt�telek �s �lland�k n�lk�l.',
		'hide_in_lists.description' => 'Ez az opci� megv�di a felhaszn�l� csoportot a megjelen�st�l a csoportkiv�laszt� list�ban.',
		'hide_in_lists.details' => 'Ez �rinteni fogja a Feladatk�zpont Teend�k �s �zenetek
r�sz�ben lev� felhaszn�l�csoportok list�j�t valamint a
Web>Hozz�f�r�s modult. Az opci� gyakran haszn�latos
ha csak �ltal�nos, n�h�ny glob�lis tulajdons�ggal b�r�
felhaszn�l�i csoportok vannak.
Val�sz�n�leg nem szeretn�nk, hogy az �sszes felhaszn�l� l�ssa
egym�st ezen csoportbeli tags�g alapj�n, p�ld�ul
�zenetk�ld�sre vagy a teend�k megoszt�s�ra egym�s k�z�tt.
Ez az, amit ez az opci� megakad�lyoz.',
		'subgroup.description' => 'V�laszd ki azon backend felhaszn�l�csoportokat, amelyek automatikusan beker�lnek ennek a csoportnak a tagjai k�z�.',
		'subgroup.details' => 'A tulajdons�gok vagy alcsoportok hozz�ad�dnak ezen csoport
tulajdons�gaihoz �s alapj�ban hozz�ad�dnak b�rmelyik
felhaszn�l� csoport list�j�hoz, amelyeknek a felhaszn�l� a
tagja.
Ez lehet�s�get ad egy \'Supervisor\' csoport l�trehoz�s�hoz.',
	),
	'gl' => Array (
	),
	'th' => Array (
	),
	'gr' => Array (
	),
	'hk' => Array (
		'.description' => '�o�O�@�ӫ�Ժ޲z���ϥΪ̸s�եi����ԨϥΪ̨ϥΡC�o�ǨM�w��ԨϥΪ̪��s���v�C',
		'title.description' => '��ԨϥΪ̸s�ժ��W��',
		'db_mountpoints.description' => '�]�w�ϥΪ̦b��Ϫ��_�l�I�C',
		'db_mountpoints.details' => '�Q�Ҧ������ƼҲթҨϥΪ�������Ϥ@�w�n���@�ǩw��F���i�J�I�C�b�o�̧A���ӦV�@�Ӻ������J�@�өΦh�Ӫ��ѷӡA�ӳo�Ӻ����|�N�������Ϥ��@�ӷs���ڭ��C�o�٬��u��Ʈw���I�v�C��Ʈw���I�|�ѳQ�Ҧ��ݩ�P�@�ϥΪ̸s�ժ��ϥΪ̩ҩ�ŧ�C�o�b�G�ϥΪ̬O�_�Q�]�w���ϥλP�s�լۦP�����I�C�M�ӡA�ڭ̫�ĳ�ϥΫ�ԨϥΪ̸s�ըӳ]�w���I�C�S�O�O�ݭn���ܦh�ϥΪ̦@�ήɡC',
		'file_mountpoints.description' => '�]�w�ɮ׸�Ƨ���Ϫ��_�l�I',
		'file_mountpoints.details' => '�Ҧ��ɮװƼҲըϥ��ɮ׸�Ƨ���Ϩӷ����������A���W���ɮ׸�Ƨ��C�d�N�A���p��Ʈw���I�@�ˡA�ɮױ��I�]�i�H�Q�Ҧ��ݩ�P�@�ϥΪ̸s�ժ��ϥΪ̩�ŧ�C',
		'pagetypes_select.description' => '��ܸs�զ����i�H�]�w�������u�����v',
		'pagetypes_select.details' => '�o�ӿﶵ�b�L�n�ǳƿ�ܤ@�Ӻ��������ɡA����ϥΪ̪����Ŀ�ܼƥ�',
		'tables_modify.description' => '��ܦ����i�H�ק墨�Ǹ�ƪ��',
		'tables_modify.details' => '�@�ӳ]�w�s���v�������n�����O�w�q�ϥΪ̥i�H�ק墨�Ǹ�ƪ��C�e�\\�ק諸��ƪ��|�P�ɦ۰ʪ��e�\\��ܡA�]���A���ݭn�]�w�b�u���]��C�^�v����J�����C

<strong>�d�N�G</strong>�o�ӦW��[�i�ϥΪ̨�L���ݪ��s�դw�諸��ؤ��C',
		'tables_select.description' => '��ܭ��i�H�b�O����C���i�H�ݨ쨺�Ǹ�ƪ��]�u�ק�v��椣�ݭn�b�o�̭��s��J�I�^',
		'tables_select.details' => '�M�w���Ǹ�ƪ� - �[�W���Ǧb�u��ƪ�]�ק�^�v���l�����ƪ� - �i�H�Q�ϥΪ̹w���M�C�X�C�L�]������<em>�ק�</em>��ƪ� - �u���ܰO���M�[�ݤ��e�C
�o�W�椣�O�D�`���n�C�o�O�@�ӻᬰ�u�������p�A�@�W�ϥΪ̥i�H��ܸ�ƪ������ק復�̡C',
		'non_exclude_fields.description' => '�Y�Ǹ�ƪ��O�w�]����ϥΪ��C�����椣�ઽ���Q�Ұʵ��s�զ����ϥ�',
		'non_exclude_fields.details' => '�u�e�\\���B�~���v�e�\\�A�ԲӪ��ᤩ��ƪ��v���C�w�]�Ҧ��o�Ǧ쳣���ѨϥΪ̨ϥΡA���O�b�o�̿�ܪ��N�|�S�O���Q�ҰʡC
�o�̪��@�����άO�����w�]�O���ê��A�ӳo���������O���ѨϥΪ̹B�Ϊ��A���D�L�z�L�u�e�\\���B�~���v�o��s�����v���A�_�h�L���i�H�ϥγo�����C�]���ϥΥH�إߺ����A���O�L�������ú����C��M�L�z�L�L���ݪ��䤤�@�Ӹs�ձo��t���u�����G���áv�B�~���ҥ~�C
�q���e�\\�ק諸��ƪ��[�J����M�ä����N�q�C',
		'hidden.description' => '�����@�ӨϥΪ̸s��',
		'hidden.details' => '���p�A�����@�ӨϥΪ̸s�աA�Ҧ��ݩ󦹤@�s�ժ��ϥΪ̳��|�Q�v�T�����ŧ���s�թҽ礩������S�ʡC',
		'lockToDomain.description' => '��J�D�����W�١A�ϥΪ̥����q���n�J',
		'lockToDomain.details' => '�@��TYPO3�t�Υi�H���h�Ӻ���ϥΡC�]���A�o�ӿﶵ�O�ҥu�i�H�q�Y�@�D���n�J',
		'groupMods.description' => '���s�զ�����ܥi�Ϊ���ԼҲ�',
		'groupMods.details' => '�M�w���@�ǡu��涵�ءv�i�Ѹs�զ����ϥΡC
�o�ӼҲժ��W��P�ɳQ�[�i�Ҧ��Q�ϥΪ̨�L�s�դ���ܪ��ҲթM�ϥΪ̦ۤv�۹諸��ؤ��C',
		'inc_access_lists.description' => '��ܺ����N�����N�ҲթM�\\�i���B�~��Ұʵ��o�Ӹs�ըϥ�',
		'description.description' => '��J�ϥΪ̸s�ժ�²�u�y�z�A��ت��M�֤H���������C�u�@�����ϥΡC',
		'TSconfig.description' => '�z�LTypoScript�κA�ƭȡ]�i���^�����[�]�w',
		'TSconfig.syntax' => '�S������M�`�Ȫ�TypoScript�κA',
		'hide_in_lists.description' => '�o�ӿﶵ�|����ϥΪ̸s�զb��ܦW�椤�X�{',
		'hide_in_lists.details' => '�o�|�v�T�u�u�@���ߡv�u�@�M��M�T�������A�P�κ���>�v���Ҳժ��ϥΪ̸s�զW��C
���p�A���@�몺�ϥΪ̸s�թw�q�A�s�դ����ϥΪ̾��骺�S�ʡA�o�ӿﶵ�O�N�D�`���ΡC�M��A�γ\\�����w�Ҧ��o�ǨϥΪ̳z�L�o�Ӹs�խ������u�ݨ�v���A�Ҧp�ǰe�T���Τu�@�M�浹���C�ӳo�N�O�o�ӿﶵ���קK���C',
		'subgroup.description' => '��ܦ۰ʦa�]�A�b�o�Ӹs�զ�������ԨϥΪ̸s��',
		'subgroup.details' => '�S�ʩM�Ƹs�ճQ�[�i�o�Ӹs�դ��A�Ӱ򥻤W�L�̷|�[�i�Ҧ����s�ժ������������s�զW�椤�C�o�ӥ\\�ണ���ܦn����k�h�إߡu�ʹ�̡v�ϥΪ̸s��',
	),
	'eu' => Array (
	),
	'bg' => Array (
		'.description' => '���� � backend ������������������ ������������� ����� �� ������������ �� Backend �������������. � ���� ����� �� ��������� ������������ �� Backend �������������.',
		'title.description' => '��� �� Backend ��������������� �����',
		'db_mountpoints.description' => '�������� �� ���������� ����� �� ��������������� �����.',
		'file_mountpoints.description' => '�������� �� ���������� ����� �� ��������� ����� �����.',
		'pagetypes_select.description' => '������������ ��� \'�����e\' �� ��������, ��������� �� ����� �� ����������.',
		'tables_modify.description' => '������������ ��� ������� ����� �� ����� ��������� �� ���������.',
	),
	'br' => Array (
		'.description' => 'Estes s�o os grupos de usu�rio do administrador dispon�veis para os usu�rios da ferramenta de administra��o. Estes grupos determinam as permiss�es para os usu�rios do Administrador.',
		'title.description' => 'Nome do grupo de usu�rio do Administrador',
		'db_mountpoints.description' => 'Definir pontos de partida para as �rvores de p�ginas dos usu�rios.',
		'db_mountpoints.details' => 'A �rvore de p�ginas, usada para navegar por todos os subm�dulos inclu�dos em "Internet", deve possuir pontos-de-entrada definidos. Aqui voc� deve inserir uma ou mais refer�ncias para uma p�gina, a qual representar� uma nova p�gina-raiz na �rvore de p�ginas.
Os pontos de partida podem ser herdados pelos usu�rios que s�o membros deste grupo. Isso vai depender se o usu�rio estiver configurado para incluir os pontos de partida atribu�dos aos membros do grupo. Entretanto, recomenda-se usar grupos de usu�rios-administradores como este para configurar os pontos de partida. Especialmente se houver necessidade de compartilh�-los entre muitos usu�rios.',
		'file_mountpoints.description' => 'Definir pontos de partida para a �rvore de pastas de arquivos.',
		'file_mountpoints.details' => 'A �rvore de pastas de arquivos � usada por todos os subm�dulos inclu�dos em "Arquivo" para navegar entre as pastas de arquivos do servidor.
Observe que, assim como os \'pontos de partida para a �rvore de p�ginas\', os pontos de partida para a �rvore de arquivos podem ser herdados pelos usu�rios membros deste grupo.',
		'pagetypes_select.description' => 'Selecionar quais \'Tipos\' de P�ginas os membros podem alterar.',
		'pagetypes_select.details' => 'Esta op��o limita o n�mero de tipos v�lidos para o usu�rio, quando este for selecionar um tipo de p�gina.',
		'tables_modify.description' => 'Selecionar quais tabelas os membros podem modificar.',
		'tables_modify.details' => 'Uma parte importante ao atribuir permiss�es � definir quais tabelas do banco de dados um usu�rio tem permiss�o para modificar.
Tabelas liberadas para modifica��o s�o automaticamente liberadas tamb�m para sele��o e portanto voc� n�o precisa incluir novamente na caixa "Tabelas (lista)" as tabelas selecionadas aqui.

<strong>Observe</strong> que esta lista se soma aos campos selecionados nos outros grupos de membros de um usu�rio.',
		'tables_select.description' => 'Selecionar quais tabelas os membros podem visualizar na lista de registros (tabelas \'modific�veis\' n�o precisam ser reinseridas aqui).',
		'tables_select.details' => 'Determina quais tabelas - al�m das selecionadas na caixa "Tabelas (modificar)" - podem ser visualizadas e listadas pelo usu�rio. Por�m, ele n�o � capaz de <em>editar</em> a tabela - apenas selecionar os registros e visualizar o conte�do.
Esta lista n�o � t�o importante. � uma das raras situa��es em que um usu�rio pode selecionar tabelas mas n�o modific�-las.',
		'non_exclude_fields.description' => 'Certos campos da tabela n�o est�o dispon�veis no modo padr�o. Esses campos podem ser explicitamente habilitados aos membros do grupo aqui.',
		'non_exclude_fields.details' => '"Habilitar campos ocultos" permite a voc� configurar detalhadamente as permiss�es de acesso �s tabelas. Por padr�o, estes campos n�o s�o disponibilizados aos usu�rios, portanto precisam ser especificamente habilitados atrav�s desta op��o.
Uma utilidade para esta op��o � que as p�ginas s�o normalmente ocultas por padr�o, e a op��o "oculta" n�o est� dispon�vel ao usu�rio a n�o ser que tenha o acesso atribu�do atrav�s da listagem de "Habilitar campos ocultos". Desta forma, o usu�rio pode criar uma p�gina, mas n�o pode torn�-la vis�vel. A n�o ser, claro, se estiver atribu�do a ele o campo "P�gina: oculta" atrav�s de um dos grupos de usu�rio.
� logico tamb�m que n�o far� sentido nenhum adicionar campos de tabelas que n�o estejam inclu�das na listagem de tabelas modific�veis.',
		'hidden.description' => 'Desativa um grupo de usu�rios.',
		'hidden.details' => 'Se voc� desabilita um grupo de usu�rios, os membros desse grupo n�o mais herdar�o quaisquer propriedades que este grupo tenha atribu�do a eles.',
		'lockToDomain.description' => 'Digite o nome de dom�nio atrav�s do qual o usu�rio dever� fazer o login.',
		'lockToDomain.details' => 'Um sistema TYPO3 pode ter v�rios dom�nios direcionados a ele. Assim, esta op��o garante que os usu�rios fa�am seu login apenas a partir de um determinado nome de dom�nio.',
		'groupMods.description' => 'Seleciona os m�dulos de administra��o disponibilizados aos membros do grupo.',
		'groupMods.details' => 'Esta op��o determina quais \'�tens de menu\' ser�o disponibilizados aos membros do grupo.
Esta lista de m�dulos se soma aos m�dulos selecionados nos outros grupos ao qual o usu�rio pertence, assim como no campo correspondente ao usu�rio em si.',
		'inc_access_lists.description' => 'Selecione se as listas de acesso Tipo de P�gina, Tabela, M�dulo e Permitir campos exclu�dos est�o dispon�veis para este grupo.',
		'description.description' => 'Digite uma breve descri��o do grupo de usu�rios, para que ele serve e quem deve ser membro. Apenas para uso interno.',
		'TSconfig.description' => 'Configura��es adicionais atrav�s de valores de estilo TypoScript (Avan�ado).',
		'TSconfig.syntax' => 'Estilo TypoScript sem condi��es e constantes.',
		'hide_in_lists.description' => 'Esta op��o previne que o grupo de usu�rio seja mostrado em listas onde outros grupos de usu�rios estejam selecionados.',
		'hide_in_lists.details' => 'Afeta a listagem de grupos de usu�rios nos m�dulos A Fazer e Mensagens, no Centro de Tarefas, assim como no m�dulo Internet>Acesso.
Esta op��o � muito �til se voc� possui grupos gen�ricos de usu�rios, com defini��es de algumas propriedades globais, dos quais todos seus usu�rios s�o membros. Assim, provavelmente voc� n�o gostaria que todos esses usu�rios \'vejam\' uns aos outros durante a participa��o no grupo, como por exemplo enviando mensagens ou A Fazer a cada usu�rio. Isto � o que esta op��o previne.',
		'subgroup.description' => 'Selecione os usu�rios-administradores que ser�o automaticamente inclu�dos como membros deste grupo.',
		'subgroup.details' => 'As propriedades dos subgrupos s�o adicionadas �s propriedades destes grupos, e basicamente estes subgrupos s�o simplesmente adicionados � listagem de grupos de usu�rios vista por qualquer membro deste grupo.
Esta caracter�stica � uma �tima forma de criar grupos de usu�rios \'Supervisores\'.',
	),
	'et' => Array (
	),
	'ar' => Array (
	),
	'he' => Array (
		'.description' => 'אלו קבוצות משתמשים של הממשק האחורי הזמינות עבור משתמשי ממשק האחורי. הם מגדירים הרשאות למשתמשי ממשק האחורי.',
		'title.description' => 'שם של קבוצת משתמשים של ממשק האחורי.',
		'db_mountpoints.description' => 'הקצה ניקודות התחלה של עץ דפים של משתמש.',
		'db_mountpoints.details' => 'עץ דפים, שמשתמשים בו כל תת-מודולים באינטרנט כדי לנווט, חובה שיהיו לו נקודות כניסה מוגדרות. כאן עליך להכניס סימוכין לדף שתייצג דף שורש חדשה בעץ דפים. זה נקרא "מוצב מאגר מידע". משתמשים בקבוצה זו יכולים לרשת מוצבי מאגר מידע. זה תלוי בהגדרה אצל המשתמש אם עליו לרשת מוצבים המוגדרים בקבוצות משתמשים אליהם הוא משתייך. בכל זאת, מומלץ להשתמש בקבוצות משתמשי ממשק אחורי בצורה הזו כדי להגדיר מוצבים. במיוחד אם יש צורך לשתף אותו בין משתמשים רבים.',
		'file_mountpoints.description' => 'הקצה ניקודות התחלה של עץ תיקיות קבצים.',
		'file_mountpoints.details' => 'כל התת-מודולים של "קובץ" משתמשים בעץ קבצים כדי לנווט בין תיקיות על השרת. נא לציין, שמשתמשים בקבוצה יכולים לרשת מוצבי קבצים, כמו מוצבי מאגר מידע.',
		'pagetypes_select.description' => 'בחר איזה "סוגים" של דפים יכולים לקבוע המשתמשים.',
		'pagetypes_select.details' => 'אפשרות זו מגבילה מספר בחירות למשתמש כאשר הוא עומד לבחור סוג דף.',
		'tables_modify.description' => 'בחר איזה טבלאות יכולים המשתמשים לערוך.',
		'tables_modify.details' => 'שלב חשוב בהגדרת הרשאות הוא לציין איזה טבלאות המשתמש יכול לערוך. טבלאות, שיש עליהם אישור עריכה - יש עליהם גם אישור בחירה אוטומטית, לכן אין צורך לציין טבלאות שציינת כאן גם ב"טבלאות(רשימה)".
<strong>שים לב,</strong> כי רשימה זו מתווספת לשדות שנבחרו עבור משתמש בקבוצות אחרות אליהם הוא משתייך.',
		'tables_select.description' => 'בחר איזה טבלאות המשתמשים יכולים לראות ברשימות רשומות (לא נדרש להכניס כאן טבלאות "ערוך" שוב)',
		'tables_select.details' => 'זה מגדיר איזו טבלאות, בנוסף לאלא שנבחרו ב-"טבלאות(ערוך)", משתמש יכול לראות. לכן הוא לא יכול <em>לערוך</em>את הטבלה - רק לבחור רשומות ולראות את התוכן.
הרשימה לא חשובה כל כך. די נדיר שמשתמש יכול לבחור טבלאות אבל לא לערוך אותם.',
		'non_exclude_fields.description' => 'שדות טבלה מסוימות לא זמינות כברירת מחדל. כאן ניתן להפוך אותם לזמינות למשתמשים בקבוצה.',
		'non_exclude_fields.details' => 'כאן ניתן לפרט הרשאות שנתת לטבלאות. כברירת מחדל, כל השדות האלא לא זמינות למשתמשים וצריך להגדיר גישה אליהם כאן. לדוגמה, אחד השימושים ברעיון שמאחורי זה - דפים חדשים נוצרים חבויים ואם למשתמש לא מוגדרת גישה לשדה "חבוי" - הוא אינו יכול לשחרר את הדף. למשתמש אחר (מבקר) מופיע השדה, ואז הוא יכול לשחרר את הדף אחרי בדיקת תוכן.',
		'hidden.description' => 'הופך קבוצת משתמשים ללא זמינה.',
		'hidden.details' => 'אם אתה הופך קבוצת משתמשים ללא זמינה - כל המשתמשים בקבוצה לא ירשו כל הגדרה מקבוצה זו כתוצאה.',
		'lockToDomain.description' => 'הכנס שם דומיין שרק ממנו משתמש יכול להכנס למערכת.',
		'lockToDomain.details' => 'מערכת TYPO3 יכולה לאפשר לדומיינים רבים להצביע אליה. לכן, אפשרות זו מבטיחה שמשתמשים יכולים להכנס רק משם דומיין מסוים.',
		'groupMods.description' => 'בחר מודולים בממשק אחורי שזמינים למשתמשים בקבוצה.',
		'groupMods.details' => 'זה קובע איזה "פריטי תפריט" זמינים למשתמשי הקבוצה. רשימה זו של מודולים מתווספת לכל המודולים שנבחרו בקבוצות משתמשים אחרות של המשתמש, כמו גם שדה שה בהגדרות של המשתמש עצמו.',
		'inc_access_lists.description' => 'בחר אם גישה לסוג דף, טבלה, מודול ושדות מיוחדות מותרות לקבוצה זו.',
		'description.description' => 'הכנס תיאור קצר של הקבוצה, מה היא ומי הם המשתמשים. זה לשימוש פנימי בלבד.',
		'TSconfig.description' => 'הגדרות נוספות דרך ערכים TypoScript (מתקדם).',
		'TSconfig.syntax' => 'בסגנון TypoScript ללא conditions ו-constants.',
		'hide_in_lists.description' => 'אפשרות זו תמנע מהקבוצה להופיע ברשימות של קבוצות משתמשים.',
		'hide_in_lists.details' => 'זה ישפיע על רשימת קבוצות משתמשים במרכז משימות ומודול אינטרנט>גישה. הבחירה הינה מאוד שימושית אם יש לכם קבוצות משתמשים כלליות, שמגדירות אפשרויות כלליות וכל המשתמשים שייכים אליהם. אז, אתם בטח לא תרצו שכל המשתמשים הללו יראו זה את זה.',
		'subgroup.description' => 'בחר קבוצות משתמשים של ממשק אחורי שנכללים אוטומטית עבור משתמשים בקבוצה זו.',
		'subgroup.details' => 'הגדרות של תת-קבוצות מתווספות להגדרות של קבוצות אלו ופשוט יתווספו לרשימת קבוצות משתמשים של משתמש ששייך אליהם. הגדרה זו נותנת דרך טובה ליצור "קבוצות מנהלים".',
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