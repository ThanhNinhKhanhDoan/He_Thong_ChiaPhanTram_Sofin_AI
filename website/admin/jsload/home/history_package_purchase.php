<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    if ($dataUsers->roles == "Admin") {
        $where = [];
    } else {
        $where = ["u_id" => $dataUsers["_id"]->__toString()];
    }
    $count_data = $db->count("history_package_purchase", $where);
    $datas =  $db->find("history_package_purchase", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "create_at" => $row["create_at"],
                "u_email" => $row["u_email"],
                "u_phone" => $row["u_phone"],
                "status" => $row["status"],
                "plan_name" => $row["plan_name"],
                "duration_days" => $row["duration_days"],
                "bonus_points" => $row["bonus_points"],
                "price" => $row["price"],
                "time_end" => $row["time_end"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>