<?php
    header('Content-Type: text/html; charset=utf-8');
    $id = $_POST['id'];

    $dataToInserts = $db->delId("tests", $id);

?>