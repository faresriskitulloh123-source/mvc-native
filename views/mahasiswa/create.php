<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>

    <form method="post" action="index.php?page=mahasiswa&action=store">
        <label>NIM</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Program Studi</label><br>
        <input type="text" name="prodi" required><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=mahasiswa">Kembali</a>
    </form>
</body>
</html>