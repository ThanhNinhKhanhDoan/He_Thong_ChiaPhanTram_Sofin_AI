<script>
    function edit3() {
        var nameEdit = document.getElementById('name').value;
        var emailEdit = document.getElementById('email').value;
        var passwordEdit = document.getElementById('password').value;
        var phoneEdit = document.getElementById('phone').value;
        var addressEdit = document.getElementById('address').value;
        $.ajax({
            url: '<?=set_route_to_link(["backend","test3","editId3",$params[3]])?>',
            type: 'POST',
            data: { name: nameEdit, email : emailEdit, password : passwordEdit, phone : phoneEdit, address : addressEdit },
            success: function(response) {
                $.toast({
                    text: 'Cập nhật dữ liệu thành công',
                    icon: 'success',
                    position: 'top-right',
                    duration: 10000
                });

            },
            error: function(response) {
                $.toast({
                    text: "Lỗi khi cập nhật dữ liệu",
                    icon: 'error',
                    position: 'top-right',
                    duration: 10000
                });
            }
        });
    }


    


</script>