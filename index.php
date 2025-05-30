<?php
require("load_system.php");
if ($DOMAIN === $_ENV['DOMAIN_ADMIN']) {
    $pathFolder = $pathDirRoot."/website/users";
    $pathFileMain = $pathFolder."/main.php";
    $pathFileRules = $pathFolder."/".get_route_to_file_rules();
    $pathFileIndex = $pathFolder."/".get_route_to_file();
    $pathFileCss = $pathFolder."/".get_route_to_file_css();
    $pathFileJs = $pathFolder."/".get_route_to_file_js();
} else if ($DOMAIN === $_ENV['TIER_1']) {
    $pathFolder = $pathDirRoot."/website/tier_1";
    $pathFileMain = $pathFolder."/main.php";
    $pathFileRules = $pathFolder."/".get_route_to_file_rules();
    $pathFileIndex = $pathFolder."/".get_route_to_file();
    $pathFileCss = $pathFolder."/".get_route_to_file_css();
    $pathFileJs = $pathFolder."/".get_route_to_file_js();
} else if ($DOMAIN === $_ENV['TIER_2']) {
    $pathFolder = $pathDirRoot."/website/tier_2";
    $pathFileMain = $pathFolder."/main.php";
    $pathFileRules = $pathFolder."/".get_route_to_file_rules();
    $pathFileIndex = $pathFolder."/".get_route_to_file();
    $pathFileCss = $pathFolder."/".get_route_to_file_css();
    $pathFileJs = $pathFolder."/".get_route_to_file_js();
} else if ($DOMAIN === $_ENV['TIER_3']) {
    $pathFolder = $pathDirRoot."/website/tier_3";
    $pathFileMain = $pathFolder."/main.php";
    $pathFileRules = $pathFolder."/".get_route_to_file_rules();
    $pathFileIndex = $pathFolder."/".get_route_to_file();
    $pathFileCss = $pathFolder."/".get_route_to_file_css();
    $pathFileJs = $pathFolder."/".get_route_to_file_js();
} else if ($DOMAIN === $_ENV['TIER_4']) {
    $pathFolder = $pathDirRoot."/website/tier_4";
    $pathFileMain = $pathFolder."/main.php";
    $pathFileRules = $pathFolder."/".get_route_to_file_rules();
    $pathFileIndex = $pathFolder."/".get_route_to_file();
    $pathFileCss = $pathFolder."/".get_route_to_file_css();
    $pathFileJs = $pathFolder."/".get_route_to_file_js();
} else if ($DOMAIN === $_ENV['TIER_5']) {
    $pathFolder = $pathDirRoot."/website/tier_5";
    $pathFileMain = $pathFolder."/main.php";
    $pathFileRules = $pathFolder."/".get_route_to_file_rules();
    $pathFileIndex = $pathFolder."/".get_route_to_file();
    $pathFileCss = $pathFolder."/".get_route_to_file_css();
    $pathFileJs = $pathFolder."/".get_route_to_file_js();
} else {
    $pathFolder = $pathDirRoot."/website/public";
    $pathFileMain = $pathFolder."/main.php";
    $pathFileRules = $pathFolder."/".get_route_to_file_rules();
    $pathFileIndex = $pathFolder."/".get_route_to_file();
    $pathFileCss = $pathFolder."/".get_route_to_file_css();
    $pathFileJs = $pathFolder."/".get_route_to_file_js();
}
if (!file_exists($pathFileMain) or !file_exists($pathFileRules)  or !file_exists($pathFileIndex)) {
    require $pathDirRoot."/error.php";
} else {
    require $pathFileMain;
}
?>