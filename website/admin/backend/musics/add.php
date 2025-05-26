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
        "path_music" => ["maxLen=10000","minLen=1"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_music = $db->count("musics", ["name" => $requests['data']['name']]);
        if ($count_music > 0) {
            $error["name"][] = "Tên nhạc nền đã tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "name" => $requests['data']['name'],
                "group" => $requests['data']['group'],
                "description" => $requests['data']['description'],
                "path_music" => $requests['data']['path_music']
            ];

            $dataToInserts = $db->add("musics", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}