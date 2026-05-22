<!DOCTYPE html>
<html>
<head>
    <title>Create Ticket</title>
</head>
<body>

<h1>Créer une demande</h1>

<form action="../scripts/request_process.php" method="POST">

    <input
        type="text"
        name="titre"
        placeholder="Titre"
    >

    <br><br>

    <textarea
        name="description"
        placeholder="Description"
    ></textarea>

    <br><br>

    <input
        type="text"
        name="technologie"
        placeholder="Technologie"
    >

    <br><br>

    <button type="submit">
        Envoyer
    </button>

</form>

</body>
</html>
