<?php
    //Truy vấn tất cả dữ liệu từ collection "tests6" trong database
    // Truy vấn tất cả dữ liệu từ collection "tests6" trong database
    // Mảng rỗng [] ở đây là điều kiện tìm kiếm, khi để rỗng nghĩa là không có điều kiện lọc nào
    // Tương đương với câu lệnh SQL: SELECT * FROM tests6
    $dulieu6 = $db->find("tests6", []);

    //Khởi tạo biến đếm số thứ tự
    $i = 1;

    //Duyệt qua từng dòng dữ liệu trong mảng $dulieu6
    foreach($dulieu6 as $dulieu){
        //In ra số thứ tự
        // echo $i;
        //Tăng biến đếm lên 1
        // $i++;
    

?>

        <tr>
            <th scope="row"><?=$i++?></th>
            <td><?=$dulieu["fullName"]?></td>
            <td><?=$dulieu["dob"]?></td>
            <td><?=$dulieu["gender"]?></td>
            <td><?=$dulieu["idCard"]?></td>
            <td><?=$dulieu["email"]?></td>
            <td><?=$dulieu["phone"]?></td>
            <td><?=$dulieu["address"]?></td>
            <td><?=$dulieu["education"]?></td>
            <td><?=$dulieu["note"]?></td>
            <td>
                <a href ="<?=set_route_to_link(["public","test6","edit6",$dulieu['_id']->__toString()])?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit"></i>Sửa
                </a>
                <button class="btn btn-danger" onclick="delete6('<?=$dulieu['_id']->__toString()?>')" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>Xóa
                </button>

            </td>
        </tr>



<?php
    }
    if(count($dulieu6) == 0){
       
?>
        <tr>
            <td colspan="10" class="text-center">Chưa có dữ liệu. Vui lòng nhập thông tin cá nhân.</td>
        </tr>
<?php
    }
?>



