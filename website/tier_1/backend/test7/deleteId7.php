<?php

    $id = $_POST['id'];

    $deleteId = $db->delId("tests7",$id);

    if ($deleteId) {
        $response = [
            "status" => true,
            "message" => "Xoá Done"
        ];
    }else{
        $response = [
            "status" => false,
            "message" => "Xoá False"
        ];
    }

    echo json_encode($response);



?>