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

        $count_id = $db->countId("video_projects", $requests['data']['id']);
        if ($count_id < 1) {
            $error["id"][] = "Video project not found.";
        }
        
        

        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            
            $data_id = $db->findOneId("video_projects", $requests['data']['id']);
            $data_id = $data_id[0];

            $data_voice = $db->findOneId("voices", $data_id['voice']);
            $data_voice = $data_voice[0];

            $data_returns = [
                "path_output" => $data_id['path_output'],
                "title" => $data_voice['title'],
                "description" => $data_voice['description'],
                "keywords" => $data_voice['keywords'],
                "thumbnail" => $data_voice['thumbnail']
            ];
            
            echo json_encode(["stt" => true,"data" => $data_returns]);
        }
    }
}