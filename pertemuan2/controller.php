<?php

require_once 'model.php';

class MahasiswaController {
    private $model;

    // Constructor to initialize the model
    public function __construct() {
        $this->model = new MahasiswaModel();  // Create a new instance of the model
    }

    // Method to display the data
    public function index() {
        // Fetch all mahasiswa data
        $mahasiswa = $this->model->getAllMahasiswa();  // Get data from the model
        
        // Debugging: Check if the data is being retrieved correctly
        var_dump($mahasiswa);  // This will print the data in the browser

        // Pass the data to the view
        require 'view.php';  // Include the view
    }
}
