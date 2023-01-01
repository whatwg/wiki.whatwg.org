<?php
# Uncomment these to debug:
# ini_set('show_errors', 'on');
# error_reporting(E_ALL);
# $wgShowDebug = true;
# $wgDebugToolbar = true;
# $wgDebugDumpSql = true;
# $wgShowExceptionDetails = true;

# This is based on the file automatically generated by the MediaWiki
# 1.36.0, with manual changes.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
  exit;
}


$wgSitename = 'WHATWG Wiki';

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = '';

## The protocol and server name to use in fully-qualified URLs
$wgServer = 'https://wiki.whatwg.org';

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.
$wgLogo = 'https://resources.whatwg.org/logo.svg';

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgSMTP = [
  'host' => 'tls://smtp.fastmail.com',
  'IDHost' => 'whatwg.org',
  'port' => 465,
  'auth' => true,
  'username' => getenv('FASTMAIL_USERNAME'),
  'password' => getENV('FASTMAIL_PASSWORD')
];

$wgEmergencyContact = 'gphemsley@gmail.com';
$wgPasswordSender = 'admin@whatwg.org';

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings: use environment variables
$wgDBtype = 'mysql';
$wgDBserver = getenv('MEDIAWIKI_DB_SERVER');
$wgDBname = getenv('MEDIAWIKI_DB_NAME');
$wgDBuser = getenv('MEDIAWIKI_DB_USER');
$wgDBpassword = getenv('MEDIAWIKI_DB_PASSWORD');

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## Enable image uploads
$wgEnableUploads  = true;
$wgUseImageResize = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = '/usr/bin/convert';

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = 'C.UTF-8';

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = '$IP/cache';

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = 'en';

$wgSecretKey = getenv('MEDIAWIKI_SECRET_KEY');

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = '1';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = 'Project:Copyrights'; # Set to the title of a wiki page that describes your license/copyright
#$wgRightsUrl = '';
$wgRightsText = 'a CC0 Universal Public Domain Declaration, with some restrictions';
#$wgRightsIcon = '';

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = '/usr/bin/diff3';

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = 'vector';

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );

# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'WikiEditor' );

#
# MANUALLY-ADDED SETTINGS
#


# Prevent anonymous users from editing pages.
$wgGroupPermissions['*']['read'] = true;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['createtalk'] = false;
$wgGroupPermissions['*']['writeapi'] = false;

# Prevent new user registrations except by sysops
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['user']['createaccount'] = false;
$wgGroupPermissions['autoconfirmed']['createaccount'] = true;

# Disable disruptive functionality for unconfirmed users.
$wgGroupPermissions['user']['minoredit'] = false;
#$wgGroupPermissions['user']['createpage'] = false; // DISABLED PER HIXIE
#$wgGroupPermissions['user']['createtalk'] = false; // DISABLED PER HIXIE
$wgGroupPermissions['user']['move'] = false;
$wgGroupPermissions['user']['move-subpages'] = false;
$wgGroupPermissions['user']['move-rootuserpages'] = false;
$wgGroupPermissions['user']['movefile'] = false;
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['user']['reupload'] = false;
$wgGroupPermissions['user']['reupload-shared'] = false;
$wgGroupPermissions['user']['writeapi'] = false;
$wgGroupPermissions['user']['sendemail'] = false;

$wgLocaltimezone = 'UTC';

$wgMainPageIsDomainRoot = true;
$wgArticlePath = '/wiki/$1';

$wgFavicon = 'https://resources.whatwg.org/logo.svg';
$wgAppleTouchIcon = 'https://resources.whatwg.org/logo.png';

$wgNoReplyAddress = 'noreply@wiki.whatwg.org';

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO

$wgUseFileCache = true;
$wgFileCacheDirectory = '{$wgCacheDirectory}/html';
$wgCacheEpoch = '20141011000000';
$wgInvalidateCacheOnLocalSettingsChange = true;

# Enable subpages in the main namespace
$wgNamespacesWithSubpages[NS_MAIN] = true;

