<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    $id = $params[3];
    $where = ["folder_id" => $id];
    $count_data = $db->count("video_data_ids", $where);
    $datas =  $db->find("video_data_ids", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "name" => $row["name"],
                "group" => $row["group"],
                "description" => $row["description"],
                "type" => $row["type"],
                "url" => $row["url"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>