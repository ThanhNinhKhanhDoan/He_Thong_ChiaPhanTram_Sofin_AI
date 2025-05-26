<?php
$dataUser = $is_login_tier_3->is_user();
if (!$dataUser) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
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

        $data_edit = [
            "name" => $requests['data']['name'],
            "phone" => $requests['data']['phone'],
            "telegram" => $requests['data']['telegram']
        ];
        $db->editId("edu_tier_3", $data_edit, $dataUser["_id"]->__toString());
        echo json_encode(["stt" => true,"data" => $dataUser->email]);
    }
}