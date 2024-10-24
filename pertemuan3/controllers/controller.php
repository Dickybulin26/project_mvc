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
        require __DIR__ . '/../view/view.php';  // Memanggil view untuk ditampilkan
    }

    //* method untuk memanggil nim mahasiswa
    // Dalam MahasiswaController::getNim()
    public function getId($id)
    {
        // ambil data nama mahasiswa
        $mahasiswa = $this->model->getMahasiswaById($id);

        // Mengirim data ke view
        require __DIR__ . '/../view/view2.php';
    }

    // Method untuk menambahkan data mahasiswa
    public function addData()
    {
        // Cek apakah form telah disubmit
        if (isset($_POST["submit"])) {
            // Panggil method addMahasiswa dari model dengan data yang dikirim dari form
            $this->model->addMahasiswa($_POST);

            // Redirect ke halaman index setelah data berhasil ditambahkan
            echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'http://localhost/project_mvc/pertemuan3/index.php/mahasiswa';
            </script>
        ";
        } else {
            // Menampilkan form tambah mahasiswa jika belum ada submit
            require __DIR__ . '/../view/tambah.php';
        }
    }

}
