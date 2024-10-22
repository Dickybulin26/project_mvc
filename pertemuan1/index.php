<?php

require 'config.php';

$mahasiswa = query("SELECT * FROM tb_mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan mvc</title>
</head>

<body>
    <h1>latihan mvc</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <!-- <th>Aksi</th> -->
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <!-- <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td> -->
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['jurusan']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>