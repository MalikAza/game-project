<?php

use GameProject\DAO\UserDAO;

require __DIR__ . '/vendor/autoload.php';

$userDb = new UserDAO;

$usersPseudos = [];
foreach ($userDb->getAll() as $user) {
    $usersPseudos[] = $user->getPseudo();
}

echo join(', ', $usersPseudos);