<?php

class MahasiswaModel
{
    private $db;

    // Constructor untuk membuat koneksi ke database
    public function __construct()
    {
        // Buat koneksi ke database
        $this->db = new mysqli('localhost', 'root', '', 'latihan_mvc');

        // Cek jika ada error saat koneksi ke database
        if ($this->db->connect_error) {
            die("Koneksi gagal: " . $this->db->connect_error);
        }
    }

    // Method untuk mengambil data mahasiswa
    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM tb_mahasiswa";  // Query untuk mengambil data
        $result = $this->db->query($query);    // Eksekusi query

        // Cek jika query gagal
        if (!$result) {
            die("Query gagal: " . $this->db->error);
        }

        // Ambil semua data mahasiswa dalam bentuk array
        $mahasiswa = [];
        while ($row = $result->fetch_assoc()) {
            $mahasiswa[] = $row;  // Masukkan setiap baris data ke dalam array
        }

        // Menutup koneksi setelah selesai
        $this->db->close();

        return $mahasiswa;  // Mengembalikan array mahasiswa
    }

    // Method untuk mengambil data mahasiswa berdasarkan id
    public function getMahasiswaById($id)
    {
        $query = "SELECT * FROM tb_mahasiswa WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); // Kembalikan satu baris data mahasiswa
    }

    // Method untuk menambahkan data mahasiswa
    public function addMahasiswa($data)
    {
        $query = "INSERT INTO tb_mahasiswa (nim, nama, email, jurusan) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);

        // Bind parameter
        $stmt->bind_param(
            "ssss",
            $data['nim'],
            $data['nama'],
            $data['email'],
            $data['jurusan']
        );

        // Eksekusi statement
        $stmt->execute();

        // Tutup statement
        $stmt->close();

        // Anda bisa menambahkan pengecekan untuk keberhasilan operasi
        if ($stmt->affected_rows > 0) {
            return true; // Data berhasil ditambahkan
        } else {
            return false; // Gagal menambahkan data
        }
    }

}