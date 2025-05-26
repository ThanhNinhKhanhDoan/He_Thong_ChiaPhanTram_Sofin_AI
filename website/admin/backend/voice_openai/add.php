<?php
use Ramsey\Uuid\Uuid;
$dataAdmin = $is_login->is_admin();
if (!$dataAdmin) {
    echo json_encode(["stt" => false,"data" => [["email" => "You are not authorized to access this page."]]]);
} else {
    $rules = [
        "gender" => ["maxLen=10000","minLen=1"],
        "name" => ["maxLen=10000","minLen=1"],
        "id" => ["maxLen=10000","minLen=1"],
        "prompt" => ["maxLen=10000","minLen=1"],
        "description" => ["maxLen=10000","minLen=1"]
    ];
    $requests = get_requests("POST", $rules);
    $error = [];
    if ($requests['stt'] === false) {
        $error = $requests['data'];
    }

    if (count($error) > 0) {
        echo json_encode(["stt" => false,"data" => $error]);
    } else {
        $count_email = $db->count("voice_openais", ["name" => $requests['data']['name']]);
        if ($count_email > 0) {
            $error["name"][] = "Tên giọng nói đã tồn tại.";
        }


        if (count($error) > 0) {
            echo json_encode(["stt" => false,"data" => $error]);
        } else {
            $datas = [
                "id" => $requests['data']['id'],
                "gender" => $requests['data']['gender'],
                "name" => $requests['data']['name'],
                "prompt" => $requests['data']['prompt'],
                "description" => $requests['data']['description']
            ];

            $dataToInserts = $db->add("voice_openais", $datas);
            echo json_encode(["stt" => true,"data" => $dataToInserts]);
        }
    }
}