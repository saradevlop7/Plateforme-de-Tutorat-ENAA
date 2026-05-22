<?php

require_once __DIR__ . "/../src/Entities/User.php";
require_once __DIR__ . "/../src/Entities/HelpRequest.php";

$student = new User(
    "Sara",
    "sara@gmail.com",
    
    "1234",
    "student"
);

$student->setId(1);

$tutor = new User(
    "Adam",
    "adam@gmail.com",
    "1234",
    "tutor"
);

$tutor->setId(2);

$request = new HelpRequest(
    "Probleme POO",
    "Je bloque",
    "PHP",
    $student
);

$request->assignTo($tutor);

echo "Ticket assigné";