<?php
require_once "$IP/extensions/MobileDetect/MobileDetect.php";

wfLoadExtensions( [
	'AbuseFilter',
	'AntiSpoof',
	'BetaFeatures',
	'CentralNotice',
	'CheckUser',
	'CreateWiki',
	'CookieWarning',
	'ConfirmEdit',
	'ConfirmEdit/ReCaptchaNoCaptcha',
	'DataDump',
	'Echo',
	// Required by CentralNotice
	'EventLogging',
	// Required by EventLogging
	'EventStreamConfig',
	'GlobalBlocking',
	'GlobalCssJs',
	'GlobalPreferences',
	'IncidentReporting',
	'Interwiki',
	'LocalisationUpdate',
	'LoginNotify',
	'ManageWiki',
	'MatomoAnalytics',
	'MirahezeMagic',
	'Nuke',
	'OATHAuth',
	'OAuth',
	'ParserFunctions',
	'Renameuser',
	'RottenLinks',
	'Scribunto',
	'SpamBlacklist',
	'TitleBlacklist',
	'TorBlock',
	'UserMerge',
	'WikiDiscover',
	'WikiEditor',
	'cldr'
] );
