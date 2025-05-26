<?php
header('Content-Type: application/json');
$dataUsers = $is_login->is_admin();
if (!$dataUsers || !isset($_GET['status']) || !isset($_GET['date_start']) || !isset($_GET['date_end'])) {
    echo json_encode(["data" => []]);
} else {

    $status = $_GET['status'];
    $date_start = intval($_GET['date_start']);
    $date_end = intval($_GET['date_end']);
    $tier_2_id = $params[3];
    
    $where = ["status" => $status, "create_at" => ['$gte' => $date_start, '$lte' => $date_end], "tier_2_id" => $tier_2_id];
    // $where = [];
    $count_data = $db->count("edu_tier_3", $where);
    $datas =  $db->find("edu_tier_3", $where);
    $data_ajax = [];
    if ($count_data > 0) {
        foreach ($datas as $key => $row) {
            $data_ajax["data"][] = [
                "_id" => $row["_id"]->__toString(), // Convert ObjectId to string directly
                "create_at" => $row["create_at"],
                "name" => $row["name"],
                "representative_name" => $row["representative_name"],
                "phone" => $row["phone"],
                "email" => $row["email"],
                "discount_percent" => $row["discount_percent"],
                "software_discount_percent" => $row["software_discount_percent"],
                "channel_revenue_discount_percent" => $row["channel_revenue_discount_percent"],
                "count_tier_4" => $row["count_tier_4"],
                "u_email" => $row["u_email"]
            ];
        }
        echo json_encode($data_ajax);
    } else {
        echo json_encode(["data" => []]);
    }
}
?>