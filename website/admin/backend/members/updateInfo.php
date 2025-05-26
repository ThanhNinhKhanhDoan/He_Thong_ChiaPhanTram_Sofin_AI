<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["name" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=5"],
        "name" => ["maxLen=100","minLen=1"],
        "phone" => ["maxLen=100","minLen=1"],
        "telegram" => ["maxLen=100","minLen=1"]
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
            $data_edit = [
                "name" => $requests['data']['name'],
                "phone" => $requests['data']['phone'],
                "telegram" => $requests['data']['telegram']
            ];
            $db->editId("users", $data_edit, $requests['data']['id']);
            echo json_encode(["stt" => true,"data" => $data_ids->email]);
        }
    }
}