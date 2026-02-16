<?php
$id = "1"; 
$url = "https://api.restful-api.dev/objects/" . $id;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>