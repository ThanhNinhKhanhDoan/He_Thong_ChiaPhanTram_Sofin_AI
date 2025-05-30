<script>


    function edit4() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var phone = document.getElementById('phone').value;
        var address = document.getElementById('address').value;
        var category = document.getElementById('category').value;

        $.ajax({
            url: '<?=set_route_to_link(["backend","test4","editId4", $params[3]])?>',
            type: 'POST',
            data: { name: name, email: email, password: password, phone: phone, address: address, category: category },
            success: function(response) {
                if(response.status){
                    $.toast({
                        text: 'Cập nhật dữ liệu thành công',
                        icon: 'success',
                        position: 'top-right',
                        duration: 10000
                    });
                    loadData4();
                }else{
                    $.toast({
                        text: response.message,
                        icon: 'error',
                        position: 'top-right',
                        duration: 10000
                    });
                }
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