<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Pendaftaran Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/image/Screenshot%202024-07-02%20065019.png'); /* Change the URL to your background image */
            background-size: cover;
            background-position: center;
        }
        .floating-action-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #38a169; /* Green color */
            color: white;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .floating-action-button:hover {
            background-color: #2f855a; /* Darker green */
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent white background */
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px; /* Adjust the margin here */
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
    <h1 class="title text-2xl font-bold mb-10">Halaman Pendaftaran Pasien</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php foreach ($pasiens as $pasien): ?>
        <div class="card">
            <h2 class="text-xl font-semibold mb-2"><?= esc($pasien['nama']) ?></h2>
            <p class="text-gray-700 mb-2"><strong>Keluhan:</strong> <?= esc($pasien['keluhan']) ?></p>
            <p class="text-gray-700 mb-2"><strong>Umur:</strong> <?= esc($pasien['umur']) ?></p>
            <p class="text-gray-700 mb-2"><strong>Riwayat Penyakit:</strong> <?= esc($pasien['riwayat_penyakit']) ?></p>
            <div class="flex justify-between mt-4">
                <a href="/screen/edit/<?= $pasien['id'] ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                <a href="/screen/delete/<?= $pasien['id'] ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Are you sure?')">Delete</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <a href="/screen/create" class="floating-action-button">+</a>
</body>
</html>
