<?php
    $id = $params[3];
    $edit_employeeName = $_POST["employeeName"];
    $edit_employeeEmail = $_POST["employeeEmail"];
    $edit_employeePhone = $_POST["employeePhone"];
    $edit_employeePosition = $_POST["employeePosition"];
    $edit_employeeDepartment = $_POST["employeeDepartment"];


    $datas = [
        "employeeName" => $edit_employeeName,
        "employeeEmail" => $edit_employeeEmail,
        "employeePhone" => $edit_employeePhone,
        "employeePosition" => $edit_employeePosition,
        "employeeDepartment" => $edit_employeeDepartment
    ];




    $edit_data = $db->editId("tests7", $datas, $id);

    
    if ($edit_data) {
        echo json_encode([
            "status" => true,
            "message" => "Sửa oke rồi đó"
        ]);
    }else{
        echo json_encode([
            "status" => false,
            "message" => "Chưa sửa được nhé!"
        ]);
    }
?>