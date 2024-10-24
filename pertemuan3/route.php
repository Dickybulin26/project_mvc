<?php

// require_once 'controllers/controller.php';

// Fungsi untuk menjalankan controller dan method yang sesuai
function route($url)
{
    $url = trim($url, '/'); // Hapus slash di awal dan akhir URL

    // Pisahkan controller dan method dari URL
    $parts = explode('/', $url);

    //* uncomment below if your controller is not named 'mahasiswa'
    // $controllerName = ucfirst($parts[3]) . 'Controller'; // Contoh: mahasiswa -> MahasiswaController

    $controllerName = 'MahasiswaController'; // Contoh: mahasiswa -> MahasiswaController
    $methodName = $parts[4] ?? 'index'; // Jika tidak ada method, gunakan 'index'

    // Cek apakah file controller ada
    $controllerFile = 'controllers/controller.php';
    if (file_exists($controllerFile)) {
        require_once $controllerFile;

        // Buat objek controller dan jalankan method yang sesuai
        $controller = new $controllerName();

        // Jika method ada dan parameter ada (seperti getNim($id)), jalankan
        if (method_exists($controller, $methodName)) {
            if (isset($parts[5])) {
                // Jika ada ID (misalnya: mahasiswa/getNim/1), jalankan method dengan parameter ID
                $controller->$methodName($parts[5]);
            } else {
                // Jika tidak ada ID, jalankan method tanpa parameter
                $controller->$methodName();
            }
        } else {
            echo "Method $methodName not found in $controllerName";
        }
    } else {
        echo "Controller $controllerName not found";
    }
}

