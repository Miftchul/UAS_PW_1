<?php
class Flasher {
    public static function setFlash($pesan, $aksi, $tipe){
        //menyimpan session
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    
    public static function flash() {
        if(isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data Pelanggan<strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . ' 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hiddeen="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}