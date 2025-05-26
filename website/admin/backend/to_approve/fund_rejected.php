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
        if ($data_ids['status'] == "rejected") {
            $error["id"][] = "Transaction ID already rejected.";
        }

        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            
            $data_edit = [
                "status" => "rejected",
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