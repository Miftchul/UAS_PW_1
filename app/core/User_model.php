<?php
class User_model {
    private $nama = 'Agus';

    public function getUser(){
        return $this->nama;
    }

    public function registerUser($username, $password) {
        // Hash password sebelum disimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Query untuk menyimpan data user baru ke database
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $hashedPassword);
    
        // Eksekusi query
        return $this->db->execute();
    }
    
}
