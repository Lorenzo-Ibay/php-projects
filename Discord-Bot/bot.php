<?php
use Discord\Discord;
use Discord\WebSockets\Event;
use Discord\WebSockets\Intents;

require_once('./vendor/autoload.php');
require_once('./key.php');

$key = getKey();

$discord = new Discord(['token' => $key]);
$discord->run();
$discord->on('ready', function(Discord $discord){
    echo 'connected!';
    discord->on('message', function($message, $discord){
        $content = $message -> content;
        if( strpos($content, '!') === false) return;
        if( $content === '!command'){
            // command to execute
            $client = new \GuzzleHttp\Client();
            $response = $client ->request('GET', 'url');
            echo $response -> getBody();
        }
    });
});


// $discord->close();