<script>

    loadData3();

    function add3() {
        // Lấy giá trị từ các trường input
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var phone = document.getElementById('phone').value;
        var address = document.getElementById('address').value;
        
        // Gửi request AJAX POST đến backend
        $.ajax({
            // URL đến endpoint xử lý thêm dữ liệu
            url: '<?=set_route_to_link(["backend","test3","add3"])?>',
            type: 'POST',
            // Dữ liệu gửi đi
            data: { name: name, email : email, password : password, phone : phone, address : address },
            // Xử lý khi request thành công
            success: function(response) {
                if(response.status){
                    $.toast({
                        text: 'Thêm dữ liệu thành công',
                        icon: 'success',
                        position: 'top-right',
                        duration: 10000
                    });
                    loadData3();
                }else{
                    $.toast({
                        text: response.message,
                        icon: 'error',
                        position: 'top-right',
                        duration: 10000
                    });
                }
            },
            // Xử lý khi request thất bại
            error: function(response) {
                $.toast({
                    text: "Lỗi khi thêm dữ liệu",
                    icon: 'error',
                    position: 'top-right',
                    duration: 10000
                });
            }
        });
    }



    


    function deleteId3(id) {
        $.ajax({
            url: '<?=set_route_to_link(["backend","test3","deleteId3"])?>',
            type: 'POST',
            data: { id: id },
            success: function(response) {
                $.toast({
                    text: 'Xóa dữ liệu thành công',
                    icon: 'success',
                    position: 'top-right',
                    duration: 10000
                });
                loadData3();
                // console.log(response);

            },
            error: function(response) {
                $.toast({
                    text: "Lỗi khi xóa dữ liệu",
                    icon: 'error',
                    position: 'top-right',
                    duration: 10000
                });
            }
        });
    }



    function loadData3() {
        $.ajax({
            url: '<?=set_route_to_link(["jsload","test3","loadData3"])?>',
            type: 'GET',
            success: function(response) {
                document.getElementById('loadData3').innerHTML = response;
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

</script>