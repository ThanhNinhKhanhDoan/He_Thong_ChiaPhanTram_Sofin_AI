<?php
header('Content-Type: application/json');

use Ramsey\Uuid\Uuid;
$dataUsers = $is_login->is_user();

$where = ["delete_account" => false, "roles" => "Tier_1"];
$count_data = $db->count("users", $where);
$datas =  $db->find("users", $where);
$data_ajax = [];
if ($count_data > 0) {
    foreach ($datas as $key => $row) {
        $total_tier_2 = $db->count("users", ["delete_account" => false, "tier_level" => $row["email"], "roles" => "Tier_2"]);
        $total_tier_3 = $db->count("users", ["delete_account" => false, "tier_level" => ['$regex' => '^' . $row["email"] . '(/|$)'], "roles" => "Tier_3"]);
        $data_ajax["data"][] = [
            "id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
            "name" => $row["name"],
            "email" => $row["email"],
            "point" => $row["point"],
            "tier_2" => $total_tier_2,
            "tier_3" => $total_tier_3
        ];
    }
    echo json_encode($data_ajax);
} else {
    echo json_encode(["data" => []]);
}
?>