<?php
// Pierre Johner 10.10.2017 NetOxygen

require_once(dirname(__FILE__) . '/No2SMS_Client.class.php');
//+41 (076) 536 37 76

$debug = 0;//1 to active
$user        = "devjob";
$password    = "cG9vcmx5Y29kZWRwYXNzd29yZA==";
$destination = "0041765363776";
$message = "Pierre Johner : https://github.com/JohnerPierre/NetOxygenTexto";


$client = new No2SMS_Client($user, base64_decode($password));

if($debug)
    var_dump($client);

try {
    if (!$client->auth())
            die('Bad Login, Password');

    $res = $client->send_message($destination, $message);

    if($debug){
        var_dump($res);
    
        $res = $client->get_status($res[0][2]);
        var_dump($res);
    }
    
    printf("Message Send");
        
    
} catch (No2SMS_Exception $e) {
    printf("Connection problem: %s", $e->getMessage());
    exit(1);
}

?>