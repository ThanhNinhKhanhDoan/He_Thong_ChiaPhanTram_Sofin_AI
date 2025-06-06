<?php
    $dulieu7 = $db->find("tests7", []);
    $i = 1;

    foreach($dulieu7 as $dulieu) {
        
?>




        <tr>
            <th scope="row"><?=$i++?></th>
            <td class="fw-semibold"><?=$dulieu['employeeName']?></td>
            <td class="text-muted"><?=$dulieu["employeeEmail"]?></td>
            <td class="text-muted"><?=$dulieu["employeePhone"]?></td>
            <td><span class="badge badge-position"><?=$dulieu["employeePosition"]?></span></td>
            <td><span class="badge badge-department"><?=$dulieu["employeeDepartment"]?></span></td>
            <td class="text-center">
                <a href ="<?=set_route_to_link(["public","test7","edit7",$dulieu['_id']->__toString()])?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit"></i>Sửa
                </a>
                <button onclick="delete7('<?=$dulieu['_id']->__toString()?>')" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>Xóa
                </button>
            </td>
        </tr>


<?php
    }
    if(count($dulieu7) == 0){
?>
        <tr>
            <td colspan="8" class="text-center">Chưa có dữ liệu. Vui lòng nhập thông tin cá nhân.</td>
        </tr>
<?php
    }
?>