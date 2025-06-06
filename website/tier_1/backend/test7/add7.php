<?php
    // Lấy dữ liệu từ form gửi lên thông qua phương thức POST
    // $_POST là một mảng global chứa tất cả dữ liệu từ form HTML gửi lên bằng phương thức POST
    // Ví dụ: Nếu có một form với phương thức POST và các trường input như sau:
    // <form method="POST">
    //     <input type="text" name="fullName" />
    //     <input type="text" name="dob" />
    //     <input type="text" name="gender" />
    //     <input type="text" name="idCard" />
    //     <input type="text" name="email" />
    //     <input type="text" name="phone" />
    //     <input type="text" name="address" />
    //     <input type="text" name="education" />
    //     <input type="text" name="note" />

    // Khi người dùng nhấn nút submit, dữ liệu từ các trường input sẽ được gửi đến server
    // Dữ liệu sẽ được lưu trong mảng $_POST
    
    $add_fullName = $_POST["employeeName"];
    $add_email = $_POST["employeeEmail"];
    $add_phone = $_POST["employeePhone"];
    $add_chucvu = $_POST["employeePosition"];
    $add_phongban = $_POST["employeeDepartment"];
    

    
    $check_trung_email = $db->findOne("tests7", ["employeeEmail" => $add_email]);

    if($check_trung_email) {
        echo json_encode(["status"=>false, "message"=>"Hehe mail đã tồn tại rồi cưng"]);
        exit();
    }




    $datas = [
        "employeeName" => $add_fullName,
        "employeeEmail" => $add_email,
        "employeePhone" => $add_phone,
        "employeePosition" => $add_chucvu,
        "employeeDepartment" => $add_phongban
    ];





    $add_Data = $db->add("tests7", $datas);

    if($add_Data){
        echo json_encode([
            "status" => true,
            "message" => "Thêm dữ liệu thành công"
        ]);
    }else{
        echo json_encode([
            "status" => false,
            "message" => "Thêm dữ liệu thất bại"
        ]);
    }
    
     
?>