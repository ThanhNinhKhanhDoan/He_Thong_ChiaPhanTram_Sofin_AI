<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "tier_3_id" => ["maxLen=10000","minLen=3"],
        "name" => ["maxLen=10000","minLen=3"],
        "email" => ["maxLen=10000","minLen=3"],
        "password" => ["maxLen=10000","minLen=3"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_tier_3_id = $db->countId("edu_tier_3", $requests['data']['tier_3_id']);
        if ($count_tier_3_id == 0) {
            $error["tier_3_id"][] = "Khu vực không tồn tại.";
        }

        $data_tier_3 = $db->findOneId("edu_tier_3", $requests['data']['tier_3_id']);
        $data_tier_3 = $data_tier_3[0];
        $tier_1_id = $data_tier_3['tier_1_id'];
        $tier_2_id = $data_tier_3['tier_2_id'];
        $tier_3_id = $requests['data']['tier_3_id'];

        $discount_percent_tier_3 = $data_tier_3['discount_percent'];
        $software_discount_percent_tier_3 = $data_tier_3['software_discount_percent'];
        $channel_revenue_discount_percent_tier_3 = $data_tier_3['channel_revenue_discount_percent'];

        


        // check tier_1
        $count_tier_1_id = $db->countId("edu_tier_1", $tier_1_id);
        if ($count_tier_1_id == 0) {
            $error["tier_1_id"][] = "Tổ chức không tồn tại.";
        }
        // check tier_2
        $count_tier_2_id = $db->countId("edu_tier_2", $tier_2_id);
        if ($count_tier_2_id == 0) {
            $error["tier_2_id"][] = "Khu vực không tồn tại.";
        }







        $count_cate_id = $db->count("users", ["email" => $requests['data']['email']]);
        if ($count_cate_id > 0) {
            $error["email"][] = "Email đã tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "status" => "active",
                "email" => $requests['data']['email'],
                "password" => password_hash($requests['data']['password'], PASSWORD_BCRYPT),
                "session_login" => "",
                "token" => Uuid::uuid4()->toString(),
                "name" => $requests['data']['name'],
                "roles" => "Tier_4",
                "telegram" => "",
                "telegram_id" => "",
                "phone" => "",
                "zalo" => "",
                "address" => "",
                "point" => 0,
                "ref_level" => "",
                "tier_1_id" => $tier_1_id,
                "tier_2_id" => $tier_2_id,
                "tier_3_id" => $tier_3_id,
            ];

            $dataToInserts = $db->add("users", $datas);

            $db->incrementId("edu_tier_1", "count_tier_3", 1, $tier_1_id);
            $db->incrementId("edu_tier_2", "count_tier_3", 1, $tier_2_id);
            
            $db->incrementId("edu_tier_1", "count_tier_4", 1, $tier_1_id);
            $db->incrementId("edu_tier_2", "count_tier_4", 1, $tier_2_id);
            
            $db->incrementId("edu_tier_3", "count_tier_4", 1, $tier_3_id);
            
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}