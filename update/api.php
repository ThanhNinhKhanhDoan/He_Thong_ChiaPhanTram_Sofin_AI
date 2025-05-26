<?php
header('Content-Type: application/json');
$datas = [];
$datas[] = ["version" => "3.0.1", "app_name" => "ffmpeg.exe", "dir" => "ffmpeg"];
$datas[] = ["version" => "3.0.1", "app_name" => "faster-whisper-xxl.exe", "dir" => "media_to_texts"];
$datas[] = ["version" => "3.0.1", "app_name" => "", "dir" => "Sofin_AI_Creator"];

$json_updates = [
    "stt" => true,
    "url_folder_download" => "https://s3.cloudfly.vn/tools/Sofin_AI_Creator",
    "datas" => $datas
];
echo json_encode($json_updates, JSON_PRETTY_PRINT);
?>