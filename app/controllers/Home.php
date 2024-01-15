<?php

class Home extends Controller {
    // kode
    public function index() {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('user_model')->getuser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}