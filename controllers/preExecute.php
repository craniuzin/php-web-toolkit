<?php

session_start();
function pre($var){
    echo "<pre>";
        print_r($var);
    echo "</pre>";
}
$workingDir = dirname(__FILE__).'/../';

// The 2 base classes must always be included rfBase.php and rfExchange.php,
// rfUtil will provide Markup for rapid development
require_once($workingDir.DIRECTORY_SEPARATOR.'rfSDK'. DIRECTORY_SEPARATOR .'rfBase.php');
require_once($workingDir.DIRECTORY_SEPARATOR. 'rfSDK'. DIRECTORY_SEPARATOR .'rfExchange.php');
require_once($workingDir.DIRECTORY_SEPARATOR . 'rfSDK'. DIRECTORY_SEPARATOR .'rfUtils.php');

rfExchange::setUp("sandbox", "sandbox");


$expire_time = true;
if (!isset($_SESSION['rftoken'])){
    $time = time();
    if (isset($_SESSION['rftoken']['expire'])){
        if ($time < $_SESSION['rftoken']['expire']){
            $expire_time = false;
        }
    }
} else {
    $token = $_SESSION['rftoken']['token'];
}

if ($expire_time){
    $token = rfExchange::authenticate();
    $expire = strtotime("+10 min");
    $_SESSION['rftoken'] = array(
        'expire' => $expire,
        'token' => $token
    );
}


?>
