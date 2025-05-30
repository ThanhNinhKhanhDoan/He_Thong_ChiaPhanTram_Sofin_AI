<?php

    $id = $_POST['id'];


    $dataToInsert = $db->delId("tests4", $id);

    if($dataToInsert){
        echo json_encode(["status" => true, "message" => "Xóa dữ liệu thành công"]);
    }else{
        echo json_encode(["status" => false, "message" => "Xóa dữ liệu thất bại"]);
    }

?>