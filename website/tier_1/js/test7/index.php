<script>


    loadData7();
    function add7(){
        var employeeName = document.getElementById("employeeName").value;
        var employeeEmail = document.getElementById("employeeEmail").value;
        var employeePhone = document.getElementById("employeePhone").value;
        var employeePosition = document.getElementById("employeePosition").value;
        var employeeDepartment = document.getElementById("employeeDepartment").value;

    
        
        $.ajax({
            url: '<?=set_route_to_link(["backend","test7","add7"])?>',
            type: 'POST',
            data:{
                employeeName : employeeName,
                employeeEmail : employeeEmail,
                employeePhone : employeePhone,
                employeePosition : employeePosition,
                employeeDepartment : employeeDepartment
            },

            success: function(response) {
                if(response.status) {
                    $.toast({
                        text: response.message,
                        icon: 'success',
                        position: 'top-right',
                        duration: 10000
                    });
                    loadData7();
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

    



    function loadData7(){
        $.ajax({
            url: '<?=set_route_to_link(["jsload","test7","loadData7"])?>',
            type: 'GET',
            success: function(response) {
                document.getElementById('loadData7').innerHTML = response;
            },
            error: function(response) {
                console.log(response);
            }
        });
    }





    function delete7(id) {
        $.ajax({
            url: '<?=set_route_to_link(["backend","test7","deleteId7"])?>',
            type: 'POST',
            data:{
                id : id
            },

            success: function(response) {
                if(response.status) {
                    $.toast({
                        text: response.message,
                        icon: 'success',
                        position: 'top-right',
                        duration: 10000
                    });
                    loadData7();
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



</script>