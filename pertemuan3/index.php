<?php

require_once 'route.php';


// Panggil fungsi route dengan URL yang diambil dari $_SERVER['REQUEST_URI']
$url = $_SERVER['REQUEST_URI'];
route($url);  // Jalankan route