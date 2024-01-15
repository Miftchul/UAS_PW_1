<?php

class RegisterProcess extends Controller {
    
    public function index() {
        // ... implementasi kode disini ...
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Mengambil data dari form
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            // Memanggil model untuk melakukan registrasi
            $result = $this->model('User_model')->registerUser($username, $password);
    
            if ($result) {
                // Registrasi berhasil
                Flasher::setFlash('Username berhasil ditambahkan', 'success');
            } else {
                // Registrasi gagal
                Flasher::setFlash('Gagal menambahkan username', 'danger');
            }
    
            // Kembali ke halaman register
            header("Location: " . BASEURL . "/register.php");
            exit;
        } else {
            // Jika bukan request POST, redirect ke halaman register
            header("Location: " . BASEURL . "/register.php");
            exit;
        }
    }
}