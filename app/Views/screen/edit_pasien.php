<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Pasien</h1>
    <form action="/screen/update/<?= $pasien['id'] ?>" method="post">
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" name="nama" class="form-control" value="<?= esc($pasien['nama']) ?>" required>
        </div>
        <div class="form-group">
            <label for="keluhan">keluhan</label>
            <input type="text" name="keluhan" class="form-control" value="<?= esc($pasien['keluhan']) ?>" required>
        </div>
        <div class="form-group">
            <label for="umur">umur</label>
            <input type="number" name="umur" class="form-control" value="<?= esc($pasien['umur']) ?>" required>
        </div>
        <div class="form-group">
            <label for="riwayat_penyakit">riwayat_penyakit</label>
            <input type="text" name="riwayat_penyakit" class="form-control" value="<?= esc($pasien['riwayat_penyakit']) ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/screen" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
