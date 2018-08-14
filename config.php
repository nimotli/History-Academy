<?php 

require_once('vendor/autoload.php');
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
$data= [
    //paypal Api Credentials
    'id'=>'AfhTt0otN2NWUsJPfcFqCP0SdQTMnRWSw_znNqfMBtqkHboZuvRgcJlP5Eun_2s2ftbdWuvMvanlY3Sq',
    'secret'=>'EGAIWKlJdCyLjshrNyD2Zj1v9PyceC-Y6XK8YWZ4Y6tp-yyuyKgs9KJmAdsCDZ5iKy4XzcZM7VsnqzVt',

    //database credentials
    'database'=>'academy',
    'user'=>'root',
    'password'=>'',
];

$apiContext= new ApiContext(
    new OAuthTokenCredential(
        $data['id'],
        $data['secret']
    )
);
$apiContext->setConfig(
    array(
        'mode' => 'sandbox',
        'log.LogEnabled' => true,
        'log.FileName' => '../PayPal.log',
        'log.LogLevel' => 'DEBUG', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
        'cache.enabled' => true,
        //'cache.FileName' => '/PaypalCache' // for determining paypal cache directory
        // 'http.CURLOPT_CONNECTTIMEOUT' => 30
        // 'http.headers.PayPal-Partner-Attribution-Id' => '123123123'
        //'log.AdapterFactory' => '\PayPal\Log\DefaultLogFactory' // Factory class implementing \PayPal\Log\PayPalLogFactory
    )
);