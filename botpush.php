<?php

require "vendor/autoload.php";

$access_token = 'l5Bw29jlIDPWLxFNpMmZ9CgLO9xK0iINd8e29puQSXaFiH1grI8UZ65Idzx1x1YVk8lM4sIrJX7UND4uNm19N1eAZa97XK1MtynbtyJsi18Z/UWFObhE/8dJH3LtmE0rv2apqsl/ZTbkK2/tPsF/pgdB04t89/1O/w1cDnyilFU=';

  //'3ALKAbKFoGuJyJnoDdn0HeyfbxLFtEXBKiC0lFeoNl/XbL4WhoCZzefp2n7UDuXaCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRUaKehDkiCr5p5CakHrPX+gauOGX/R5bB2e5yi7xjnHDAdB04t89/1O/w1cDnyilFU=';

$channelSecret =  '5ee439e1f6308d8a4a660f944c2ce8e5'  
  // '75c03f392f6e53d662d6f5a8db9e421f';


$pushID ='Ua53c53af718115e3453b75a6a564a761' 
  
  //'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







