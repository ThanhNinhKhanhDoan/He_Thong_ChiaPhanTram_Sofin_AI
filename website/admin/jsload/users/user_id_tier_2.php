<?php
header('Content-Type: application/json');

use Ramsey\Uuid\Uuid;
$dataUsers = $is_login->is_user();

$u_id = $params[3];
$datas = $db->countId("users", $u_id);
if ($datas == 0) {
    echo json_encode(["data" => []]);
} else {
    $dataUsers = $db->findOneId("users", $u_id);
    $dataUsers = $dataUsers[0];


    $where = ["delete_account" => false, "tier_level" => $dataUsers["email"], "roles" => "Tier_2"];
    $count_data = $db->count("users", $where);
    $datas =  $db->find("users", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $total_tier_3 = $db->count("users", ["delete_account" => false, "tier_level" => $dataUsers["email"]."/".$row["email"], "roles" => "Tier_3"]);
            $data_ajax["data"][] = [
                "id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "name" => $row["name"],
                "email" => $row["email"],
                "point" => $row["point"],
                "tier_3" => $total_tier_3,
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>