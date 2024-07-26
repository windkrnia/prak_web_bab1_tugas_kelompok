<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Tambah Pasien</h1>
    <form action="/screen/store" method="post">
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="keluhan">keluhan</label>
            <input type="text" name="keluhan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="umur">umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="riwayat_penyakit">riwayat_penyakit</label>
            <input type="text" name="riwayat_penyakit" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="/screen" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
