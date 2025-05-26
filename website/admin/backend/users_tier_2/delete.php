<?php
use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_tier_1();
if (!$dataRole) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=5"],
        "email" => ["maxLen=1000","minLen=5"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    $check_teacher_all = $db->count("package_purchase", ["u_id" => $dataRole["_id"]->__toString(), "plan_id" => "teacher", "status" => "approved"]);
    if ($check_teacher_all == 0) {
        $error["teacher_all"][] = "You have not activated the teacher package.";
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_id = $db->countId("users", $requests['data']['id']);
        if ($count_id < 1) {
            $error["id"][] = "User not found.";
        }
        $data_ids = $db->findOneId("users", $requests['data']['id']);
        $data_ids = $data_ids[0];
        if ($data_ids['roles'] == "Tier_1" || $data_ids['roles'] == "Admin") {
            $error["id"][] = "You cannot delete the admin account.";
        }

        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            // $db->delId("users", $requests['data']['id']);
            $db->editId("users", ["delete_account" => true], $requests['data']['id']);
            echo json_encode(["stt" => true,"data" => $requests['data']['email']]);
        }
    }
}