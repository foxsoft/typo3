<?php
/**
 * TYPO3 default configuration
 *
 * TYPO3_CONF_VARS is a global array with configuration for the TYPO3 libraries
 * THESE VARIABLES MAY BE OVERRIDDEN FROM WITHIN localconf.php
 *
 * 'IM' is short for 'ImageMagick', which is an external image manipulation package available from www.imagemagick.org. Version is ABSOLUTELY preferred to be 4.2.9, but may be 5+. See the install notes for TYPO3!!
 * 'GD' is short for 'GDLib/FreeType', which are libraries that should be compiled into PHP4. GDLib <=1.3 supports GIF, while the latest version 1.8.x and 2.x supports only PNG. GDLib is available from www.boutell.com/gd/. Freetype has a link from there.
 *
 * $Id$
 * Revised for TYPO3 3.6 2/2003 by Kasper Skaarhoj
 *
 * @author	Kasper Skaarhoj <kasper@typo3.com>
 */

if (!defined ('PATH_typo3conf')) 	die ('The configuration path was not properly defined!');

$TYPO3_CONF_VARS = Array(
	'GFX' => array(		// Configuration of the image processing features in TYPO3. 'IM' and 'GD' are short for ImageMagick and  GD library respectively.
		'image_processing' => 1,				// Boolean. Enables image processing features. Disabling this means NO image processing with either GD or IM!
		'thumbnails' => 1,						// Boolean. Enables the use of thumbnails in the backend interface. Thumbnails are generated by IM/partly GD in the file typo3/thumbs.php
		'thumbnails_png' => 0,					// Bits. Bit0: If set, thumbnails from non-jpegs will be 'png', otherwise 'gif' (0=gif/1=png). Bit1: Even JPG's will be converted to png or gif (2=gif/3=png)
		'noIconProc' => 1,						// Boolean. If true, icons are never processed with overlays for hidden, starttime, endtime etc. They must be available pre-processed. If this is disabled, do so only if you have full image processing capabilities on the server for TYPO3.
		'gif_compress' => 1,					// Boolean. Enables the use of the t3lib_div::gif_compress() workaround function for compressing giffiles made with GD or IM, which probably use only RLE or no compression at all.
		'imagefile_ext' => 'gif,jpg,jpeg,tif,bmp,pcx,tga,png,pdf,ai',	// Commalist of file extensions perceived as images by TYPO3. List should be set to 'gif,png,jpeg,jpg' if IM is not available. Lowercase and no spaces between!

		'gdlib' => 1,							// Boolean. Enables the use of GD.
		'gdlib_png' => 0,						// Boolean. Enables the use of GD, with PNG only. This means that all items normally generated as gif-files will be png-files instead!
		'gdlib_2' => 0,							// String/Boolean. Set this if you are using the new GDlib 2.0.1+. If you don't set this flag and still uses GDlib2, you might encounter strange behaviours like black images etc. This feature might take effect only if ImageMagick is installed and working as well! You can also use the value "no_imagecopyresized_fix" - in that case it will NOT try to fix a known issue where "imagecopyresized" does not work correctly.

		'im' => 1,								// Boolean. Enables the use of IM.
		'im_path' => '/usr/X11R6/bin/',			// Path to the IM tools 'convert', 'combine', 'identify'. Version 4.2.9 of ImageMagick is highly recommended due to features and speed!
		'im_path_lzw' => '/usr/bin/',			// Path to the IM tool 'convert' with LZW enabled! See 'gif_compress'. If your version 4.2.9 of ImageMagick is compiled with LZW you may leave this field blank AND disable the flag 'gif_compress'! Tip: You can call LZW 'convert' with a prefix like 'myver_convert' by setting this path with it, eg. '/usr/bin/myver_' instead of just '/usr/bin/'.

		'im_version_5' => 0,					// Boolean. Set this if you're using IM 5+. If this is set, 'im_negate_mask', 'im_no_effects' and 'im_mask_temp_ext_gif' are automatically configured for use with ImageMagick version 5 +
		'im_negate_mask' => 0,					// Boolean. Indicates if the mask images should be inverted first. This depends of the ImageMagick version. Below ver. 5.1 this should be false. Above ImageMagick version 5.2+ it should be true. Just set the flag if the masks works opposite the intension!
		'im_imvMaskState' => 0,					// Boolean. If set, the 'im_negate_mask' state is inverted. This is very useful with newer versions of IM5 (at least 5.4.3+) where the 'im_version_5' setting will set 'im_negate_mask' which will eventually be wrong... Halleluja for ImageMagick - have I ever regreted using that package...
		'im_no_effects' => 0,					// Boolean. This is necessary if using ImageMagick 5+. Approved version for using effects is version 4.2.9. Effects in Imagemagick 5+ tends to render very slowly! Therefore this must be disabled in order not to perform sharpen, blurring and such. (However lately IM5 is allowed for effects again, but syntax has changed!)
		'im_v5effects' => 0,					// Integer -1,0,1. 0=disabled. -1=Do not sharpen images by default. 1=All; blur and sharpening is allowed in ImageMagick again and the 'im_no_effects' flag is cancelled. Blurring and sharpening has new syntaxes though. See class.t3lib_stdgraphic.php for details.
		'im_mask_temp_ext_gif' => 0,			// Boolean. This should be set if ImageMagick is version 5+. This is used in class tslib_cObj.php for masking images and the extension png is normally used because it's faster than gif for temporary files. But png seems not to work with some IM 5+ versions, so...
		'im_mask_temp_ext_noloss' => 'miff',	// String.	Loss-less ImageMagick extension to use for mask processing in temporary filenames. Normally 'miff' (ImageMagick's OWN format) will do fine. However at least IM 5.4.9 has proved not to be able to write to its own file format which forced me to add this option. You can try and set this to tif/png/jpg if some masking doesn't work the way it should.
		'im_noScaleUp' => 0,					// Boolean. If set, images are not being scaled up if told so (in t3lib/stdgraphics.php)
		'im_combine_filename' => 'combine',		// String. Latest ImageMagick versions has changed the name of combine to composite. Configure here if needed.
		'im_noFramePrepended' => 0,				// Boolean. If set, the the [x] frame indicator is NOT prepended to filenames in stdgraphic. Some IM5+ version didn't work at all with the typical [0]-prefix, which allow multipage pdf's and animated gif's to be scaled only for the first frame/page and that seriously cuts down rendering time. Set this flag only if your ImageMagick version cannot find the files. Notice that changing this flag causes temporary filenames to change, thus the server will begin scaling images again which were previously cached.
		'enable_typo3temp_db_tracking' => 0,	// Boolean. If set, then all files in typo3temp will be logged in a database table. In addition to being a log of the files with original filenames, it also serves to secure that the same image is not rendered simultaneously by two different processes.
		'TTFLocaleConv' => '',					// String. Enter locale conversion string used to recode input to TrueType functions. Eg. 'cp1250..UTF-8'. Works ONLY if 'recode' is enabled in PHP. Depreciated from ver. 3.6.0 of TYPO3. Set up [BE][forceCharset] as strings are automatically converted from databsae charset to UTF-8.
		'TTFdpi' => '72',						// Integer. Enter how many dpi the FreeType module uses. Freetype1 should be set to 72. Freetype2 should be set to 96 (otherwise fonts are rendered way bigger than FreeType1). This works as a global scaling factor for Freetype.
	),
	'SYS' => Array(			// System related concerning both frontend and backend.
		'sitename' => 'TYPO3',					// Name of the base-site. This title shows up in the root of the tree structure if you're an 'admin' backend user.
		'encryptionKey' => '',					// This is a "salt" used for various kinds of encryption, CRC checksums and validations. You can enter any rubbish string here but try to keep it secret. You should notice that a change to this value might invalidate temporary information, URLs etc. At least, clear all cache if you change this so any such information can be rebuild with the new key.
		'doNotCheckReferer' => 0,				// Boolean. If set, it's NOT checked numerous places that the refering host is the same as the current. This is an option you should set if you have problems with proxies not passing the HTTP_REFERER variable.
		'recursiveDomainSearch' => 0,			// Boolean. If set, the search for domain records will be done recursively by stripping parts of the host name off until a matching domain record is found.
		'devIPmask' => '192.168.*,127.0.0.1',	// Defines a list of IP addresses which will allow development-output to display. The debug() function will use this as a filter. See the function t3lib_div::cmpIP() for details on syntax. Setting this to blank value will deny all. Setting to '*' will allow all.
		'enable_DLOG' => FALSE,					// Whether the developer log is enabled. See constant "TYPO3_DLOG"
		'ddmmyy' => 'd-m-y',					// Format of Date-Month-Year - see php-function date()
		'hhmm' => 'H:i',						// Format of Hours-minutes - see php-function date()
		'loginCopyrightWarrantyProvider' => '',		// String: If you provide warranty for TYPO3 to your customers insert you (company) name here. It will appear in the login-dialog as the warranty provider. (You must also set URL below).
		'loginCopyrightWarrantyURL' => '',		// String: Add the URL where you explain the extend of the warranty you provide. This URL is displayed in the login dialog as the place where people can learn more about the conditions of your warranty. Must be set (more than 10 chars) in addition with the 'loginCopyrightWarrantyProvider' message.
		'loginCopyrightShowVersion' => 0,		// Boolean: If set, the current TYPO3 version is shown.
		'curlUse' => 0,							// Boolean: If set, try to use Curl to fetch external URLs (implemented by Arco <arco@appeltaart.mine.nu>)
		'curlProxyServer' => '',				// String: Proxyserver as http://proxy:port/.
		'curlProxyTunnel' => 0,					// Boolean: If set, use a tunneled connection through the proxy (usefull for websense etc.).
		'curlProxyUserPass' => '',				// String: Proxyserver authentication user:pass.
		'form_enctype' => 'multipart/form-data',	// String: This is the default form encoding type for most forms in TYPO3. It allows for file uploads to be in the form. However if file-upload is disabled for your PHP version even ordinary data sent with this encryption will not get to the server. So if you have file_upload disabled, you will have to change this to eg. 'application/x-www-form-urlencoded'
		'textfile_ext' => 'txt,html,htm,css,inc,php,php3,tmpl,js,sql',	// Text file extensions. Those that can be edited. php,php3 cannot be edited in webspace if they are disallowed! Notice:
		'contentTable' => '',					// This is the page-content table (Normally 'tt_content')
		'T3instID' => 'N/A',					// A unique installation ID - not used yet. The idea is that a TYPO3 installation can identify itself by this ID string to the Extension Repository on TYPO3.org so that we can keep a realistic count of serious TYPO3 installations.
		'binPath' => '', 						// String, comma seperated list: list of absolute paths where external programs should be searched for
		't3lib_cs_convMethod' => '',			// String (values: "iconv", "recode", "mbstring", default is homemade PHP-code). Defines which of these PHP-features to use for various Charset conversing functions in t3lib_cs. Will speed up charset conversion radically.
		't3lib_cs_utils' => '',					// String (values: "iconv", "recode", "mbstring", default is homemade PHP-code). Defines which of these PHP-features to use for various Charset processing functions in t3lib_cs. Will speed up charset functions radically.
	),
	'EXT' => Array (	// Options related to the Extension Management
		'noEdit' => 1,							// Boolean: If set, the Extension Manager does NOT allow extension files to be edited! (Otherwise both local and global extensions can be edited.)
		'allowGlobalInstall' => 0,				// Boolean: If set, global extensions in typo3/ext/ are allowed to be installed, updated and deleted etc.
		'allowLocalInstall' => 1,				// Boolean: If set, local extensions in typo3conf/ext/ are allowed to be installed, updated and deleted etc.
		'em_devVerUpdate' => 0,					// If set, developer versions will also appear as red - ready for upgrade
		'em_alwaysGetOOManual' => 0,			// If set, OO-manuals are always downloaded
		'em_systemInstall' => 0,				// If set, you can install extensions in the sysext/ dir. Use this to upgrade the 'cms' and 'lang' extensions.
		'em_TERurls' => array('http://ter.typo3.com/?id=t3_extrep'),

		'requiredExt' => 'cms,lang',			// String list: List of extensions which are REQUIRED and cannot be unloaded by the Extension Manager!
		'extCache' => 1,						// Int. 0,1,2: 0: ext-scripts (ext_localconf.php and ext_tables.php) are NOT cached, but included every time. 1: scripts cached to typo3conf/temp_CACHED_[sitePathHash]* (saves some milliseconds even with PHP-A), 2: scripts cached and prefix includes a hash based on the 'extList' string, 3: scripts cached to typo3conf/temp_CACHED_* (no hash included at all...)
		'extList' => 'tsconfig_help,context_help,extra_page_cm_options,rte,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,tstemplate_styler,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,phpmyadmin,aboutmodules,imagelist,setup,taskcenter,sys_notepad,taskcenter_recent,taskcenter_rootlist,info_pagetsconfig,viewpage',						// String list: List of extensions which are enabled for this install. Use the Extension Manager (EM) to manage this!
		'extConf' => array(						// Config-options for extensions, stored as serialized arrays by extension-keys. Handled automatically by the EM.
//			'--key--' => array()
		)
	),
	'BE' => Array(		// Backend Configuration.
		'unzip_path' => '',						// Path to "unzip".
		'diff_path' => 'diff',					// Path to "diff". For Windows this program can be downloaded here: http://unxutils.sourceforge.net/
		'fileadminDir' => 'fileadmin/',			// Path to the fileadmin dir. This is relative to PATH_site. (Automatically mounted for admin-users if set)
		'RTEenabled' => 1,						// Boolean. If set, the Rich Text editor will be an option in the backend. Notice that the editor must be enabled per-user and options are configurable. See admin guide.
		'RTE_imageStorageDir' => 'uploads/',	// Default storage directory for Rich Text Editor files
		'RTE_reg' => array(),					// Contains arrays of possible RTEs available (keys=extKey, values=cfg-array). Each array contains a key, "objRef", which contains a user function call with prefixed script path and instanciating a persistent global object. This can report back if browser requirements are OK, draw the RTE and do the transformations needed.
		'staticFileEditPath' => 'fileadmin/static/',	// Path to directory with static files for editing (see table sys_staticfiles_edit). Relative to PATH_site.
		'lockRootPath' => '',					// First part of the userHomePath/groupHomePath. Observe that the first part of 'userHomePath' and 'groupHomePath' must be the value of 'lockRootPath'. Eg. '/home/typo3/'. This path is also used to evaluate if paths outside the PATH_site should be allowed. Ending slash required!
		'userHomePath' => '',					// Path to the directory where TYPO3 backend-users have their home-dirs.  Eg. '/home/typo3/users/'. A home for backend user 2 would be: '/home/typo3/users/2/'. Ending slash required!
		'groupHomePath' => '',					// Path to the directory where TYPO3 backend-groups have their home-dirs. Remember that the first part of this path must be 'lockRootPath'. Eg. '/home/typo3/groups/'. A home for backend group 1 would be: '/home/typo3/groups/1/'. Ending slash required!
		'userUploadDir' => '',					// Suffix to the user home dir which is what gets mounted in TYPO3. Eg. if the user dir is "../123_user/" and this value is "/upload" then "../123_user/upload" gets mounted.
		'fileCreateMask' => '0775',				// File mode mask for unix file systems (when files are uploaded/created). Execute bit is set since some files installed in extensions might need that.
		'folderCreateMask' => '0775',			// As above, but for folders.
		'warning_email_addr' => '',				// Email-address that will receive a warning if there has been failed logins 4 times within an hour (all users).
		'warning_mode' => '',					// Bit 1: If set, warning_email_addr gets a mail everytime a user logs in. Bit 2: If set, a mail is sent if an ADMIN user logs in! Other bits reserved for future options.
		'IPmaskList' => '',						// String. Lets you define a list of IP-numbers (with *-wildcards) that are the ONLY ones allowed access to ANY backend activity. On error an error header is sent and the script exits. Works like IP masking for users configurable through TSconfig. See syntax for that (or look up syntax for the function t3lib_div::cmpIP())
		'lockBeUserToDBmounts' => 1,			// Boolean. If set, the backend user is allowed to work only within his page-mount. It's advisable to leave this on because it makes security easy to manage.
		'lockSSL' => 0,							// Int. 0,1,2: If set (1+2), the backend can only be operated from an ssl-encrypted connection (https). Set to 2 you will be redirected to the https admin-url supposed to be the http-url, but with https scheme instead.
		'enabledBeUserIPLock' => 1,				// Boolean. If set, the User/Group TSconfig option 'option.lockToIP' is enabled.
		'adminOnly' => 0,						// Boolean. If set (>=1), the only "admin" users can log in to the backend. If "<=-1" then the backend is totally shut down! For maintenance purposes.
		'disable_exec_function' => 0,			// Boolean. Don't use exec() function (except for ImageMagick which is disabled by [GFX][im]=0). If set, all fileoperations are done by the default PHP-functions. This is nescessary under windows! On UNIX the system commands by exec() can be used, unless this is disabled.
		'usePHPFileFunctions' => 1,				// Boolean. If set, all fileoperations are done by the default PHP-functions. Default on UNIX is using the system commands by exec(). You need to set this flag under safe_mode.
		'compressionLevel' => 0,				// Determines output compression. Requires zlib in your php4 install. Range 1-9, where 1 is least compression (approx. 50%) and 9 is greatest compression (approx 33%). 'true' as value will set the compression based on system load (works with Linux, freebsd). Good default value is 3. For more info, see class in t3lib/class.gzip_encode.php written by Sandy McArthur, Jr. <Leknor@Leknor.com>
		'maxFileSize' => '10000',				// Integer. If set this is the max fileoperation filesize in kb's set in t3lib/extFileFunctions.
		'forceCharset' => '',					// String. Normally the charset of the backend users language selection is used. If you set this value to a charset found in t3lib/csconvtbl/ (or "utf-8") the backend (and database) will ALWAYS use this charset. Always use a lowercase value.
		'installToolPassword' => '',			// String. This is the md5-hashed password for the Install Tool. Set this to '' and access will be totally denied. PLEASE consider to externally password protect the typo3/install/ folder, eg. with a .htaccess file.
		'trackBeUser' => 0,						// Boolean. If set, every invokation of a backend script is logged in sys_trackbeuser. This is used to get a view of the backend users behaviour. Mostly for debugging, support and user interaction analysis. Requires 'beuser_tracking' extension.
		'defaultUserTSconfig' => '',			// Enter lines of default backend user/group TSconfig.
		'defaultPageTSconfig' => '',			// Enter lines of default Page TSconfig.
		'defaultPermissions' => array (			// Default permissions set for new pages in t3lib/tce_main.php. Keys are 'show,edit,delete,new,editcontent'. Enter as comma-list
//			'user' => '',							// default in tce_main is 'show,edit,delete,new,editcontent'. If this is set (uncomment), this value is used instead.
//			'group' => '',							// default in tce_main is 'show,edit,new,editcontent'. If this is set (uncomment), this value is used instead.
//			'everybody' => ''						// default in tce_main is ''. If this is set (uncomment), this value is used instead.
		),
		'defaultUC' => array (					// Override default settings for BE-users. See class.t3lib_beuserauth.php, array $uc_default
		),
			// The control of fileextensions goes in two catagories. Webspace and Ftpspace. Webspace is folders accessible from a webbrowser (below TYPO3_DOCUMENT_ROOT) and ftpspace is everything else.
			// The control is done like this: If an extension matches 'allow' then the check returns true. If not and an extension matches 'deny' then the check return false. If no match at all, returns true.
			// You list extensions comma-separated. If the value is a '*' every extension is matched
			// If no fileextension, true is returned if 'allow' is '*', false if 'deny' is '*' and true if none of these matches
			// This configuration below accepts everything in ftpspace and everything in webspace except php3 or php files
		'fileExtensions' => array (
			'webspace' => array('allow'=>'', 'deny'=>'php3,php'),
			'ftpspace' => array('allow'=>'*', 'deny'=>'')
		),
		'fileDenyPattern' => '\.php\.|\.php3\.',	// A regular expression that - if it matches a filename - will deny the file upload/rename or whatever in the webspace. Matching with eregi() (case-insensitive).
		'interfaces' => 'backend',					// This determines which interface options is available in the login prompt and in which order (All options: ",backend,frontend")
		'loginLabels' => 'Username|Password|Interface|Log In|Log Out|Backend,Front End|Administration Login|(Note: Cookies must be enabled!)|Important Messages:|Your login attempt did not succeed. Make sure to spell your username and password correctly, including upper/lowercase characters.',		// Language labels of the login prompt.
		'loginNews' => array(),						// In this array you can define news-items for the login screen. To this array, add arrays with assoc keys 'date', 'header', 'content' (HTML content) and for those appropriate value pairs
		'XCLASS' => Array(),					// See 'Inside TYPO3' document for more information.
		'XLLfile' => Array(),					// For extension/overriding of the arrays in 'locallang' files in the backend. See 'Inside TYPO3' for more information.
		'notificationPrefix' => '[TYPO3 Note]'
	),
	'FE' => Array(			// Configuration for the TypoScript frontend (FE). Nothing here relates to the administration backend!
		'png_to_gif' => 0,						// Boolean. Enables conversion back to gif of all png-files generated in the frontend libraries. Notice that this leaves an increased number of temporary files in typo3temp/
		'tidy' => 0,							// Boolean. If set, the output html-code will be passed through 'tidy' which is a little program you can get from http://www.w3.org/People/Raggett/tidy/. 'Tidy' cleans the HTML-code for nice display!
		'tidy_option' => 'cached',				// options [all, cached, output]. 'all' = the content is always passed through 'tidy' before it may be stored in cache. 'cached' = only if the page is put into the cache, 'output' = only the output code just before it's echoed out.
		'tidy_path' => 'tidy -i --quiet true --tidy-mark true -wrap 0',		// Path with options for tidy. For XHTML output, add " --output-xhtml true"
		'logfile_dir' => '', 					// Path where TYPO3 should write webserver-style logfiles to. This path must be write-enabled for the webserver. Doesn't work for Windows! Remember slash AFTER! Eg: 'fileadmin/' or '/var/typo3logs/'. Please see the TypoScript reference!
		'logfile_write' => '',					// Keywords for write-mode of logfiles. Default is unix "echo". Keyword "fputs" will make PHP use "fputs" instead (compliant with safe_mode)
		'publish_dir' => '',					// Path where TYPO3 should write staticly published documents. This path must be write-enabled for the webserver. Remember slash AFTER! Eg: 'publish/' or '/www/htdocs/publish/'. See admPanel option 'publish'
		'addAllowedPaths' => '',				// Additional relative paths (comma-list) to allow TypoScript resources be in. Should be prepended with '/'. If not, then any path where the first part is like this path will match. That is: 'myfolder/ , myarchive' will match eg. 'myfolder/', 'myarchive/', 'myarchive_one/', 'myarchive_2/' ... No check is done to see if this directory actually exists in the root of the site. Paths are matched by simply checking if these strings equals the first part of any TypoScript resource filepath. (See class template, function init() in t3lib/class.t3lib_tsparser.php)
		'allowedTempPaths' => '',				// Additional paths allowed for temporary images. Used with imgResource. Eg. 'alttypo3temp/,another_temp_dir/';
		'debug' => 0,							// Boolean. If set, some debug HTML-comments may be output somewhere. Can also be set by TypoScript.
		'simulateStaticDocuments' => 0,			// Boolean. This is the default value for simulateStaticDocuments (configurable with TypoScript which overrides this, if the TypoScript value is present)
		'noPHPscriptInclude' => 0,				// Boolean. If set, PHP-scripts are not included by TypoScript configurations, unless they reside in 'media/scripts/'-folder. This is a security option to ensure that users with template-access do not terrorize
		'strictFormmail' => TRUE,				// Boolean. If set, the internal "formmail" feature in TYPO3 will send mail ONLY to recipients which has been encoded by the system itself. This protects against spammers misusing the formmailer.
		'compressionLevel' => 0,				// Determines output compression. Requires zlib in your php4 install. Range 1-9, where 1 is least compression (approx. 50%) and 9 is greatest compression (approx 33%). 'true' as value will set the compression based on system load (works with Linux, freebsd). Good default value is 3. For more info, see class in t3lib/class.gzip_encode.php written by Sandy McArthur, Jr. <Leknor@Leknor.com>
		'compressionDebugInfo' => 0,			// Boolean. If set, then in the end of the pages, the sizes of the compressed and non-compressed document is output. This should be used ONLY as a test, because the content is compressed twice in order to output this statistics!
		'pageNotFound_handling' => '',			// How TYPO3 should handle requests for non-existing/accessible pages. false (default): The 'nearest' page is shown. TRUE or '1': An TYPO3 error box is displayed. Integer > 1: Not used yet. Strings: redirect URL, eg. 'notfound.html' or 'http://www.domain.org/errors/notfound.html'.
		'pageNotFound_handling_statheader' => 'Status: 404 Not Found',			// If 'pageNotFound_handling' is enabled, this string will always be sent as header before the actual handling.
		'userFuncClassPrefix' => 'user_',		// This prefix must be the first part of any function or class name called from TypoScript, for instance in the stdWrap function.
		'addRootLineFields' => '',				// Comma-list of fields from the 'pages'-table. These fields are added to the select query for fields in the rootline.
		'checkFeUserPid' => 1,					// Boolean. If set, the pid of fe_user logins must be sent in the form as the field 'pid' and then the user must be located in the pid. Default is 1 from Typo32+. If you unset this, you should change the fe_users.username eval-flag 'uniqueInPid' to 'unique' in $TCA. This will do: $TCA['fe_users']['columns']['username']['config']['eval']= 'nospace,lower,required,unique';
		'lockIP' => 2,							// Integer (0-4). If >0, fe_users are locked to (a part of) their REMOTE_ADDR IP for their session. Enhances security but may throw off users that may change IP during their session (in which case you can lower it to 2 or 3). The integer indicates how many parts of the IP address to include in the check. Reducing to 1-3 means that only first, second or third part of the IP address is used. 4 is the FULL IP address and recommended. 0 (zero) disables checking of course.
		'defaultUserTSconfig' => '',			// Enter lines of default frontend user/group TSconfig.
		'defaultTypoScript_constants' => '',	// Enter lines of default TypoScript, constants-field.
		'defaultTypoScript_constants.' => Array(),	// Lines of TS to include after a static template with the uid = the index in the array (Constants)
		'defaultTypoScript_setup' => '',		// Enter lines of default TypoScript, setup-field.
		'defaultTypoScript_setup.' => Array(),		// As above, but for Setup
		'defaultTypoScript_editorcfg' => '',		// Enter lines of default TypoScript, editorcfg-field (Backend Editor Configuration)
		'defaultTypoScript_editorcfg.' => Array(),		// As above, but for Backend Editor Configuration
		'dontSetCookie' => 0,					// If set, the no cookies is attempted to be set in the front end. Of course no userlogins are possible either...
		'XCLASS' => Array(),					// See 'Inside TYPO3' document for more information.
//		'IPmaskMountGroups' => array(array('IPmaskList_1','fe_group uid'), array('IPmaskList_2','fe_group uid')),	// This allows you to specify an array of IPmaskLists/fe_group-uids. If the REMOTE_ADDR of the user matches an IPmaskList, then the given fe_group is add to the gr_list. So this is an automatic mounting of a user-group. But no fe_user is logged in though!
		'get_url_id_token' => '#get_URL_ID_TOK#',	// This is the token, which is substituted in the output code in order to keep a GET-based session going. Normally the GET-session-id is 5 chars ('&ftu=') + hash_length (norm. 10)
		'content_doktypes' => '1,2,5,7',			// List of pages.doktype values which can contain content (so shortcut pages and external url pages are excluded, but all pages below doktype 199 should be included. doktype=6 is not either (backend users only...). For doktypes going into menus see class.tslib_menu.php, line 494 (search for 'doktype'))
		'enable_mount_pids' => 1,					// If set to "1", the mount_pid feature allowing 'symlinks' in the page tree (for frontend operation) is allowed.
		'pageOverlayFields' => 'title,subtitle,nav_title,media,keywords,description,abstract,author,author_email',				// List of fields from the table "pages_language_overlay" which should be overlaid on page records. See t3lib_page::getPageOverlay()
	),
	'MODS' => Array(		// Backend Module Configuration (obsolete, make extension instead)
	),
	'USER' => Array(		// Here you may define your own setup-vars for use in your include-scripts. (obsolete, make extension instead)
	),
	'SC_OPTIONS' => Array(		// Here you can more or less freely define additional configuration for scripts in TYPO3. Of course the features supported depends on the script. See documentation "Inside TYPO3" for examples. Keys in the array are the relative path of a script (for output scripts it should be the "script ID" as found in a comment in the HTML header ) and values can then be anything that scripts wants to define for itself.
	),
	'EXTCONF' => Array (		// Here you may add manually set configuration options for your extensions. Eg. $TYPO3_CONF_VARS['EXTCONF']['my_extension_key']['my_option'] = 'my_value';
//		'--key--' => array()
	)
);
$T3_VAR = array();	// Initialize.

