<?php
use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_user();
if (!$dataRole) {
    echo json_encode(["stt" => false,"data" => [["password" => "You are not authorized to access this page."]]]);
} else {
    $error = [];

    // Find the plan that matches the requested plan_id
    $selectedPlan = [
        "plan_id" => "teacher",
        "plan_name" => "Teacher",
        "price" => 6200000,
        "bonus_points" => 300000,
        "duration_days" => 30
    ];
    if ($dataRole["roles"] == "Tier_1") {
        $selectedPlan["price"] = 0;
    }

    // KIẾM TRA XEM CÓ PHẢI GÓI GIẢNG VIÊN HAY KHÔNG, nếu là giảng viên thì sẽ set luôn PLAN_ID là teacher
    $check_teacher = $db->count("package_purchase", ["u_id" => $dataRole["_id"]->__toString(), "plan_id" => "teacher"]);
    if ($check_teacher > 0) {
        $error = [["id" => "You have already purchased this package."]];
    }

    if ($dataRole["roles"] != "Tier_2" && $dataRole["roles"] != "Tier_1") {
        $error = [["id" => "You are not authorized to access this page."]];
    }
    
    // kiểm tra xem số tiền có đủ để mua gói này không
    $u_point = intval($dataRole["point"]);
    if ($u_point < intval($selectedPlan['price'])) {
        $error = [["id" => "You do not have enough points to purchase this package."]];
    }


    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {

        
        $time_end = time()+intval($selectedPlan['duration_days'])*24*60*60;
        $datas = [
            "u_id" => $dataRole["_id"]->__toString(),
            "u_email" => $dataRole["email"],
            "u_name" => $dataRole["name"],
            "u_token" => $dataRole["token"],
            "u_roles" => $dataRole["roles"],
            "u_tier_level" => $dataRole["tier_level"],
            "u_ref_level" => $dataRole["ref_level"],
            "u_phone" => $dataRole["phone"],
            "u_telegram" => $dataRole["telegram"],
            "status" => "approved",
            "status_payment" => "pending",
            "plan_id" => $selectedPlan['plan_id'],
            "plan_name" => $selectedPlan['plan_name'],
            "duration_days" => $selectedPlan['duration_days'],
            "bonus_points" => $selectedPlan['bonus_points'],
            "price" => $selectedPlan['price'],
            "time_end" => $time_end
        ];
        $dataToInserts = $db->add("package_purchase", $datas);
        $db->editId("users", ["point" => $u_point - intval($selectedPlan['price'])], $dataRole["_id"]->__toString());


        // thêm vào lịch sử 
        $data_history = [
            "u_id" => $dataRole["_id"]->__toString(),
            "u_email" => $dataRole["email"],
            "u_name" => $dataRole["name"],
            "u_token" => $dataRole["token"],
            "u_tier_level" => $dataRole["tier_level"],
            "u_ref_level" => $dataRole["ref_level"],
            "u_phone" => $dataRole["phone"],
            "u_telegram" => $dataRole["telegram"],
            "u_roles" => $dataRole["roles"],
            "status" => "approved",
            "status_payment" => "pending",
            "time_payment" => 0,
            "plan_id" => $selectedPlan['plan_id'],
            "plan_name" => $selectedPlan['plan_name'],
            "duration_days" => $selectedPlan['duration_days'],
            "bonus_points" => $selectedPlan['bonus_points'],
            "price" => $selectedPlan['price'],
            "time_end" => $time_end
        ];
        $dataToInserts = $db->add("history_package_purchase", $data_history);

        echo json_encode(["stt" => true,"data" => "Purchase successful."]);
    }

    
}