<?php



require "vendor/autoload.php";

$access_token = '0pWqvK8UUotMyxQeYgdfC7vJddGueMICehVRPzNgKOsp2gBDKaZSVnx7NDVNkvYrADu36+aDJUfa8RunU3krw6Bb9srOfuI094hxQEIjpCfjcWOsZ+Udr0wNxbNPVGp/l/YGx6FSfNUwmdlQXRgSPgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '26b73d81f1f6fb99ad8b7fcb5530c5b0';

$pushID = 'Udf3e802040b36afd3eb46205ecdbfb8b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







