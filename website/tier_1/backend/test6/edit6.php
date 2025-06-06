<?php

    $id = $params[3];
    $editFullName = $_POST['fullName'];
    $editDob = $_POST['dob'];
    $editGender = $_POST['gender'];
    $editIdCard = $_POST['idCard'];
    $editEmail = $_POST['email'];
    $editPhone = $_POST['phone'];
    $editAddress = $_POST['address'];
    $editEducation = $_POST['education'];
    $editNote = $_POST['note'];

    


    // Kiểm tra xem dữ liệu đã được gửi đến server chưa
    // $checkData = $db->findOne("tests6", ["email" => $addEmail]);

    // if($checkData){
    //     echo json_encode(["status" => false, "message" => "Email đã tồn tại"]);
    //     exit();
    // }


    // Tạo một mảng dữ liệu để chuẩn bị thêm vào database
    // Cấu trúc key => value nơi key là tên cột trong database và value là giá trị sẽ lưu
    $data = [
        "fullName" => $editFullName, // Lưu tên người dùng
        "dob" => $editDob, // Lưu ngày sinh
        "gender" => $editGender, // Lưu giới tính
        "idCard" => $editIdCard, // Lưu số CMND/CCCD
        "email" => $editEmail, // Lưu địa chỉ email
        "phone" => $editPhone, // Lưu số điện thoại
        "address" => $editAddress, // Lưu địa chỉ
        "education" => $editEducation, // Lưu trình độ học vấn
        "note" => $editNote // Lưu ghi chú
    ];




    // Gọi phương thức add của đối tượng $db để thêm dữ liệu vào collection "tests6"
    // Biến $db có thể đã được khởi tạo ở nơi khác (ví dụ: kết nối đến MongoDB)
    $addData = $db->editId("tests6", $data, $id);
    


    // Kiểm tra kết quả của việc thêm dữ liệu
    if($addData){
        // Nếu thêm thành công, trả về response với status true và thông báo thành công
        echo json_encode([
            "status" => true, 
            "message" => "Thêm dữ liệu thành công"
        ]);
    } else {
        // Nếu thêm thất bại, trả về response với status false và thông báo thất bại
        echo json_encode([
            "status" => false, 
            "message" => "Thêm dữ liệu thất bại"
        ]);
    }




?>