// Database-variables are cleared!
$typo_db = '';					// The database name
$typo_db_username = '';			// The database username
$typo_db_password = '';			// The database password
$typo_db_host = '';				// The database host
$typo_db_tables_script = '';	// The filename of the tables.php script in typo3conf/ folder IF the default t3lib/stddb/tables.php should NOT be used for some reason. It's recommended to use the default and modify it through the extTableDef-script, see below.
$typo_db_extTableDef_script = '';	// The filename of an additional script in typo3conf/-folder which is included after tables.php. Code in this script should modify the tables.php-configuration only, and this provides a good way to extend the standard-distributed tables.php file.

	// Include localconf.php. Use this file to configure TYPO3 for your needs and database
if (!@is_file(PATH_typo3conf.'localconf.php'))	die(PATH_typo3conf.'localconf.php is not found!');
require(PATH_typo3conf.'localconf.php');

	// Defining the database setup as constants
define('TYPO3_db', $typo_db);
define('TYPO3_db_username', $typo_db_username);
define('TYPO3_db_password', $typo_db_password);
define('TYPO3_db_host', $typo_db_host);
define('TYPO3_tables_script', $typo_db_tables_script);
define('TYPO3_extTableDef_script', $typo_db_extTableDef_script);

	// Defining backend system languages
	// Remember to
	//		- update 'setup' extension labels (ext/setup/mod/locallang.php)
	//		- pages.lang item array (t3lib/stddb/tbl_be.php)
	// 		- Kickstarter wizard (ext/extrep_wizard/pi/class.tx_extrepwizard.php)
	//		- Add new file: sysext/lang/locallang_core.[lang_key].php
	//		- Add character encoding for lang key in t3lib/class.t3lib_cs.php
