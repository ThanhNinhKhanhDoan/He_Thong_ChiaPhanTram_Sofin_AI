<script>

    function edit7() {
        var employeeName = document.getElementById("employeeName").value;
        var employeeEmail = document.getElementById("employeeEmail").value;
        var employeePhone = document.getElementById("employeePhone").value;
        var employeePosition = document.getElementById("employeePosition").value;
        var employeeDepartment = document.getElementById("employeeDepartment").value;
        


        $.ajax({
            url: '<?=set_route_to_link(["backend","test7","edit7", $params[3]])?>',
            type: 'POST',
            data: {
                employeeName : employeeName,
                employeeEmail : employeeEmail,
                employeePhone : employeePhone,
                employeePosition : employeePosition,
                employeeDepartment : employeeDepartment
            },

            success: function(response) {
                if(response){
                    $.toast({
                        text: response.message,
                        icon: "success",
                        position: "top-right",
                        duration: 10000
                    });
                }else{
                    $.toast({
                        text: response.message,
                        icon: "error",
                        position: "top-right",
                        duration: 10000
                    });
                }
                
            },

            error: function(reponse) {
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