<?php
// $login = new IsLoggedIn($db);
// $dataUsers = $login->admin();
// if ($dataUsers === false) {
//     echo json_encode(["stt" => false,"data" => ["can't login"]]);
// } else {
// 	require $pathFileIndex;
// }
header('Content-Type: application/json');
$params = path_urls();
require $pathFileIndex;
?>
