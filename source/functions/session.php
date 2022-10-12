<?php
session_start();
header('Content-Type: application/json');

$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => API + "/public/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array('email' => $email,'password' => $password),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
