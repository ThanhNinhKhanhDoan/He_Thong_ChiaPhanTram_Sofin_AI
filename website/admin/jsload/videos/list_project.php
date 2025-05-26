<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    $where = ["u_id" => $dataUsers["_id"]->__toString()];
    $count_data = $db->count("video_projects", $where);
    $datas =  $db->find("video_projects", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "update_at" => $row["update_at"],
                "status" => $row["status"],
                "group" => $row["group"],
                "name" => $row["name"],
                "path_output" => $row["path_output"],
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>