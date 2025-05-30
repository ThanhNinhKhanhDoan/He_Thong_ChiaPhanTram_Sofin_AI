<?php
    header('Content-Type: text/html; charset=utf-8');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $location = $_POST['location'];



    $datas = [
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "location" => $location
    ];

    $dataToInserts = $db->add("tests2", $datas);
    echo "Thêm dữ liệu thành công";
    echo "<br>";
    print_r($dataToInserts);

?>