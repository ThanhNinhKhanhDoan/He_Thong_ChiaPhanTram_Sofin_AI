<?php
use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_user();
if (!$dataRole) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "amountPaid" => ["minNumber=100000","abs"],
        "transactionId" => [],
        "paymentNote" => []
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    $count_payment_history = $db->count("history_payments", ["u_id" => $dataRole["_id"]->__toString(), "status" => "pending"]);
    if ($count_payment_history >= 1) {
        $error["amountPaid"][] = "You currently have a payment request pending approval. Please wait for it to be successfully approved before proceeding with another request.";
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $datas = [
            "u_id" => $dataRole["_id"]->__toString(),
            "u_email" => $dataRole["email"],
            "u_name" => $dataRole["name"],
            "u_token" => $dataRole["token"],
            "u_tier_level" => $dataRole["tier_level"],
            "u_ref_level" => $dataRole["ref_level"],
            "u_phone" => $dataRole["phone"],
            "u_telegram" => $dataRole["telegram"],
            "admin_approve_id" => "",
            "admin_approve_email" => "",
            "admin_approve_name" => "",
            "admin_approve_token" => "",
            "admin_approve_note" => "",
            "status" => "pending",
            "amount" => intval($requests['data']['amountPaid']),
            "transaction_id" => $requests['data']['transactionId'],
            "note" => $requests['data']['paymentNote']
        ];

        $dataToInserts = $db->add("history_payments", $datas);
        echo json_encode(["stt" => true,"data" => $dataToInserts]);
    }
}