<?php
$url = "https://jsonplaceholder.typicode.com/users/1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
if(curl_errno($ch)){
    echo 'cURL ERROR: ' . curl_error($ch);
} else {
    $data = json_decode($response, true);
    echo $data['name']. "<br>";
    echo $data['email'] . "<br>";
    echo $data['address']['city'];
}
?>