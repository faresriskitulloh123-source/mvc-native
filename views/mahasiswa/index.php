<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="index.php?page=mahasiswa&action=create">Tambah Data</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($mahasiswa as $m): ?>
        <tr>
            <td><?= htmlspecialchars($m['nim']) ?></td>
            <td><?= htmlspecialchars($m['nama']) ?></td>
            <td><?= htmlspecialchars($m['prodi']) ?></td>
            <td>
                <a href="index.php?page=mahasiswa&action=edit&id=<?= $m['id'] ?>">Edit</a>

                <form method="post"
                      action="index.php?page=mahasiswa&action=delete"
                      style="display:inline"
                      onsubmit="return confirm('Hapus data ini?')">
                    <input type="hidden" name="id" value="<?= $m['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>