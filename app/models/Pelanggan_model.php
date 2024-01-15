<?php

class Pelanggan_model {

    private $table = 'pelanggan';
    private $db;

    public function __construct(){
        $this->db = new Database;
    } 

        public function getAllPelanggan(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getPelangganById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id',$id);
            return $this->db->single();
        }

        public function tambahDataPelanggan($data){
            $query = "INSERT INTO pelanggan 
                    VALUES
                    ('', :nama, :jam_mulai, :jam_selesai, :tanggal, :tv)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jam_mulai', $data['jam_mulai']);
            $this->db->bind('jam_selesai', $data['jam_selesai']);
            $this->db->bind('tanggal', $data['tanggal']);
            $this->db->bind('tv', $data['tv']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataPelanggan($id){
            $query = "DELETE FROM pelanggan WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function ubahDataPelanggan($data){
            $query = "UPDATE pelanggan SET
                        nama = :nama,
                        jam_mulai = :jam_mulai,
                        jam_selesai = :jam_selesai,
                        tanggal = :tanggal,
                        tv = :tv 
                        WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jam_mulai', $data['jam_mulai']);
            $this->db->bind('jam_selesai', $data['jam_selesai']);
            $this->db->bind('tanggal', $data['tanggal']);
            $this->db->bind('tv', $data['tv']);

            $this->db->execute();

            return $this->db->rowCount();
        }


        public function cariDataPelanggan(){
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM pelanggan WHERE nama LIKE :keyword";
            $this->db->query($query);
            $this->db->bind('keyword', "%$keyword%");
            return $this->db->resultSet();

            // if(isset($_POST['search']['value']))
            // {
            //     $search_value = $_POST['search']['value'];
            //     $sql .= " WHERE nama like '%".$search_value."%'";
            //     $sql .= " OR jam_mulai like '%".$search_value."%'";
            //     $sql .= " OR jam_selesai like '%".$search_value."%'";
            //     $sql .= " OR tanggal like '%".$search_value."%'";
            //     $sql .= " OR tv like '%".$search_value."%'";
            // }
        }

        public function getAllPelangganJSON() {
            $query = "SELECT id, nama FROM pelanggan";
            $this->db->query($query);
            return $this->db->resultSet();
        }
}
