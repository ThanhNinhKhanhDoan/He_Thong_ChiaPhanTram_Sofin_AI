<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "name" => ["maxLen=10000","minLen=3"],
        "data_type" => ["maxLen=10000","minLen=3"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_cate_id = $db->count("admin_panel_video_cates", ["name" => $requests['data']['name']]);
        if ($count_cate_id > 0) {
            $error["name"][] = "Tên chuyên mục đã tồn tại.";
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
                "data_type" => $requests['data']['data_type'],
                "count_video_16_9" => 0,
                "count_video_9_16" => 0,
                "count_storage" => 0,
                "status" => "active"
            ];

            $dataToInserts = $db->add("admin_panel_video_cates", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}