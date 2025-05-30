<?php
    $dulieu = $db->findOneId("tests2", $params[3]);
    $dulieu = $dulieu[0];
?>

    <input type="text"  id="name" value="<?=$dulieu['name']?>">
    <input type="text"  id="email" value="<?=$dulieu['email']?>">
    <input type="text"  id="password" value="<?=$dulieu['password']?>">
    <input type="text"  id="location" value="<?=$dulieu['location']?>">
    <button type="submit" onclick="edit2()">Edit</button>

<script>
    function edit2() {
        var nameEdit = document.getElementById('name').value;
        var emailEdit = document.getElementById('email').value;
        var passwordEdit = document.getElementById('password').value;
        var locationEdit = document.getElementById('location').value;
        $.ajax({
            url: '<?=set_route_to_link(["backend","test2","editId2",$params[3]])?>',
            type: 'POST',
            data: { name: nameEdit, email : emailEdit, password : passwordEdit, location : locationEdit },
            success: function(response) {
                console.log(response);
                document.getElementById('result').innerHTML = response;
            },
            error: function(response) {
                console.log(response);
            }
        });
    }
</script>