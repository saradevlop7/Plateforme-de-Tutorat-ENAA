<?php

require_once __DIR__ . "/../src/Entities/User.php";
require_once __DIR__ . "/../src/Entities/HelpRequest.php";
require_once __DIR__ . "/../src/Repositories/HelpRequestRepository.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $user = new User(
        "Sara",
        "sara@gmail.com",
        "1234",
        "student"
    );

    $user->setId(1);

    $request = new HelpRequest(
        $_POST["titre"],
        $_POST["description"],
        $_POST["technologie"],
        $user
    );

    $repo = new HelpRequestRepository();

    $repo->save($request);


    
    header("Location: ../public/dashboard.php");
}