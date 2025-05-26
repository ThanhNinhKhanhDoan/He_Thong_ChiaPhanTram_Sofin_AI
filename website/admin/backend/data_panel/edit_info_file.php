<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=1"],
        "key_data" => ["maxLen=1000","minLen=1"],
        "value_data" => ["maxLen=1000","minLen=1"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {

        $count_id = $db->countId("video_data_ids", $requests['data']['id']);
        if ($count_id < 1) {
            $error["id"][] = "User not found.";
        }

        if($requests['data']['key_data'] == "name" || $requests['data']['key_data'] == "group" || $requests['data']['key_data'] == "description"){

        } else {
            $error["key"][] = "Invalid key.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                $requests['data']['key_data'] => $requests['data']['value_data'],
            ];
            $db->editId("video_data_ids", $datas, $requests['data']['id']);
            echo json_encode(["stt" => true,"data" => "Success"]);
        }
    }
}