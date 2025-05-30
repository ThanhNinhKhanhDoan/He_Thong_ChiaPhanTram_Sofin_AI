<?php
    // Truy vấn tất cả dữ liệu từ collection "tests2" trong database
    $dulieus2 = $db->find("tests2", []);

    // Vòng lặp qua từng bản ghi dữ liệu
    foreach ($dulieus2 as $dulieu) {
?>
        <!-- Mỗi bản ghi được hiển thị trong một div có định dạng bootstrap -->
        <div class="col-md-4 bg-success">
            <!-- Hiển thị các trường thông tin của bản ghi -->
            <p><?=$dulieu['name']?></p>
            <p><?=$dulieu['email']?></p>
            <p><?=$dulieu['password']?></p>
            <p><?=$dulieu['location']?></p>
            <!-- Link để chuyển đến trang chỉnh sửa bản ghi tương ứng -->
            <a href="<?=set_route_to_link(["public","test2","edit2",$dulieu['_id']->__toString()])?>">Edit</a>  
            
            <button onclick="deleteId2(`<?=$dulieu['_id']->__toString()?>`)">Delete</button>
        </div>
<?php
    }
?>
