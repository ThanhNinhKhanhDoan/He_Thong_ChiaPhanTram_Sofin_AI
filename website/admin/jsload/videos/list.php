<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    
    

    $where = ["data_type" => "video_themes"];
    $count_data = $db->count("video_datas", $where);
    $datas =  $db->find("video_datas", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "group" => $row["group"],
                "name" => $row["name"],
                "description" => $row["description"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
    
    
}
?>