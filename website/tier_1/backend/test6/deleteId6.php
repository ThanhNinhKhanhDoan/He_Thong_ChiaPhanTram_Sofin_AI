<?php
    $id = $_POST['id'];

    $deleteId = $db->delId("tests6", $id);

    if($deleteId){
        $response = [
            "status" => true,
            "message" => "Xoá thành công"
        ];
    }else{
        $response = [
            "status" => false,
            "message" => "Xoá thất bại"
        ];
    }
    echo json_encode($response);

?>