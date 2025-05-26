<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "group" => ["maxLen=10000","minLen=1"],
        "name" => ["maxLen=10000","minLen=1"],
        "description" => ["maxLen=10000","minLen=1"],
        "data_type" => ["maxLen=10000","minLen=1"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        // $count_music = $db->count("video_datas", ["name" => $requests['data']['name']]);
        // if ($count_music > 0) {
        //     $error["name"][] = "Tên dữ liệu đã tồn tại.";
        // }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "group" => $requests['data']['group'],
                "name" => $requests['data']['name'],
                "description" => $requests['data']['description'],
                "data_type" => $requests['data']['data_type']
            ];

            $dataToInserts = $db->add("video_datas", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}