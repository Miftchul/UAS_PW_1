<?php

class Log extends Controller {
    
    // private $table = 'user';
    // private $db;

    // public function __construct(){
    //     $this->db = new Database;
    // } 

    public function index() {
        $data['judul'] = 'Login';
        $this->view('login/index', $data);
    }

    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data['login'] = $this->model('Log_model')->getUser($username, $password);
// var_dump($data['login']);
        session_start();
        if ($data['login'] == NULL) {
            header("Location: " . BASEURL . "/404");
        } else {
            foreach ($data['login'] as $row):
                $_SESSION['username'] = $row['username'];
                
                header("Location: " . BASEURL . "/home");
            endforeach;
        }   
    }

    public function register() {
        // ... implementasi kode disini ...
        if(isset($_POST['submit'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            // Make hash from password using PASSWORD_BCRYPT algoritm
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $data['login'] = $this->model('Log_model')->registerUser($username, $password);

            session_start();
            if ($data['login'] == NULL) {
                header("Location: " . BASEURL . "/404");
            } else {
                foreach ($data['login'] as $row):
                    $_SESSION['username'] = $row['username'];
                    
                    header("Location: " . BASEURL . "/home");
                endforeach;
            }
        }
    }


    
    public function logout() {
    session_unset();
    session_destroy();
    header("Location: " . BASEURL . "/Login/index");
    exit;
    
    }
}
