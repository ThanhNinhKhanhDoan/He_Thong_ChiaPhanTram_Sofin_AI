<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "folder_id" => ["maxLen=10000","minLen=1"],
        "path" => ["maxLen=10000","minLen=1"],
        "name" => ["maxLen=10000","minLen=1"],
        "type" => ["maxLen=10000","minLen=1"],
        "url" => ["maxLen=10000","minLen=1"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_music = $db->count("video_data_ids", ["path" => $requests['data']['path']]);
        if ($count_music > 0) {
            $error["path"][] = "Đường dẫn file đã tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "status" => "active",
                "group" => "All",
                "name" => $requests['data']['name'],
                "description" => "",
                "play_time" => 0,
                "type" => $requests['data']['type'],
                "url" => $requests['data']['url'],
                "path" => $requests['data']['path'],
                "folder_id" => $requests['data']['folder_id'],
            ];

            $dataToInserts = $db->add("video_data_ids", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}