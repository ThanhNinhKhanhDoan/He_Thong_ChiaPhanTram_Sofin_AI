<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_user();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["password" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=1"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {

        $count_id = $db->countId("voices", $requests['data']['id']);
        if ($count_id < 1) {
            $error["id"][] = "Voice not found.";
        }
        
        

        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            
            $data_id = $db->findOneId("voices", $requests['data']['id']);
            $data_id = $data_id[0];
            $data_returns = [
                "path_voice" => $data_id['path_voice'],
                "play_time" => $data_id['play_time']
            ];
            
            echo json_encode(["stt" => true,"data" => $data_returns]);
        }
    }
}