define('TYPO3_languages', 'default|dk|de|no|it|fr|es|nl|cz|pl|si|fi|tr|se|pt|ru|ro|ch|sk|lt|is|hr|hu|gl|th|gr|hk|eu|bg|br|et|ar|he|ua|lv|jp|vn');

	// Unsetting the configured values. Use of these are depreciated.
unset($typo_db);
unset($typo_db_username);
unset($typo_db_password);
unset($typo_db_host);
unset($typo_db_tables_script);
unset($typo_db_extTableDef_script);

// Based on the configuration of the image processing some options may be forced:
if (!$GLOBALS['TYPO3_CONF_VARS']['GFX']['image_processing'])	{
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['im']=0;
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['gdlib']=0;
}
if (!$GLOBALS['TYPO3_CONF_VARS']['GFX']['im'])	{
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_path']='';
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_path_lzw']='';
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']='gif,jpg,jpeg,png';
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['thumbnails'] = 0;
}
if ($GLOBALS['TYPO3_CONF_VARS']['GFX']['im_version_5'])	{
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_negate_mask'] = 1;
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_no_effects'] = 1;
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_mask_temp_ext_gif'] = 1;
}
if ($GLOBALS['TYPO3_CONF_VARS']['GFX']['im_imvMaskState'])	{
	$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_negate_mask']=$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_negate_mask']?0:1;
}

	// simple debug function which prints output immediately
