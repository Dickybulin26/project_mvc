<?php

require_once __DIR__ . '/../models/model.php';  // Menghubungkan model dengan path relatif

class MahasiswaController
{
    private $model;

    // Constructor untuk membuat objek model
    public function __construct()
    {
        $this->model = new MahasiswaModel();  // Membuat objek model
    }

    // Method untuk menampilkan data mahasiswa
    public function index()
    {
        // Ambil semua data mahasiswa dari model
        $mahasiswa = $this->model->getAllMahasiswa();

        // Mengirim data ke view untuk ditampilkan
        require  __DIR__ . '/../view/view.php';  // Memanggil view untuk ditampilkan
    }

    //* method untuk memanggil nim mahasiswa
    // Dalam MahasiswaController::getNim()
    public function getNim($id)
    {
        // ambil data nim mahasiswa
        $nim = $this->model->getNim($id);
        // echo "NIM mahasiswa dengan ID $id adalah: $nim";

        // Mengirim data ke view
        require __DIR__ . '/../view/view2.php';
    }
}
