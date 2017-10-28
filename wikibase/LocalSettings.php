<?php

## Database settings
$wgDBserver = "mysql";
$wgDBname = "my_wiki";
$wgDBuser = "wikiuser";
$wgDBpassword = "sqlpass";

## Locale

$wgShellLocale = "en_US.utf8";
$wgLanguageCode = "en";

$wgSitename = "docker-wikibase";
$wgMetaNamespace = "Project";
$wgScriptPath = "";

wfLoadSkin( 'Vector' );

# Wikibase
require_once "$IP/extensions/Wikibase/vendor/autoload.php";
require_once "$IP/extensions/Wikibase/lib/WikibaseLib.php";
require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";
require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";