<?php

$access_token = '5Xb1Ez2Rlzh3K4blliZbHmiaTkRSIzD98HS844bFCWAsGd7hZXA5fDFRGB0+fHr0soXOQxAXJL8lvIKiye68H0UkrP7KvHb6p22r9IVlgDx88Dv4HgqdItI/pndWjyPZTCIFr/q2mPKsjpUvHdkoAAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;