function xdebug($var='',$br=0)	{
		// If you wish to use the debug()-function, and it does not output something, please edit the IP mask in TYPO3_CONF_VARS
	if (!t3lib_div::cmpIP(t3lib_div::getIndpEnv('REMOTE_ADDR'), $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask']))	return;
	t3lib_div::debug($var,$br);
}
	// Debug function which calls $GLOBALS['error'] error handler if available
function debug($variable='', $name='*variable*', $line='*line*', $file='*file*', $recursiveDepth=3, $debugLevel=E_DEBUG)	{
		// If you wish to use the debug()-function, and it does not output something, please edit the IP mask in TYPO3_CONF_VARS
	if (!t3lib_div::cmpIP(t3lib_div::getIndpEnv('REMOTE_ADDR'), $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask']))	return;

	if(@is_callable(array($GLOBALS['error'],'debug'))) {
		$GLOBALS['error']->debug($variable, $name, $line, $file, $recursiveDepth, $debugLevel);
	} else {
		$br = ($name == '*variable*') ? 0 : $name;
		t3lib_div::debug($variable, $br);
	}
}
function debugBegin() {
	if(@is_callable(array($GLOBALS['error'],'debugBegin'))) {
		$GLOBALS['error']->debugBegin();
	}
}
function debugEnd() {
	if(@is_callable(array($GLOBALS['error'],'debugEnd'))) {
		$GLOBALS['error']->debugEnd();
	}
}


// Load extensions:
if (TYPO3_MODE=='FE' && is_object($TT)) $TT->push('Loading localconf.php extensions','');
$TYPO3_LOADED_EXT = t3lib_extMgm::typo3_loadExtensions();
if ($TYPO3_LOADED_EXT['_CACHEFILE'])	{
	require(PATH_typo3conf.$TYPO3_LOADED_EXT['_CACHEFILE'].'_ext_localconf.php');
} else {
	$temp_TYPO3_LOADED_EXT = $TYPO3_LOADED_EXT;
	reset($temp_TYPO3_LOADED_EXT);
	while(list($_EXTKEY,$temp_lEDat)=each($temp_TYPO3_LOADED_EXT))	{
		if (is_array($temp_lEDat) && $temp_lEDat['ext_localconf.php'])	{
			$_EXTCONF = $TYPO3_CONF_VARS['EXT']['extConf'][$_EXTKEY];
			require($temp_lEDat['ext_localconf.php']);
		}
	}
}
if (TYPO3_MODE=='FE' && is_object($TT)) $TT->pull();

	// Define "TYPO3_DLOG" constant
define('TYPO3_DLOG', $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_DLOG']);

	// Unsetting other reserved global variables:
	// Those which are/can be set in "stddb/tables.php" files:
unset($PAGES_TYPES);
unset($ICON_TYPES);
unset($LANG_GENERAL_LABELS);
unset($TCA);
unset($TBE_MODULES);
unset($TBE_STYLES);
unset($FILEICONS);

	// Those set in init.php
unset($WEBMOUNTS);
unset($FILEMOUNTS);
unset($BE_USER);

	// Those set otherwise:
unset($TBE_MODULES_EXT);
unset($TCA_DESCR);
unset($T3_SERVICES);
unset($LOCAL_LANG);


	// Setting some global vars:
$EXEC_TIME = time();					// $EXEC_TIME is set so that the rest of the script has a common value for the script execution time
$SIM_EXEC_TIME = $EXEC_TIME;			// $SIM_EXEC_TIME is set to $EXEC_TIME but can be altered later in the script if we want to simulate another execution-time when selecting from eg. a database
$TYPO_VERSION = '3.6.2';				// TYPO3 version
?>
