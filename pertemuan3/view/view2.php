<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan MVC</title>
</head>

<body>
    <h1>Detail Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php if (isset($mahasiswa) && !empty($mahasiswa)): ?>
            <tr>
                <td><?= htmlspecialchars($mahasiswa['id']); ?></td>
                <td>
                    <a href="#">ubah</a> |
                    <a href="#">hapus</a>
                </td>
                <td><?= htmlspecialchars($mahasiswa['nim']); ?></td>
                <td><?= htmlspecialchars($mahasiswa['nama']); ?></td>
                <td><?= htmlspecialchars($mahasiswa['email']); ?></td>
                <td><?= htmlspecialchars($mahasiswa['jurusan']); ?></td>
            </tr>
        <?php else: ?>
            <tr>
                <td colspan="6">Tidak ada data mahasiswa</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>
