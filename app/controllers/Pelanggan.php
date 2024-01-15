<?php

class Pelanggan extends Controller {
    public function index(){
        $data['judul'] = 'Daftar Pelanggan';
        $data['plg'] = $this->model('Pelanggan_model')->getAllPelanggan();
        $this->view('templates/header', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Pelanggan';
        $data['plg'] = $this->model('Pelanggan_model')->getPelangganById($id);
        $this->view('templates/header', $data);
        $this->view('pelanggan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        // var_dump($_POST);
        if ($this->model('Pelanggan_model')->tambahDataPelanggan($_POST) > 0) {
            Flasher::setFlash(' Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash(' Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        }
    }

    public function hapus($id){
        // var_dump($_POST);
        if ($this->model('Pelanggan_model')->hapusDataPelanggan($id) > 0) {
            Flasher::setFlash(' Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash(' Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        }
    }


    public function getUbah(){
        // echo $_POST['id'];
        echo json_encode($this->model('Pelanggan_model')->getPelangganById($_POST['id']));
    }

    public function ubah(){
        if ($this->model('Pelanggan_model')->ubahDataPelanggan($_POST) > 0) {
            Flasher::setFlash(' Berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash(' Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pelanggan');
            exit;
        }   
    }

    public function cari(){
        $data['judul'] = 'Daftar Pelanggan';
        $data['plg'] = $this->model('Pelanggan_model')->cariDataPelanggan();
        $this->view('templates/header', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/footer');
    }

    public function json() {
        $dataPelanggan = $this->model('Pelanggan_model')->getAllPelangganJSON();
        echo json_encode($dataPelanggan);
    }

}