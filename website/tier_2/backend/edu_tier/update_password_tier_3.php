<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login_tier_2->is_user();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=10000","minLen=3"],
        "password" => ["maxLen=10000","minLen=1"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_cate_id = $db->countId("edu_tier_3", $requests['data']['id']);
        if ($count_cate_id < 1) {
            $error["name"][] = "Giảng viên không tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "password" => password_hash($requests['data']['password'], PASSWORD_BCRYPT),
            ];

            $dataToInserts = $db->editId("edu_tier_3", $datas, $requests['data']['id']);

            echo json_encode(["stt" => true,"data" => "Đã cập nhật thành công"]);
        }
    }
}