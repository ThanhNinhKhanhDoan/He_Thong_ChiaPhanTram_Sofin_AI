<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login_tier_1->is_user();
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
        $count_cate_id = $db->countId("edu_tier_2", $requests['data']['id']);
        if ($count_cate_id < 1) {
            $error["name"][] = "Kho không tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "status" => $requests['data']['status']
            ];

            $dataToInserts = $db->editId("edu_tier_2", $datas, $requests['data']['id']);

            echo json_encode(["stt" => true,"data" => "Đã cập nhật thành công"]);
        }
    }
}