# Do not display the following groups on Special:UserList
$wgImplicitGroups = array( '*', 'user', 'bureaucrat' );

# Require users to wait 7 days before being autoconfirmed.
$wgAutoConfirmAge = 86400 * 7;

# Require users to have at least 5 edits before being autoconfirmed.
$wgAutoConfirmCount = 5;

# Require autoconfirmed users to have confirmed their e-mail.
$wgAutopromote['autoconfirmed'] = array(
  '&',
  array( APCOND_EMAILCONFIRMED ),
  array( APCOND_EDITCOUNT, $wgAutoConfirmCount ),
  array( APCOND_AGE, $wgAutoConfirmAge ),
);

# Re-enable disruptive functionality for autoconfirmed users.
$wgGroupPermissions['autoconfirmed']['minoredit'] = true;
#$wgGroupPermissions['autoconfirmed']['createpage'] = true; // DISABLED PER HIXIE
#$wgGroupPermissions['autoconfirmed']['createtalk'] = true; // DISABLED PER HIXIE
$wgGroupPermissions['autoconfirmed']['move'] = true;
$wgGroupPermissions['autoconfirmed']['move-subpages'] = true;
$wgGroupPermissions['autoconfirmed']['move-rootuserpages'] = true;
#$wgGroupPermissions['autoconfirmed']['movefile'] = true; // ADMIN ONLY
$wgGroupPermissions['autoconfirmed']['upload'] = true;
$wgGroupPermissions['autoconfirmed']['reupload'] = true;
$wgGroupPermissions['autoconfirmed']['reupload-shared'] = true;
$wgGroupPermissions['autoconfirmed']['writeapi'] = true;
$wgGroupPermissions['autoconfirmed']['sendemail'] = true;

# Don't trigger CAPTCHAs for confirmed users adding URLs to a page.
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;

# Make sure administrators can edit user rights.
$wgGroupPermissions['sysop']['userrights'] = true;

# Automatically mark administrator edits as patrolled.
$wgGroupPermissions['sysop']['autopatrol'] = true;

# Make sure administrators can rename users.
$wgGroupPermissions['sysop']['renameuser'] = true;

#
# EXTENSIONS
#

# https://www.mediawiki.org/wiki/Extension:ParserFunctions
wfLoadExtension('ParserFunctions');
$wgPFEnableStringFunctions = true;

# https://www.mediawiki.org/wiki/Extension:Cite
wfLoadExtension('Cite');

# https://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi
wfLoadExtension('SyntaxHighlight_GeSHi');

# https://www.mediawiki.org/wiki/Extension:ConfirmEdit
# https://www.mediawiki.org/wiki/Extension:ConfirmEdit#ReCaptcha_(NoCaptcha)
wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/ReCaptchaNoCaptcha' ]);
$wgCaptchaClass = 'ReCaptchaNoCaptcha';
# These keys are for the whatwg.org domain name.
$wgReCaptchaSiteKey = '6LepFtgSAAAAAOplwDJE25CIFG7UGR5HIhyeWhos';
$wgReCaptchaSecretKey = getenv('RECAPTCHA_SECRET_KEY');
$wgReCaptchaSendRemoteIP = false;

# https://www.mediawiki.org/wiki/Extension:Nuke
wfLoadExtension('Nuke');

# https://www.mediawiki.org/wiki/Extension:Gadgets
wfLoadExtension('Gadgets');

# https://www.mediawiki.org/wiki/Extension:Renameuser
wfLoadExtension('Renameuser');

#
# DISABLE SETTINGS
#

# Disable the 'bureaucrat' group, since we don't need it.
unset( $wgGroupPermissions['bureaucrat'] );
unset( $wgRevokePermissions['bureaucrat'] );
unset( $wgAddGroups['bureaucrat'] );
unset( $wgRemoveGroups['bureaucrat'] );
unset( $wgGroupsAddToSelf['bureaucrat'] );
unset( $wgGroupsRemoveFromSelf['bureaucrat'] );
