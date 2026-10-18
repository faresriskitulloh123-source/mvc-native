<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>

    <form method="post" action="index.php?page=mahasiswa&action=update">
        <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">

        <label>NIM</label><br>
        <input type="text" name="nim"
               value="<?= htmlspecialchars($mahasiswa['nim']) ?>" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama"
               value="<?= htmlspecialchars($mahasiswa['nama']) ?>" required><br><br>
        
        <label>Program Studi</label><br>
        <input type="text" name="prodi"
               value="<?= htmlspecialchars($mahasiswa['prodi']) ?>" required><br><br>
        
        <button type="submit">Update</button>
        <a href="index.php?page=mahasiswa">Kembali</a>
    </form>
</body>
</html>