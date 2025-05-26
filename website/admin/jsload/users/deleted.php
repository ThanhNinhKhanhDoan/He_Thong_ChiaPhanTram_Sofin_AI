<?php
header('Content-Type: application/json');

use Ramsey\Uuid\Uuid;
$dataUsers = $is_login->is_user();

$where = ["delete_account" => true];
$count_data = $db->count("users", $where);
$datas =  $db->find("users", $where);
$data_ajax = [];
if ($count_data > 0) {
    foreach ($datas as $key => $row) {
        $data_ajax["data"][] = [
            "id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
            "email" => $row["email"]."<br>(".$row["name"].")",
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
?>