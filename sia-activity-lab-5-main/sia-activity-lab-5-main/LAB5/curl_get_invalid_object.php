<?php

$invalid_id = "99999999";
$url = "https://api.restful-api.dev/objects/" . $invalid_id;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode >= 400) {
    echo "Request Failed!\n";
    echo "HTTP Status Code: " . $httpCode . "\n";
    echo "API Error Message: " . $response;
} else {
    echo "Success: " . $response;
}

curl_close($ch);
?>

