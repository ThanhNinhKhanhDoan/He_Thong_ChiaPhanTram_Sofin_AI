<?php
use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_user();
if (!$dataRole) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "config_voice" => ["maxLen=10000","minLen=1"],
        "text" => ["maxLen=10000000","minLen=1"],
        "group" => ["maxLen=10000","minLen=1"],
        "name" => ["maxLen=10000","minLen=1"],
        "path_voice" => ["maxLen=10000","minLen=1"],
        "type" => ["maxLen=10000","minLen=1"],
        "title" => ["maxLen=10000","minLen=1"],
        "description" => ["maxLen=10000","minLen=1"],
        "keywords" => ["maxLen=10000","minLen=1"],
        "thumbnail" => ["maxLen=10000","minLen=1"],
        "play_time" => ["maxLen=10000","minLen=1"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        // $count_email = $db->count("voices", ["name" => $requests['data']['name']]);
        // if ($count_email > 0) {
        //     $error["name"][] = "Tên giọng nói đã tồn tại.";
        // }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {

            


            $play_time = (float)$requests['data']['play_time'];
            
            $datas = [
                "u_id" => $dataRole["_id"]->__toString(),
                "u_email" => $dataRole["email"],
                "u_name" => $dataRole["name"],
                "u_token" => $dataRole["token"],
                "u_roles" => $dataRole["roles"],
                "type" => $requests['data']['type'],
                "config_voice" => $requests['data']['config_voice'],
                "text" => $requests['data']['text'],
                "group" => $requests['data']['group'],
                "name" => $requests['data']['name'],
                "path_voice" => $requests['data']['path_voice'],
                "play_time" => $requests['data']['play_time'],
                "status" => "success",
                "title" => $requests['data']['title'],
                "description" => $requests['data']['description'],
                "keywords" => $requests['data']['keywords'],
                "thumbnail" => $requests['data']['thumbnail']
            ];

            $dataToInserts = $db->add("voices", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}