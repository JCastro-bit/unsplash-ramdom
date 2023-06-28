<?php
$unsplash_client_id = 'YOUR_CLIENT_ID';

$url = "https://api.unsplash.com/photos/random?query=dog&client_id=$unsplash_client_id&w=849&h=1090";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);

$response = json_decode($result, true);

$image_url = $response['urls']['full'];

echo $image_url;  // Solo devolvemos la URL de la imagen, no una etiqueta <img>
?>
