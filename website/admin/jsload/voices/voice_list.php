<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    $where = ["u_id" => $dataUsers["_id"]->__toString()];
    $count_data = $db->count("voices", $where);
    $datas =  $db->find("voices", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "type" => $row["type"],
                "status" => $row["status"],
                "create_at" => $row["create_at"],
                "config_voice" => $row["config_voice"],
                "group" => $row["group"],
                "name" => $row["name"],
                "path_voice" => $row["path_voice"],
                "text" => $row["text"],
                "play_time" => $row["play_time"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>