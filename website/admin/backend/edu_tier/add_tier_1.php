<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "name" => ["maxLen=10000","minLen=3"],
        "email" => ["maxLen=10000","minLen=3"],
        "password" => ["maxLen=10000","minLen=3"],
        "discount_percent" => ["minNumber=1","maxNumber=100"],
        "software_discount_percent" => ["minNumber=1","maxNumber=100"],
        "channel_revenue_discount_percent" => ["minNumber=1","maxNumber=100"],
        "representative_name" => ["maxLen=10000","minLen=3"],
        "phone" => ["maxLen=10000","minLen=3"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_cate_id = $db->count("edu_tier_1", ["name" => $requests['data']['name']]);
        if ($count_cate_id > 0) {
            $error["name"][] = "Tên cấp 1 đã tồn tại.";
        }

        $count_cate_id = $db->count("edu_tier_1", ["email" => $requests['data']['email']]);
        if ($count_cate_id > 0) {
            $error["email"][] = "Email đã tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "u_id" => $dataAdmin['_id']->__toString(),
                "u_email" => $dataAdmin['email'],
                "u_name" => $dataAdmin['name'],
                "u_token" => $dataAdmin['token'],
                "status" => "active",
                "name" => $requests['data']['name'],
                "representative_name" => $requests['data']['representative_name'],
                "phone" => $requests['data']['phone'],
                "email" => $requests['data']['email'],
                "password" => password_hash($requests['data']['password'], PASSWORD_BCRYPT),
                "session_login" => Uuid::uuid4()->toString(),
                "discount_percent" => intval($requests['data']['discount_percent']),
                "software_discount_percent" => intval($requests['data']['software_discount_percent']),
                "channel_revenue_discount_percent" => intval($requests['data']['channel_revenue_discount_percent']),
                "count_tier_2" => 0,
                "count_tier_3" => 0,
                "count_tier_4" => 0
            ];

            $dataToInserts = $db->add("edu_tier_1", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}