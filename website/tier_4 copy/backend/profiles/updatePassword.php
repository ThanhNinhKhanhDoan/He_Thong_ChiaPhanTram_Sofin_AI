<?php
use Ramsey\Uuid\Uuid;
$dataUser = $is_login_tier_4->is_user();
if (!$dataUser) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "password" => ["password","maxLen=90"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $session_login = Uuid::uuid4(); // Tạo một UUID ngẫu nhiên
        $session_login = $session_login->toString();
        $data_edit = [
            "password" => password_hash($requests['data']['password'], PASSWORD_BCRYPT),
            "session_login" => $session_login
        ];
        $db->editId("edu_tier_4", $data_edit, $dataUser["_id"]->__toString());
        echo json_encode(["stt" => true,"data" => $dataUser->email]);
    }
}