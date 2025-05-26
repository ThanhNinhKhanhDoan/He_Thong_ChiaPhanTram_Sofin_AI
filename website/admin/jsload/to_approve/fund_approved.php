<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    $where = ["status" => "approved"];
    $count_data = $db->count("history_payments", $where);
    $datas =  $db->find("history_payments", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "create_at" => $row["create_at"],
                "u_email" => $row["u_email"],
                "amount" => $row["amount"],
                "transaction_id" => $row["transaction_id"],
                "note" => $row["note"],
                "u_phone" => $row["u_phone"],
                "status" => $row["status"],
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>