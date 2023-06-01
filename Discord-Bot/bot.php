<?php
use Discord\Discord;
use Discord\WebSockets\Event;
use Discord\WebSockets\Intents;

require_once('./vendor/autoload.php');
require_once('./key.php');

$key = getKey();

$discord = new Discord(['token' => $key]);
$discord->run();