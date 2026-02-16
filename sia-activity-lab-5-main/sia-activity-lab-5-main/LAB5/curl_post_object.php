<?php
$url = "https://api.restful-api.dev/objects";
$data = [
    "name" => "AUF Student Laptop",
    "data" => [
        "brand" => "Apple",
        "ram" => "32GB",
        "storage" => "1TB SSD"
    ]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>