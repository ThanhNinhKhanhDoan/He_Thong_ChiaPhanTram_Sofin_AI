<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_user();

if (!$dataUsers) {
    echo json_encode(["data" => []]);
} else {
    $where = [];
    $count_data = $db->count("effect_gifs", $where);
    $datas =  $db->find("effect_gifs", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "group" => $row["group"],
                "name" => $row["name"],
                "description" => $row["description"],
                "path_gif" => $row["path_gif"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>