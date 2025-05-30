<script>
    loadData4();
    function add4() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var phone = document.getElementById('phone').value;
        var address = document.getElementById('address').value;
        var category = document.getElementById('category').value;



        $.ajax({
            url: '<?=set_route_to_link(["backend", "test4", "add4"])?>',
            type: 'POST',
            data: {
                name: name,
                email: email,
                password: password,
                phone: phone,
                address: address,
                category: category
            },
            success: function(response) {
                if(response.status){
                    $.toast({
                        text: 'Thêm dữ liệu thành công',
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
                    text: "Lỗi khi thêm dữ liệu",
                    icon: 'error',
                    position: 'top-right',
                    duration: 10000
                });
            }
        });

    }





    function deleteData4(id) {
        $.ajax({
            url: '<?=set_route_to_link(["backend", "test4", "deleteId4"])?>',
            type: 'POST',
            data: {id: id},
            success: function(response) {
                console.log(response);
                if(response.status){
                    $.toast({
                        text: response.message,
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
                    text: response.message,
                    icon: 'error',
                    position: 'top-right',
                    duration: 10000
                });
            }
        });
    }


    function loadData4() {
        $.ajax({
            url: '<?=set_route_to_link(["jsload","test4","loadData4"])?>',
            type: 'GET',
            success: function(response) {
                document.getElementById('loadData4').innerHTML = response;
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

</script>




