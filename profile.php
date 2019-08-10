<?php


$access_token = '0pWqvK8UUotMyxQeYgdfC7vJddGueMICehVRPzNgKOsp2gBDKaZSVnx7NDVNkvYrADu36+aDJUfa8RunU3krw6Bb9srOfuI094hxQEIjpCfjcWOsZ+Udr0wNxbNPVGp/l/YGx6FSfNUwmdlQXRgSPgdB04t89/1O/w1cDnyilFU=';

$userId = 'U7105d6018b2f046c465d266a95ee8a17';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

