<?php
    // Truy vấn tất cả dữ liệu từ collection "tests3" trong database
    $dulieus4 = $db->find("tests4", []);

    // Khởi tạo biến đếm số thứ tự
    $i = 1;

    // Vòng lặp qua từng bản ghi dữ liệu
    foreach ($dulieus4 as $dulieu) {
?>
        <!-- 
        Đây là phần tạo từng hàng trong bảng dữ liệu:
        - <tr>: Tạo một hàng mới trong bảng
        - <th scope="row"><?=$i++?>: Hiển thị số thứ tự và tự động tăng biến đếm sau khi hiển thị
        - Các thẻ <td> hiển thị nội dung từ mảng $dulieu:
          + <?=$dulieu['name']?>: Hiển thị tên người dùng
          + <?=$dulieu['email']?>: Hiển thị email
          + <?=$dulieu['password']?>: Hiển thị mật khẩu
          + <?=$dulieu['phone']?>: Hiển thị số điện thoại
          + <?=$dulieu['address']?>: Hiển thị địa chỉ
          + <?=$dulieu['category']?>: Hiển thị danh mục
        - Cột cuối cùng chứa các nút thao tác:
          + Nút "Sửa": Link đến trang edit4 với ID của bản ghi được truyền vào URL
          + Nút "Xóa": Gọi hàm JavaScript deleteData4() khi click, truyền vào ID của bản ghi
        - <?=$dulieu['_id']->__toString()?> chuyển đổi ID của MongoDB từ object sang chuỗi để sử dụng
        -->
        
        <tr>
            <th scope="row"><?=$i++?></th>
            <td><?=$dulieu['name']?></td>
            <td><?=$dulieu['email']?></td>
            <td><?=$dulieu['password']?></td>
            <td><?=$dulieu['phone']?></td>
            <td><?=$dulieu['address']?></td>
            <td><?=$dulieu['category']?></td>
            <td>
                <a href="<?=set_route_to_link(["public","test4","edit4",$dulieu['_id']->__toString()])?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit"></i> Sửa
                </a>
                <button onclick="deleteData4(`<?=$dulieu['_id']->__toString()?>`)" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i> Xóa
                </button>
            </td>
        </tr>
<?php
    }

    // Nếu không có dữ liệu, hiển thị thông báo
    if(count($dulieus4) == 0) {
?>
    <tr>
        <td colspan="7" class="text-center">Không có dữ liệu</td>
    </tr>
<?php
}
?>


