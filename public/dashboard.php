
<?php

require_once __DIR__ . "/../src/Repositories/HelpRequestRepository.php";

$repo = new HelpRequestRepository();

$requests = $repo->getAll();

/* 🔥 Categories */
$categories = [
    "ALL",
    "HTML",
    "CSS",
    "PHP",
    "JAVA",
    "SQL",
    "TAILWIND",
    "JAVASCRIPT"
];

$selected = $_GET['tech'] ?? "ALL";

/* 🔥 Filter */
if ($selected !== "ALL") {
    $requests = array_filter($requests, function ($r) use ($selected) {
        return $r['technologie'] === $selected;
    });
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-5xl mx-auto p-10">
    <a href="index.php"><-</a>

    <h1 class="text-3xl font-bold mb-8 text-blue-600">
        Liste des Tickets
    </h1>

    <a
        href="request_detail.php"
        class="bg-green-500 text-white px-4 py-2 rounded-lg"
    >
        Nouveau Ticket
    </a>

    <!-- 🔥 Categories -->
    <div class="mt-6 flex flex-wrap gap-3">

        <?php foreach ($categories as $cat): ?>

            <a href="?tech=<?= $cat ?>"
               class="px-4 py-2 rounded-lg text-sm font-semibold
               <?= $selected === $cat ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700' ?>">

                <?= $cat ?>

            </a>

        <?php endforeach; ?>

    </div>

    <!-- 🔥 Tickets -->
    <div class="mt-8 space-y-5">

        <?php foreach($requests as $request): ?>

            <div class="bg-white p-6 rounded-xl shadow">

                <h2 class="text-xl font-bold mb-2">
                    <?= $request['titre'] ?>
                </h2>

                <p class="text-gray-700 mb-3">
                    <?= $request['description'] ?>
                </p>

                <!-- Technologie -->
                <div class="mb-3">
                    <span class="text-sm text-gray-500">Technologie :</span>
                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded ml-2">
                        <?= $request['technologie'] ?>
                    </span>
                </div>

                <!-- Statut -->
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded">
                    <?= $request['statut'] ?>
                </span>

            </div>

        <?php endforeach; ?>

    </div>

</div>

</body>
</html>