<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_user();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["password" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=5"]
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
            $error["id"][] = "Video not found.";
        }
        
        

        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $dataId = $db->findOneId("video_projects", $requests['data']['id']);
            echo json_encode(["stt" => true,"data" => $dataId[0]]);
        }
    }
}