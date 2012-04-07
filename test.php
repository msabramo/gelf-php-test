<?php

require __DIR__ . "/vendor/.composer/autoload.php";

use Gelf\Message;
use Gelf\MessagePublisher;

$message = new Message();
$message->setShortMessage('something is broken.');
$message->setFullMessage("lol full message!");
$message->setHost('somehost');
$message->setLevel(2);
$message->setFile('/var/www/example.php');
$message->setLine(1337);
$message->setAdditional("something", "foo");
$message->setAdditional("something_else", "bar");

$publisher = new MessagePublisher('172.16.22.30');
$publisher->publish($message);

print "\$publisher = " . print_r($publisher, true) . "\n";
print "\$message = " . print_r($message, true) . "\n";
