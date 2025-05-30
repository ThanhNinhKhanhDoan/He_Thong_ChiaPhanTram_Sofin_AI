<?php
    header('Content-Type: text/html; charset=utf-8');

    $id = $_POST['id'];


    $dataToInserts3 = $db->delId("tests3", $id);
    echo "Xóa dữ liệu thành công"; 
    echo "<br>";
    $result = [
        "status" => true,
        "message" => "Xóa dữ liệu thành công",
    ];

    echo json_encode($result);
?>