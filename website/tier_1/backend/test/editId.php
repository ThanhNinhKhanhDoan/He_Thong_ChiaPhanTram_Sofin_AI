<?php
    header('Content-Type: text/html; charset=utf-8');
    $id = $params[3];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    print_r($name);
    echo "<br>";
    print_r($email);
    echo "<br>";
    print_r($password);

    $datas = [
        "name" => $name,
        "email" => $email,
        "password" => $password
    ];

    $dataToInserts = $db->editId("tests", $datas, $id);

?>