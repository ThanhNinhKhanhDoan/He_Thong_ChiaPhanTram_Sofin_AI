<?php
    // Thiết lập định dạng nội dung trả về là HTML với bảng mã UTF-8
    // để hỗ trợ hiển thị tiếng Việt và các ký tự đặc biệt

    // header('Content-Type: text/html; charset=utf-8');



    
    // Lấy dữ liệu từ form gửi lên thông qua phương thức POST
    // $_POST là một mảng global chứa tất cả dữ liệu từ form HTML gửi lên bằng phương thức POST
    
    // Lấy ID từ tham số URL thứ 4 (index bắt đầu từ 0)
    // $params là một mảng chứa các phần của URL được truyền vào
    // Ví dụ: từ URL .../backend/test4/editId4/123, $params[3] sẽ chứa giá trị "123"
    $id = $params[3];
    $name = $_POST['name'];         // Lấy giá trị từ trường 'name'
    $email = $_POST['email'];       // Lấy giá trị từ trường 'email'
    $password = $_POST['password']; // Lấy giá trị từ trường 'password'
    $phone = $_POST['phone'];       // Lấy giá trị từ trường 'phone'
    $address = $_POST['address'];   // Lấy giá trị từ trường 'address'
    $category = $_POST['category']; // Lấy giá trị từ trường 'category'


    // Kiểm tra xem email đã tồn tại trong database chưa
    $existingUser = $db->findOne("tests4", ["email" => $email, "_id" => $id]);

    // Nếu email đã tồn tại, hiển thị thông báo lỗi và dừng xử lý
    if (count($existingUser) > 0) {
        echo json_encode(["status" => false, "message" => "Email đã tồn tại trong hệ thống. Vui lòng sử dụng email khác."]);
        exit;
    }



    // Tạo một mảng dữ liệu để chuẩn bị thêm vào database
    // Cấu trúc key => value nơi key là tên cột trong database và value là giá trị sẽ lưu
    $datas = [
        "name" => $name,           // Lưu tên người dùng
        "email" => $email,         // Lưu email người dùng
        "password" => $password,   // Lưu mật khẩu người dùng (lưu ý: trong thực tế nên mã hóa mật khẩu)
        "phone" => $phone,         // Lưu số điện thoại người dùng
        "address" => $address,      // Lưu địa chỉ người dùng
        "category" => $category    // Lưu danh mục người dùng
    ];


    // Gọi phương thức add của đối tượng $db để thêm dữ liệu vào collection "tests3"
    // Biến $db có thể đã được khởi tạo ở nơi khác (ví dụ: kết nối đến MongoDB)
    $dataToInserts = $db->editId("tests4", $datas, $id);
    
    // Hiển thị thông báo thành công
    echo json_encode(["status" => true, "message" => "Cập nhật dữ liệu thành công"]);
?>