<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan MVC</title>
</head>

<body>
    <h1>Latihan MVC</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php
        // Cek apakah data mahasiswa ada
        if (isset($mahasiswa) && !empty($mahasiswa)):
            $i = 1;  // Nomor urut
            foreach ($mahasiswa as $row):  // Looping untuk setiap data mahasiswa
                ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="#">ubah</a> |
                        <a href="#">hapus</a>
                    </td>
                    <td><?= htmlspecialchars($row['nim']); ?></td>
                    <td><?= htmlspecialchars($row['nama']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= htmlspecialchars($row['jurusan']); ?></td>
                </tr>
                <?php
                $i++;
            endforeach;
        else:
            ?>
            <tr>
                <td colspan="7">Tidak ada data mahasiswa</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>