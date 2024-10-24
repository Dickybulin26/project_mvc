<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan MVC</title>


    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-center">
            <h1 class="mt-5 mb-3 text-center">Latihan MVC</h1>
        </div>

        <a href="http://localhost/project_mvc/pertemuan3/index.php/mahasiswa/addData"><button
                class="btn btn-success mb-5">Tambah Data Mahasiswa</button></a>
        <table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
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
                            <a href="#"><button class="btn btn-primary">ubah</button></a> |
                            <a href="#"><button class="btn btn-danger">hapus</button></a>
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
    </div>
</body>

</html>