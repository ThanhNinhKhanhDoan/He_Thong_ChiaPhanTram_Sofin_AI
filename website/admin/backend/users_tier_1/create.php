<?php
use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_tier_1();
if (!$dataRole) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "name" => ["maxLen=160","minLen=3"],
        "email" => ["maxLen=160","email"],
        "password" => ["password"],
        "phone" => ["maxLen=160","minLen=3"],
        "telegram" => ["maxLen=160","minLen=3"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    // kiểm tra xem đã kích hoạt gói giáo viên chưa
    $check_teacher_all = $db->count("package_purchase", ["u_id" => $dataRole["_id"]->__toString(), "plan_id" => "teacher", "status" => "approved"]);
    if ($check_teacher_all == 0) {
        $error["teacher_all"][] = "You have not activated the teacher package.";
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {




        $count_email = $db->count("users", ["email" => $requests['data']['email']]);
        if ($count_email > 0) {
            $error["email"][] = "Email already exists in the system.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "email" => $requests['data']['email'],
                "password" => password_hash($requests['data']['password'], PASSWORD_BCRYPT),
                "session_login" => "",
                "token" => Uuid::uuid4()->toString(),
                "name" => $requests['data']['name'],
                "roles" => "Tier_2",
                "telegram" => $requests['data']['telegram'],
                "telegram_id" => "",
                "phone" => $requests['data']['phone'],
                "point" => 0,
                "ref_level" => $dataRole->email,
                "tier_level" => $dataRole->email,
                "delete_account" => false,
                "status" => "active"
            ];

            $dataToInserts = $db->add("users", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}