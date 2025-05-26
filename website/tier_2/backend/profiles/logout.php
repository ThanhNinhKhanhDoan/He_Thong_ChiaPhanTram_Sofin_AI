<?php
$dataUser = $is_login_tier_2->is_user();
if (!$dataUser) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $cookie_expire = time() - 3600;
    if (isset($_COOKIE['u_id'])) {
        setcookie("u_id", "", $cookie_expire, "/");
        unset($_COOKIE['u_id']);
    }
    if (isset($_COOKIE['session_login'])) {
        setcookie("session_login", "", $cookie_expire, "/");
        unset($_COOKIE['session_login']);
    }
    echo json_encode(["stt" => true,"data" => "logout successfully"]);
}