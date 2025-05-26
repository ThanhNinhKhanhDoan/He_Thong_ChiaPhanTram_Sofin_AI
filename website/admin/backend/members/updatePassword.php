<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["password" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=5"],
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

        $count_id = $db->countId("users", $requests['data']['id']);
        if ($count_id < 1) {
            $error["id"][] = "User not found.";
        }
        $data_ids = $db->findOneId("users", $requests['data']['id']);
        $data_ids = $data_ids[0];
        if ($data_ids['roles'] == "Admin") {
            $error["id"][] = "You cannot edit the admin account.";
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
            $db->editId("users", $data_edit, $requests['data']['id']);
            echo json_encode(["stt" => true,"data" => $data_ids->email]);
        }
    }
}