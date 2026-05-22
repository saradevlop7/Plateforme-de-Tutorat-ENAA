<?php
require_once __DIR__ . "/../src/Entities/User.php";
require_once __DIR__ . "/../src/Entities/HelpRequest.php";

$user = new User(
    "Sara",
    "sara@gmail.com",
    "1234",
    "student"
);

$user->setId(1);

$request = new HelpRequest(
    "POO",
    "Probleme heritage",
    "PHP",
    $user
);

$request->resolve();

echo "Ticket résolu";