<?php

require_once __DIR__ . "/../src/Repositories/HelpRequestRepository.php";

$repo = new HelpRequestRepository();

$requests = $repo->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Liste des tickets</h1>

<a href="request_detail.php">
    Créer un ticket
</a>

<hr>

<?php foreach($requests as $request): ?>

    <div>

        <h3>
            <?= $request['titre'] ?>
        </h3>

        <p>
            <?= $request['description'] ?>
        </p>

        <p>
            <?= $request['statut'] ?>
        </p>

    </div>

    <hr>

<?php endforeach; ?>

</body>
</html>