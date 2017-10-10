<?php
require_once(dirname(__FILE__) . '/No2SMS_Client.class.php');
//cG9vcmx5Y29kZWRwYXNzd29yZA==
//+41 (076) 536 37 76


$user        = "devjob";
$password    = "cG9vcmx5Y29kZWRwYXNzd29yZA==";
//$destination = $argv[3];
$message     = "Pierre Johner";


$client = new No2SMS_Client($user, base64_decode($password));

var_dump($client);

if (!$client->auth())
        die('mauvais utilisateur ou mot de passe');

?>