<?php

    $id = $_POST['id'];

    $deleteId = $db->delId("tests5", $id);

    if($deleteId){
        $response = [
            "status" => true,
            "message" => "Xóa thành công"
        ];
    }else{
        $response = [
            "status" => false,
            "message" => "Xóa thất bại"
        ];
    }

    echo json_encode($response);
?>