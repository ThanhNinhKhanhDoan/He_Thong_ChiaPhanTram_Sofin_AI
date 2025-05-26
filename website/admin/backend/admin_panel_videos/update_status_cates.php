<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=10000","minLen=3"],
        "status" => ["maxLen=10000","minLen=1"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_cate_id = $db->countId("admin_panel_video_cates", $requests['data']['id']);
        if ($count_cate_id < 1) {
            $error["name"][] = "Kho không tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "u_id" => $dataAdmin['_id']->__toString(),
                "u_email" => $dataAdmin['email'],
                "u_name" => $dataAdmin['name'],
                "u_token" => $dataAdmin['token'],
                "status" => $requests['data']['status']
            ];

            $dataToInserts = $db->editId("admin_panel_video_cates", $datas, $requests['data']['id']);

            echo json_encode(["stt" => true,"data" => "Đã cập nhật thành công"]);
        }
    }
}