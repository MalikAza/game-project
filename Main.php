<?php
require __DIR__ . '/vendor/autoload.php';

use GameProject\Connector;

$db = Connector::getInstance();
$users = $db->query('SELECT * FROM users');

print_r($users->fetchall());