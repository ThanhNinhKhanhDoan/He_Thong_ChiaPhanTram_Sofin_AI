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

    $addFullName = $_POST['fullName'];
    $addDob = $_POST['dob'];
    $addGender = $_POST['gender'];
    $addIdCard = $_POST['idCard'];
    $addEmail = $_POST['email'];
    $addPhone = $_POST['phone'];
    $addAddress = $_POST['address'];
    $addEducation = $_POST['education'];
    $addNote = $_POST['note'];


    // Kiểm tra xem dữ liệu đã được gửi đến server chưa
    $checkData = $db->findOne("tests6", ["email" => $addEmail]);

    if($checkData){
        echo json_encode(["status" => false, "message" => "Email đã tồn tại"]);
        exit();
    }


    // Tạo một mảng dữ liệu để chuẩn bị thêm vào database
    // Cấu trúc key => value nơi key là tên cột trong database và value là giá trị sẽ lưu
    $data = [
        "fullName" => $addFullName, // Lưu tên người dùng
        "dob" => $addDob, // Lưu ngày sinh
        "gender" => $addGender, // Lưu giới tính
        "idCard" => $addIdCard, // Lưu số CMND/CCCD
        "email" => $addEmail, // Lưu địa chỉ email
        "phone" => $addPhone, // Lưu số điện thoại
        "address" => $addAddress, // Lưu địa chỉ
        "education" => $addEducation, // Lưu trình độ học vấn
        "note" => $addNote // Lưu ghi chú
    ];




    // Gọi phương thức add của đối tượng $db để thêm dữ liệu vào collection "tests6"
    // Biến $db có thể đã được khởi tạo ở nơi khác (ví dụ: kết nối đến MongoDB)
    $addData = $db->add("tests6", $data);
    



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