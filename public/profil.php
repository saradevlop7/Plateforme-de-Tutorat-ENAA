<?php

require_once __DIR__ . "/../src/Entities/User.php";

$user = new User(
    "Sara",
    "sara@gmail.com",
    "1234",
    "student"
);

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Profil</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

    <div class="max-w-3xl mx-auto p-10">

        <div class="bg-white rounded-2xl shadow p-8">

            <div class="flex items-center justify-between mb-8">

                <h1 class="text-3xl font-bold text-blue-600">

                    Mon Profil

                </h1>

                <a
                    href="dashboard.php"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg"
                >
                    Dashboard
                </a>

            </div>

            <div class="space-y-5">

                <div>

                    <p class="text-gray-500 mb-1">
                        Nom
                    </p>

                    <div class="border rounded-lg p-3 bg-gray-50">

                        <?= $user->getNom() ?>

                    </div>

                </div>

                <div>

                    <p class="text-gray-500 mb-1">
                        Email
                    </p>

                    <div class="border rounded-lg p-3 bg-gray-50">

                        <?= $user->getEmail() ?>

                    </div>

                </div>

                <div>

                    <p class="text-gray-500 mb-1">
                        Role
                    </p>

                    <div class="border rounded-lg p-3 bg-gray-50">

                        <?= $user->getRole() ?>

                    </div>

                </div>

            </div>

            <div class="mt-10">

                <h2 class="text-2xl font-bold mb-4 text-blue-600">

                    Compétences

                </h2>

                <div class="flex gap-3 flex-wrap">

                    <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full">
                        PHP
                    </span>

                    <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">
                        SQL
                    </span>

                    <span class="bg-purple-100 text-purple-700 px-4 py-2 rounded-full">
                        JavaScript
                    </span>

                    <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full">
                        POO
                    </span>

                </div>

            </div>

        </div>

    </div>

</body>
</html>