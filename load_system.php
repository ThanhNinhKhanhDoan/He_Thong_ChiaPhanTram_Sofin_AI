<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


date_default_timezone_set("Asia/Bangkok");
session_start();
$pathDirRoot = getcwd();
$DOMAIN = $_SERVER['HTTP_HOST'];
require($pathDirRoot."/vendor/autoload.php");
require($pathDirRoot."/core/lib/Autoload.php");

new Autoload;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// $db = new Mongodb($_ENV['MONGODB_URL'], $_ENV['MONGODB_DATA']);
$rules = new Rules;

// $client = new TD_elastic_v2($_ENV['ELASTIC_CLOUD_ID'], $_ENV['ELASTIC_API_KEY']);
# Mongodb
// $conn = new Client($_ENV['MONGODB']);
// $db = $conn->data;

$db = new Mongodb_v2($_ENV['MONGODB']);
$is_login = new Is_login($db);
$is_login_tier_1 = new Is_login_tier_1($db);
$is_login_tier_2 = new Is_login_tier_2($db);
$is_login_tier_3 = new Is_login_tier_3($db);
$is_login_tier_4 = new Is_login_tier_4($db);
$is_login_tier_5 = new Is_login_tier_5($db);
$is_login_admin = new Is_login_admin($db);