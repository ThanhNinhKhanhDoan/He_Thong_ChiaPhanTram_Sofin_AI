<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_admin();
if (!$dataUsers || !isset($_GET['status']) || !isset($_GET['date_start']) || !isset($_GET['date_end']) || !isset($_GET['data_type'])) {
    echo json_encode(["data" => []]);
} else {

    $status = $_GET['status'];
    $date_start = intval($_GET['date_start']);
    $date_end = intval($_GET['date_end']);
    $data_type = $_GET['data_type'];
    $where = ["status" => $status, "create_at" => ['$gte' => $date_start, '$lte' => $date_end], "data_type" => $data_type];
    // $where = [];
    $count_data = $db->count("admin_panel_video_cates", $where);
    $datas =  $db->find("admin_panel_video_cates", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "create_at" => $row["create_at"],
                "data_type" => $row["data_type"],
                "name" => $row["name"],
                "count_video_16_9" => $row["count_video_16_9"],
                "count_video_9_16" => $row["count_video_9_16"],
                "count_storage" => $row["count_storage"],
                "u_email" => $row["u_email"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>