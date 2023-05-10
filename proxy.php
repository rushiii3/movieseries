<?php
  $proxyUrl = 'https://rejax.io:3001/api/client';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $proxyUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  $response = curl_exec($ch);
  curl_close($ch);
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  echo $response;
?>
