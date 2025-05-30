<?php
$dulieu = $db->findOneId("tests", $params[3]);
$dulieu = $dulieu[0];
?>

    <input type="text"  id="name" value="<?=$dulieu['name']?>">
    <input type="text"  id="email" value="<?=$dulieu['email']?>">
    <input type="text"  id="password" value="<?=$dulieu['password']?>">
    <button type="submit" onclick="edit()">Edit</button>


<script>
    function edit() {
        var namevalue = document.getElementById('name').value;
        var emailvalue = document.getElementById('email').value;
        var passwordvalue = document.getElementById('password').value;
        $.ajax({
            url: '<?=set_route_to_link(["backend","test","editId",$params[3]])?>',
            type: 'POST',
            data: { name: namevalue, email : emailvalue, password : passwordvalue },
            success: function(response) {
                console.log(response);
                document.getElementById('result').innerHTML = response;
            }, 
            error: function(response) {
                console.log(response);
                document.getElementById('result').innerHTML = response;
            }
        });
    }
</script>