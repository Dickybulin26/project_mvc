<?php

require_once 'controller.php';  // Menghubungkan controller

// Membuat objek dari controller
$controller = new MahasiswaController();

// Memanggil method index untuk menampilkan data
$controller->index();
