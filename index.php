<?php
$access_token = 'w8Km+wvo6CWbnJ6Bk2T0A2w4N9SbhctqJJQXzoJo9RCNQcbPvcqsT3vmzafvPJzAlL5ZcoOYriQXu/ce4XWGK9Lj/yVqO3BRGY/cCH6YrRhsWgyZZH08XnB0u94OX2tIngYxglm0jI8TVp8IcqRJwQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
