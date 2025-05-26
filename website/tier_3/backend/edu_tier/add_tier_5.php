<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login_tier_3->is_user();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "user_id" => ["maxLen=10000","minLen=3"],
        "name" => ["maxLen=10000","minLen=3"],
        "email" => ["maxLen=10000","minLen=3"],
        "password" => ["maxLen=10000","minLen=3"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_user_id = $db->countId("users", $requests['data']['user_id']);
        if ($count_user_id == 0) {
            $error["user_id"][] = "Học viên không tồn tại.";
        }
        $data_user = $db->findOneId("users", $requests['data']['user_id']);
        $data_user = $data_user[0];
        $tier_3_id = $data_user['tier_3_id'];
        $discount_percent_user = $data_user['discount_percent'];
        $software_discount_percent_user = $data_user['software_discount_percent'];
        $channel_revenue_discount_percent_user = $data_user['channel_revenue_discount_percent'];
        

        
        $count_tier_3_id = $db->countId("edu_tier_3", $tier_3_id);
        if ($count_tier_3_id == 0) {
            $error["tier_3_id"][] = "Khu vực không tồn tại.";
        }

        $data_tier_3 = $db->findOneId("edu_tier_3", $tier_3_id);
        $data_tier_3 = $data_tier_3[0];
        $tier_1_id = $data_tier_3['tier_1_id'];
        $tier_2_id = $data_tier_3['tier_2_id'];

        

        


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
                "ref_level" => $requests['data']['user_id'],
                "discount_percent" => $discount_percent_user,
                "software_discount_percent" => $software_discount_percent_user,
                "channel_revenue_discount_percent" => $channel_revenue_discount_percent_user,
                "tier_1_id" => $tier_1_id,
                "tier_2_id" => $tier_2_id,
                "tier_3_id" => $tier_3_id,
                "count_ref_level" => 0,
            ];

            $dataToInserts = $db->add("users", $datas);

            $db->incrementId("edu_tier_1", "count_tier_3", 1, $tier_1_id);
            $db->incrementId("edu_tier_2", "count_tier_3", 1, $tier_2_id);
            
            $db->incrementId("edu_tier_1", "count_tier_4", 1, $tier_1_id);
            $db->incrementId("edu_tier_2", "count_tier_4", 1, $tier_2_id);
            
            $db->incrementId("edu_tier_3", "count_tier_4", 1, $tier_3_id);

            $db->incrementId("users", "count_ref_level", 1, $requests['data']['user_id']);
            
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}