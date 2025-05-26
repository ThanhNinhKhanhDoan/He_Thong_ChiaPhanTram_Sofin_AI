<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_admin();
if (!$dataUsers || !isset($_GET['delete_status'])) {
    echo json_encode(["data" => []]);
} else {
    if ($_GET['delete_status'] == "true") {
        $delete_status = true;
    } else {
        $delete_status = false;
    }
    $where = ["delete_account" => $delete_status];
    // $where = [];
    $count_data = $db->count("users", $where);
    $datas =  $db->find("users", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "name" => $row["name"],
                "email" => $row["email"],
                "point" => $row["point"],
                "roles" => $row["roles"],
                "telegram" => $row["telegram"],
                "phone" => $row["phone"],
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>