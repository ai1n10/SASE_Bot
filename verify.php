<?php
$access_token = 'kGgUzjEA1jkQPkU/bA02yZwZlbFMC9dRZeB9f+e5TdCW8EbOTuV/wm09MkVQM3YbOrV7+v5LEAu9kl6snrI0t0Rjo7LNh+GvGiSgWasXPIrI45TjL0Slb2isEdbbzmQn9qnnqb9xa7LcMxWqatlzdAdB04t89/1O/w1cDnyilFU=
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
?>
