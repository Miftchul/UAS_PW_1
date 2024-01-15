<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/gambar.css">
    <script type="text/javascript" charset="utf8" src="<?= BASEURL; ?>/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="<?= BASEURL; ?>/js/dt-1.10.25datatables.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="<?= BASEURL; ?>/home/index"><img src="https://rentalplaystation.com/wp-content/uploads/2021/12/The-Store-Rental-Playstation2.png" width="50px" height="40px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <!-- <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/home/index">Home</a> -->
              <a class="nav-link" href="<?= BASEURL; ?>/pelanggan">Pelanggan</a>
              <a class="nav-link" href="<?= BASEURL; ?>/about/index">About</a>
              <a class="nav-link" href="<?= BASEURL; ?>/Log/logout">Logout</a>
            </div>
          </div>
        </div>
      </nav>