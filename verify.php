<?php
$access_token = 'NxmBKV8M7hITmg4GxPgMWwLy+3mnNzJ5eaYRLrN9HvRWfMbzs4Tiee3RcJNVQwr4+cwffA61U789x3PXIoUFAQsvGtxb2W4vLzTGHFxhaThUDOof2YjCIHREOn5qsnTs9EdiCd9qYQT93fl4HNMYwdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
