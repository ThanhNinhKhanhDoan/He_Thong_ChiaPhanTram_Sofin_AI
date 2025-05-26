<?php
header('Content-Type: application/json');

use Ramsey\Uuid\Uuid;
$dataRole = $is_login->is_tier_1();

$datas =  $db->find("users", ["delete_account" => false, "roles" => "Tier_2", "tier_level" => $dataRole->email]);
$data_ajax = [];

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
?>