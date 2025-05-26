<?php
use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_user();
if (!$dataRole) {
    echo json_encode(["stt" => false,"data" => [["password" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=1"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {

        $plans = [
            [
                "plan_id" => "test",
                "plan_name" => "Gói Test",
                "price" => 0,
                "bonus_points" => 50000,
                "duration_days" => 30
            ],
            [
                "plan_id" => "basic",
                "plan_name" => "Gói Basic",
                "price" => 127400,
                "bonus_points" => 127400,
                "duration_days" => 30
            ],
            [
                "plan_id" => "pro",
                "plan_name" => "Gói Pro",
                "price" => 1300000,
                "bonus_points" => 1500000,
                "duration_days" => 30
            ],
            [
                "plan_id" => "business",
                "plan_name" => "Gói Business",
                "price" => 25974000,
                "bonus_points" => 27000000,
                "duration_days" => 30
            ],
            [
                "plan_id" => "teacher",
                "plan_name" => "Teacher",
                "price" => 5200000,
                "bonus_points" => 300000,
                "duration_days" => 30
            ]
        ];

        // Get the plan_id from the request
        $requestedPlanId = $requests['data']['id']; // Assuming 'id' is the key for plan_id in the request data

        // Find the plan that matches the requested plan_id
        $selectedPlan = null;
        foreach ($plans as $plan) {
            if ($plan['plan_id'] === $requestedPlanId) {
                $selectedPlan = $plan;
                break;
            }
        }

        if (!$selectedPlan) {
            $error = [["id" => "Plan not found."]];
        }

        // KIẾM TRA XEM CÓ PHẢI GÓI GIẢNG VIÊN HAY KHÔNG, nếu là giảng viên thì sẽ set luôn PLAN_ID là teacher
        $check_teacher = $db->count("package_purchase", ["u_id" => $dataRole["_id"]->__toString(), "plan_id" => "teacher", "status" => "approved"]);
        if ($check_teacher > 0) {
            if ($dataRole["roles"] == "Tier_2" || $dataRole["roles"] == "Tier_1") {
                $selectedPlan['plan_id'] = "teacher";
                $selectedPlan['plan_name'] = "Teacher";
            }
        }


        
        // kiểm tra xem số tiền có đủ để mua gói này không
        $u_point = intval($dataRole["point"]);
        if ($u_point < intval($selectedPlan['price'])) {
            $error = [["id" => "You do not have enough points to purchase this package."]];
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $count_package_purchase = $db->count("package_purchase", ["u_id" => $dataRole["_id"]->__toString()]);
            if ($count_package_purchase < 1) {
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
            } else {
                

                $data_package_purchase = $db->findOne("package_purchase", ["u_id" => $dataRole["_id"]->__toString()]);
                $data_package_purchase = $data_package_purchase[0];
                $time_end_old = $data_package_purchase["time_end"];

                $bonus_points = intval($selectedPlan['bonus_points']) + intval($data_package_purchase['bonus_points']);
                if ($time_end_old < time()) {
                    $time_end = time()+intval($selectedPlan['duration_days'])*24*60*60;
                } else {
                    $time_end = $time_end_old + intval($selectedPlan['duration_days'])*24*60*60;
                }

                $datas = [
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
                    "plan_id" => $selectedPlan['plan_id'],
                    "plan_name" => $selectedPlan['plan_name'],
                    "duration_days" => $selectedPlan['duration_days'],
                    "bonus_points" => $bonus_points,
                    "price" => $selectedPlan['price'],
                    "time_end" => $time_end
                ];
                $db->editId("package_purchase", $datas, $data_package_purchase['_id']->__toString());

            }
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
}