
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
