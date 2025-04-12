<?php
header("Content-Type: application/json");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://handi-lann.tokohost.online/api/application/servers");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer ptla_DK2Z9YEz8PqFs4Iokx6v5sSLfvjesYzwHPB6MELWonf",
    "Accept: application/json"
]);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
