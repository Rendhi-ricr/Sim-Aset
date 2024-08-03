<!DOCTYPE html>
<html>

<head>
    <title>Tambah Gedung</title>
</head>

<body>
    <h1>Tambah Gedung</h1>
    <form action="<?= site_url('panel/gedung/tambah') ?>" method="post">
        <label for="nama_gedung">Nama Gedung:</label>
        <input type="text" id="nama_gedung" name="nama_gedung" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>