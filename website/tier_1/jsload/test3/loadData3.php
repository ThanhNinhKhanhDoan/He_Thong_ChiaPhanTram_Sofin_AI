<?php
    // Truy vấn tất cả dữ liệu từ collection "tests3" trong database
    $dulieus3 = $db->find("tests3", []);

    // Khởi tạo biến đếm số thứ tự
    $i = 1;

    // Vòng lặp qua từng bản ghi dữ liệu
    foreach ($dulieus3 as $dulieu) {
?>
        <tr>
            <th scope="row"><?=$i++?></th>
            <td><?=$dulieu['name']?></td>
            <td><?=$dulieu['email']?></td>
            <td><?=$dulieu['phone']?></td>
            <td><?=$dulieu['address']?></td>
            <td>
                <a href="<?=set_route_to_link(["public","test3","edit3",$dulieu['_id']->__toString()])?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit"></i> Sửa
                </a>
                <button onclick="deleteId3(`<?=$dulieu['_id']->__toString()?>`)" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i> Xóa
                </button>
            </td>
        </tr>
<?php
    }

    // Nếu không có dữ liệu, hiển thị thông báo
    if(count($dulieus3) == 0) {
?>
    <tr>
        <td colspan="6" class="text-center">Không có dữ liệu</td>
    </tr>
<?php
}
?>