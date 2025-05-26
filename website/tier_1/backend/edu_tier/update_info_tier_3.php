<?php
exit();
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login_tier_1->is_user();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=10000","minLen=3"],
        "name" => ["maxLen=10000","minLen=1"],
        "representative_name" => ["maxLen=10000","minLen=1"],
        "phone" => ["maxLen=10000","minLen=1"],
        "discount_percent" => ["minNumber=1","maxNumber=100"],
        "software_discount_percent" => ["minNumber=1","maxNumber=100"],
        "channel_revenue_discount_percent" => ["minNumber=1","maxNumber=100"],
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
                "name" => $requests['data']['name'],
                "representative_name" => $requests['data']['representative_name'],
                "phone" => $requests['data']['phone'],
                "discount_percent" => intval($requests['data']['discount_percent']),
                "software_discount_percent" => intval($requests['data']['software_discount_percent']),
                "channel_revenue_discount_percent" => intval($requests['data']['channel_revenue_discount_percent'])
            ];

            $dataToInserts = $db->editId("edu_tier_3", $datas, $requests['data']['id']);

            echo json_encode(["stt" => true,"data" => "Đã cập nhật thành công"]);
        }
    }
}