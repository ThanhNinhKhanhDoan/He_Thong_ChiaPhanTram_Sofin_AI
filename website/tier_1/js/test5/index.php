<script>
    loadData5();


    function add5() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var address = document.getElementById('address').value;
        var category = document.getElementById('category').value;
        var message = document.getElementById('message').value;




        if(name == '' || email == '' || password == '' || address == '' || category == '' || message == ''){
            $.toast({
                text: "Vui lòng nhập đầy đủ thông tin",
                icon: "error",
                position: "top-right",
                duration: 10000
            });
            return;
        }

        console.log(name, email, password, address, category, message);
        
        $.ajax({
            url: '<?=set_route_to_link(["backend","test5","add5"])?>',
            type: 'POST',
            data: {
                name: name,
                email: email,
                password: password,
                address: address,
                category: category,
                message: message           
            },

            success: function(response) {
                if(response.status){
                    $.toast({
                        text: response.message,
                        icon: "success",
                        position: "top-right",
                        duration: 10000
                    });
                    loadData5();
                }else{
                    $.toast({
                        text: response.message,
                        icon: "error",
                        position: "top-right",
                        duration: 10000
                    });
                }
            },

            error: function(response){
                $.toast({
                    text: response.message,
                    icon: "error",
                    position: "top-right",
                    duration: 10000
                });
                loadData5();
            }

        });
    }




    function loadData5() {
        $.ajax({
            url: '<?=set_route_to_link(["jsload","test5","loadData5"])?>',
            type: 'GET',
            success: function(response) {
                document.getElementById('loadData5').innerHTML = response;
            },
            error: function(response) {
                console.log(response);
            }
        });
    }


    function delete5(id) {
        $.ajax({
            url: '<?=set_route_to_link(["backend", "test5", "delete5"])?>',
            type: 'POST',
            data: {
                id: id
            },
            success: function(response){
                if(response.status){
                    $.toast({
                        text: response.message,
                        icon: "success",
                        position: "top-right",
                        duration: 10000
                    });
                    loadData5();
                }else{
                    $.toast({
                        text: response.message,
                        icon: "error",
                        position: "top-right",
                        duration: 10000
                    });
                }
            },
            error: function(response){
                $.toast({
                    text: response.message,
                    icon: "error",
                    position: "top-right",
                    duration: 10000
                });
            }
        });
    }

</script>
