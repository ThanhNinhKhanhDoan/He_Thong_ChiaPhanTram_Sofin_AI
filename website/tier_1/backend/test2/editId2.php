<?php
    $id = $params[3];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $location = $_POST['location'];



    $datas2 = [
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "location" => $location
    ];

    $dataToInserts2 = $db->editId("tests2", $datas2, $id);
    echo "Sửa dữ liệu thành công"; 
    echo "<br>";
    $result = [
        "status" => true,
        "message" => "Sửa dữ liệu thành công",
    ];

    echo json_encode($result);
?>