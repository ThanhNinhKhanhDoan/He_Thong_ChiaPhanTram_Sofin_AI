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
            $data_returns = [
                "dir_id" => $data_id['_id']->__toString(),
                "url_music" => $data_id['music'],
                "url_image_effects" => $data_id['image_effects'],
                "url_gif" => $data_id['gif'],
                "path_voice" => $data_id['path_voice'],
                "video_urls" => $data_id['video'],
                "music_volume" => $data_id['music_volume'],
                "play_time" => $data_id['play_time'],
                "path_output" => $data_id['path_output']
            ];
            
            echo json_encode(["stt" => true,"data" => $data_returns]);
        }
    }
}