<?php
$url = "https://codecanyon.net";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);

$response = curl_exec($ch);

echo "HTTP Status: " . curl_getinfo($ch, CURLINFO_HTTP_CODE) . PHP_EOL;
echo "cURL Error: " . curl_error($ch) . PHP_EOL;

curl_close($ch);
?>
