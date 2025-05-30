<?php 
    $id = $params[3];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $category = $_POST['category'];
    $message = $_POST['message'];
    


    $datas = [
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "address" => $address,
        "category" => $category,
        "message" => $message
    ];

    $dataToEdit = $db->editId("tests5", $datas, $id);
    

    if($dataToEdit){
        echo json_encode(["status" => true, "message" => "Cập nhật dữ liệu thành công"]);
    }else{
        echo json_encode(["status" => false, "message" => "Cập nhật dữ liệu thất bại"]);
    }



?>