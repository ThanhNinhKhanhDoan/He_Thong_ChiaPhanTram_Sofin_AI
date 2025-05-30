<input type="text" id="name" placeholder="Name">
<br>
<input type="text" id="email" placeholder="Email">
<br>
<input type="text" id="password" placeholder="Password">
<br>
<div id="result"></div>
<button onclick="add()">Add</button>

<hr>
<div class="row" id="loadData">
<?php
    $dulieus = $db->find("tests", []);

foreach ($dulieus as $dulieu) {
?>
<div class="col-md-4 bg-success">
    <a href="<?=set_route_to_link(["public","test","edit",$dulieu['_id']->__toString()])?>"><?=$dulieu['_id']->__toString()?></a>
    <p><?=$dulieu['name']?></p>
    <p><?=$dulieu['email']?></p>
    <p><?=$dulieu['password']?></p>
    <button onclick="deleteId(`<?=$dulieu['_id']->__toString()?>`)">Delete</button>
    <hr>
</div>



<?php
}
?>
</div>
<script>
    function deleteId(id) {
        $.ajax({
            url: '<?=set_route_to_link(["backend","test","deleteId"])?>',
            type: 'POST',
            data: { id: id },
            success: function(response) {
                
            }, 
            error: function(response) {
                console.log(response);
            }
        });
    }
    
    function add() {
        var namevalue = document.getElementById('name').value;
        var emailvalue = document.getElementById('email').value;
        var passwordvalue = document.getElementById('password').value;
        $.ajax({
            url: '<?=set_route_to_link(["backend","test","add"])?>',
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


    function loadData() {
        $.ajax({
            url: '<?=set_route_to_link(["jsload","test","loadData"])?>',
            type: 'GET',
            success: function(response) {
                document.getElementById('loadData').innerHTML = response;
            }, 
            error: function(response) {
                console.log(response);
            }
        });
    }
    
</script>

