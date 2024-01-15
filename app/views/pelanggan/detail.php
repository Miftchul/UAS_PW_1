<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['plg'] ['nama']; ?></h5>
            <p class="card-text">Mulai jam: <?= $data['plg'] ['jam_mulai']; ?></p>
            <p class="card-text">Selesai jam: <?= $data['plg'] ['jam_selesai']; ?></p>
            <p class="card-text">Tanggal Bermain: <?= $data['plg'] ['tanggal']; ?></p>
            <h6 class="card-subtitle mb-2 text-body-secondary">No TV: <?= $data['plg'] ['tv']; ?></h6>
            <a href="<?= BASEURL; ?>/pelanggan" class="card-link">Kembali</a>
        </div>
    </div>
</div>