<?php
require_once(dirname(__FILE__) . '/No2SMS_Client.class.php');
//cG9vcmx5Y29kZWRwYXNzd29yZA==
//+41 (076) 536 37 76


$user        = "devjob";
$password    = "cG9vcmx5Y29kZWRwYXNzd29yZA==";
$destination = "0041766164122";
$message = "Pierre Johner";




$client = new No2SMS_Client($user, base64_decode($password));

var_dump($client);

try {
    if (!$client->auth())
            die('Bad Login, Password');

    $res = $client->send_message($destination, $message);

    var_dump($res);
    
} catch (No2SMS_Exception $e) {
    printf("Connection problem: %s", $e->getMessage());
    exit(1);
}

?>