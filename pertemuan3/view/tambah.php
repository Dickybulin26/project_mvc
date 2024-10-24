<?php
require_once __DIR__ . '/../controllers/controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <style>
        li {
            list-style: none;
        }

        .form-tambah {
            margin-right: 10rem;
            margin-left: 10rem;
            background-color: #f2f2f2;
            padding: 1rem;
            border-radius: 1rem;
        }
    </style>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Tambah Data Mahasiswa</h1>

        <div class="d-flex justify-content-center">
            <a href="http://localhost/project_mvc/pertemuan3/index.php/"><button
            class="btn btn-secondary my-3">Kembali</button></a>
        </div>
        
        <div class="form-tambah">


            <!-- Form pengisian data mahasiswa -->
            <form action="" method="post" enctype="multipart/form-data">
                <ul>
                    <li>
                        <label for="nama">Nama: </label>
                        <input class="form-control" type="text" name="nama" id="nama" required>
                    </li>
                    <li>
                        <label for="nim">NIM: </label>
                        <input class="form-control" type="number" name="nim" id="nim" required>
                    </li>
                    <li>
                        <label for="email">Email: </label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </li>
                    <li>
                        <label for="jurusan">Jurusan: </label>
                        <!-- <input class="form-control" type="text" name="jurusan" id="jurusan" required> -->
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik elektro">Teknik elektro</option>
                            <option value="Teknik Rekayasa Perangkat Lunak">Teknik Rekayasa Perangkat Lunak</option>
                        </select>
                    </li>
                    <li>
                        <button type="submit" name="submit" class="btn btn-primary my-5">Tambah Data</button>
                    </li>
                </ul>
            </form>
        </div>
        </>
</body>

</html>