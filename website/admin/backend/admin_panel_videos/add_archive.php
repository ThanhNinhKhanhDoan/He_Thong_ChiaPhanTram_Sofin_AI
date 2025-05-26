<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "dir_id" => ["maxLen=10000","minLen=3"],
        "name" => ["maxLen=10000","minLen=3"],
        "keywords" => ["maxLen=10000","minLen=3"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_cate_id = $db->count("admin_panel_video_archives", ["name" => $requests['data']['name']]);
        if ($count_cate_id > 0) {
            $error["name"][] = "Tên kho đã tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "name" => $requests['data']['name'],
                "u_id" => $dataAdmin['_id']->__toString(),
                "u_email" => $dataAdmin['email'],
                "u_name" => $dataAdmin['name'],
                "u_token" => $dataAdmin['token'],
                "dir_id" => $requests['data']['dir_id'],
                "count_video_16_9" => 0,
                "count_video_9_16" => 0,
                "keywords" => $requests['data']['keywords'],
                "status" => "active"
            ];

            $dataToInserts = $db->add("admin_panel_video_archives", $datas);

            $db->incrementId("admin_panel_video_cates", "count_storage", 1, $requests['data']['dir_id']);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}