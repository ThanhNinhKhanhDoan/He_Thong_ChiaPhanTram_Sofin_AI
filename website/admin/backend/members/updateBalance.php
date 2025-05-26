<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["point" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "id" => ["maxLen=1000","minLen=5"],
        "point" => ["abs","minNumber=1000","maxNumber=1000000000"],
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {

        $count_id = $db->countId("users", $requests['data']['id']);
        if ($count_id < 1) {
            $error["id"][] = "User not found.";
        }
        $data_ids = $db->findOneId("users", $requests['data']['id']);
        $data_ids = $data_ids[0];
        if ($data_ids['roles'] == "Admin") {
            $error["id"][] = "You cannot edit the admin account.";
        }

        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $data_edit = [
                "point" => $requests['data']['point'],
            ];
            $point_old = abs(intval($data_ids['point']));
            $point_new = $point_old + abs(intval($requests['data']['point']));
            $point = abs(intval($point_new));
            
            $data_edit["point"] = $point;

            $db->editId("users", $data_edit, $requests['data']['id']);
            echo json_encode(["stt" => true,"data" => $point]);
        }
    }
}