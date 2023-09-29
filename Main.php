<?php

use GameProject\DAO\UserDAO;
use GameProject\DTO\User;

require __DIR__ . '/vendor/autoload.php';

$userDb = new UserDAO;

$usersPseudos = [];
foreach ($userDb->getAll() as $user) {
    $usersPseudos[] = $user->getPseudo();
}

echo "All users: " . join(', ', $usersPseudos);
echo "\nbyId: " . $userDb->getById(1)->getPseudo();

$dakotaUser = new User;
$dakotaBirth = new DateTime;
$timestamp = strtotime('29th june 1996');
$dakotaBirth->setTimestamp($timestamp);

$dakotaUser->setEmail('dakota.froissart@le-campus-numerique.fr')
    ->setPseudo('dakotaFRO')
    ->setPassword('w#PFGACJA^u9rk')
    ->setBirth($dakotaBirth);
echo "insertNewUser: " . $userDb->newRow($dakotaUser)->getPseudo();