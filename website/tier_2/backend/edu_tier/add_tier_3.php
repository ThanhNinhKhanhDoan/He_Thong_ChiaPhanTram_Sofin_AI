<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login_tier_2->is_user();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "tier_2_id" => ["maxLen=10000","minLen=3"],
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
        $count_tier_2_id = $db->countId("edu_tier_2", $requests['data']['tier_2_id']);
        if ($count_tier_2_id == 0) {
            $error["tier_2_id"][] = "Khu vực không tồn tại.";
        }

        $data_tier_2 = $db->findOneId("edu_tier_2", $requests['data']['tier_2_id']);
        $data_tier_2 = $data_tier_2[0];
        $tier_1_id = $data_tier_2['tier_1_id'];
        $tier_2_id = $requests['data']['tier_2_id'];

        $discount_percent = $data_tier_2['discount_percent'];
        $software_discount_percent = $data_tier_2['software_discount_percent'];
        $channel_revenue_discount_percent = $data_tier_2['channel_revenue_discount_percent'];

        // check tier_1
        $count_tier_1_id = $db->countId("edu_tier_1", $tier_1_id);
        if ($count_tier_1_id == 0) {
            $error["tier_1_id"][] = "Tổ chức không tồn tại.";
        }


        if ($requests['data']['discount_percent'] >= $discount_percent) {
            $error["discount_percent"][] = "% hoa hồng không được lớn hơn % hoa hồng của khu vực.";
        }

        if ($requests['data']['software_discount_percent'] >= $software_discount_percent) {
            $error["software_discount_percent"][] = "% hoa hồng phần mềm không được lớn hơn % hoa hồng phần mềm của khu vực.";
        }

        if ($requests['data']['channel_revenue_discount_percent'] >= $channel_revenue_discount_percent) {
            $error["channel_revenue_discount_percent"][] = "% hoa hồng doanh thu không được lớn hơn % hoa hồng doanh thu của khu vực.";
        }




        $count_cate_id = $db->count("edu_tier_3", ["name" => $requests['data']['name']]);
        if ($count_cate_id > 0) {
            $error["name"][] = "Tên giảng viên đã tồn tại.";
        }

        $count_cate_id = $db->count("edu_tier_3", ["email" => $requests['data']['email']]);
        if ($count_cate_id > 0) {
            $error["email"][] = "Email đã tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "u_id" => $dataAdmin['_id']->__toString(),
                "u_email" => "",
                "u_name" => "",
                "u_token" => "",
                "status" => "active",
                "tier_1_id" => $tier_1_id,
                "tier_2_id" => $tier_2_id,
                "name" => $requests['data']['name'],
                "representative_name" => $requests['data']['representative_name'],
                "phone" => $requests['data']['phone'],
                "email" => $requests['data']['email'],
                "password" => password_hash($requests['data']['password'], PASSWORD_BCRYPT),
                "session_login" => Uuid::uuid4()->toString(),
                "discount_percent" => intval($requests['data']['discount_percent']),
                "software_discount_percent" => intval($requests['data']['software_discount_percent']),
                "channel_revenue_discount_percent" => intval($requests['data']['channel_revenue_discount_percent']),
                "count_tier_4" => 0
            ];

            $dataToInserts = $db->add("edu_tier_3", $datas);
            $db->incrementId("edu_tier_2", "count_tier_3", 1, $tier_2_id);
            $db->incrementId("edu_tier_1", "count_tier_3", 1, $tier_1_id);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}