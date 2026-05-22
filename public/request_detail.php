<!DOCTYPE html>
<html>

<head>

    <title>Create Ticket</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

<div class="max-w-2xl mx-auto p-10">
    <a href="dashboard.php"><-</a>

    <div class="bg-white p-8 rounded-xl shadow">

        <h1 class="text-3xl font-bold mb-6 text-blue-600">

            Créer une demande

        </h1>

        <form
            action="../scripts/request_process.php"
            method="POST"
            class="space-y-5"
        >

            <input
                type="text"
                name="titre"
                placeholder="Titre"
                class="w-full border p-3 rounded-lg"
            >

            <textarea
                name="description"
                placeholder="Description"
                class="w-full border p-3 rounded-lg"
            ></textarea>
<select
    name="technologie"
    class="w-full border p-3 rounded-lg"
    required
>

    <option value="" disabled selected>
        Choisir une technologie
    </option>

    <option value="HTML">HTML</option>
    <option value="CSS">CSS</option>
    <option value="PHP">PHP</option>
    <option value="JAVA">JAVA</option>
    <option value="SQL">SQL</option>
    <option value="TAILWIND">TAILWIND</option>
    <option value="JAVASCRIPT">JAVASCRIPT</option>

</select>

            <button
                type="submit"
                class="bg-blue-500 text-white px-5 py-3 rounded-lg"
            >
                Envoyer
            </button>

        </form>

    </div>

</div>

</body>
</html>