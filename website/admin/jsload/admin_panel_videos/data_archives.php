<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_admin();
$dir_id = $params[3];
if (!$dataUsers || !isset($_GET['status']) || !isset($_GET['date_start']) || !isset($_GET['date_end'])) {
    echo json_encode(["data" => []]);
} else {

    $status = $_GET['status'];
    $date_start = intval($_GET['date_start']);
    $date_end = intval($_GET['date_end']);
    $where = ["status" => $status, "dir_id" => $dir_id, "create_at" => ['$gte' => $date_start, '$lte' => $date_end]];
    // $where = [];
    $count_data = $db->count("admin_panel_video_archives", $where);
    $datas =  $db->find("admin_panel_video_archives", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "create_at" => $row["create_at"],
                "name" => $row["name"],
                "count_video_16_9" => $row["count_video_16_9"],
                "count_video_9_16" => $row["count_video_9_16"],
                "keywords" => $row["keywords"],
                "u_email" => $row["u_email"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>