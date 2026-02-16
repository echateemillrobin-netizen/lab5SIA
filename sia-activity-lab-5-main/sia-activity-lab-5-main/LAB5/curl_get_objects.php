<?php

$url = "https://api.restful-api.dev/objects";


$ch = curl_init($url);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);


if (curl_errno($ch)) {  
    echo 'Error:' . curl_error($ch);
} else {
    
    echo $response;
}


curl_close($ch);