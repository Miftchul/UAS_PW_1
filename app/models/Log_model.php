<?php

class Log_model {

    private $table = 'pelanggan';
    private $db;

    public function __construct(){
        $this->db = new Database;
    } 
        public function getUser($username, $password){
            $this->db->query("SELECT * FROM user WHERE username = :username AND password = :password");

            $this->db->bind('username', $username);
            $this->db->bind('password', $password);
            return $this->db->resultSet();
        }
        
        public function registerUser($username, $password) {
            // Hash password sebelum disimpan ke database
            // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
            // Query untuk menyimpan data user baru ke database
            $query = "INSERT INTO user (username, password) VALUES (:username, :password)";
            $this->db->query($query);
            $this->db->bind('username', $username);
            $this->db->bind('password', $password);
        
            // Eksekusi query
            return $this->db->execute();
        }
        
}
