    <?php
// Use the ID of the object you want to delete
$id = "REPLACE_WITH_YOUR_ID"; 
$url = "https://api.restful-api.dev/objects/" . $id;

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Setting the custom request to DELETE
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

$response = curl_exec($ch);

// Get the HTTP status code to verify success (200 or 204)
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo "HTTP Status Code: " . $httpCode . "\n";
    echo "Response: " . $response;
}

curl_close($ch);
?>