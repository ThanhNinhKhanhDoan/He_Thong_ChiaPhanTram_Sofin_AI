<!-- Form nhập liệu: 4 trường input cho người dùng nhập thông tin -->
<input type="text" id="name" placeholder="Name">
<br>
<input type="text" id="email" placeholder="Email">
<br>
<input type="text" id="password" placeholder="Password">
<br>
<input type="text" id="location" placeholder="Location">
<br>
<!-- Phần hiển thị kết quả sau khi thực hiện các thao tác -->
<div id="result"></div>
<!-- Nút Add để gọi hàm add2() khi click -->
<button onclick="add2()">Add</button>

<hr>
<!-- Container để hiển thị dữ liệu từ database -->
<div class="row" id="loadData2">
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
</div>




<script>
    /**
     * Hàm add2() - Xử lý việc thêm dữ liệu mới
     * 1. Lấy giá trị từ các trường input
     * 2. Gửi request AJAX đến backend để xử lý
     * 3. Hiển thị kết quả trả về
     */
    function add2() {
        // Lấy giá trị từ các trường input
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var location = document.getElementById('location').value;
        
        // Gửi request AJAX POST đến backend
        $.ajax({
            // URL đến endpoint xử lý thêm dữ liệu
            url: '<?=set_route_to_link(["backend","test2","add2"])?>',
            type: 'POST',
            // Dữ liệu gửi đi
            data: { name: name, email : email, password : password, location : location },
            // Xử lý khi request thành công
            success: function(response) {
                loadData2();
            },
            // Xử lý khi request thất bại
            error: function(response) {
                console.log(response);
            }
        });
    }



    function deleteId2(id) {
        $.ajax({
            url: '<?=set_route_to_link(["backend","test2","deleteId2"])?>',
            type: 'POST',
            data: { id: id },
            success: function(response) {
                loadData2();
            },
            error: function(response) {
                console.log(response);
            }
        });
    }


    function loadData2() {
        $.ajax({
            url: '<?=set_route_to_link(["jsload","test2","loadData2"])?>',
            type: 'GET',
            success: function(response) {
                document.getElementById('loadData2').innerHTML = response;
            },
            error: function(response) {
                console.log(response);
            }
        });
    }
</script>