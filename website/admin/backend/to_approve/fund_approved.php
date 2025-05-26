<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["password" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=5"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {

        $count_id = $db->countId("history_payments", $requests['data']['id']);
        if ($count_id < 1) {
            $error["id"][] = "Transaction ID not found.";
        }

        $data_ids = $db->findOneId("history_payments", $requests['data']['id']);
        $data_ids = $data_ids[0];
        if ($data_ids['status'] == "approved") {
            $error["id"][] = "Transaction ID already approved.";
        }

        $u_id = $data_ids['u_id'];
        $count_u_id = $db->countId("users", $u_id);
        if ($count_u_id < 1) {
            $error["id"][] = "User U_ID not found.";
        }
        $data_u_id = $db->findOneId("users", $u_id);
        $data_u_id = $data_u_id[0];
        if ($data_u_id['delete_account'] == true) {
            $error["id"][] = "User ID already deleted.";
        }

        

        
        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $u_point = $data_u_id['point'];
            $u_point += $data_ids['amount'];
            $data_edit_u_id = [
                "point" => $u_point
            ];
            $db->editId("users", $data_edit_u_id, $u_id);
            
            $data_edit = [
                "status" => "approved",
                "admin_approve_id" => $dataAdmin['_id']->__toString(),
                "admin_approve_email" => $dataAdmin['email'],
                "admin_approve_name" => $dataAdmin['name'],
                "admin_approve_token" => $dataAdmin['token']
            ];
            $db->editId("history_payments", $data_edit, $requests['data']['id']);
            echo json_encode(["stt" => true,"data" => "Approved successfully."]);
        }
    }
}