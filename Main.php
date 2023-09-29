<?php
require __DIR__ . '/vendor/autoload.php';

use GameProject\Connector;

$db = Connector::getInstance();

echo 'ok';