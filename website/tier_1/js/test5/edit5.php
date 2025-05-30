<script>

    function edit5() {   
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var address = document.getElementById('address').value;
        var category = document.getElementById('category').value;
        var message = document.getElementById('message').value;


        console.log(name, email, password, address, category, message);
        
        $.ajax({
            url: '<?=set_route_to_link(["backend","test5","editId5", $params[3]])?>',
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
            }

        });
    }



</script>

