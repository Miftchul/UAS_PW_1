<div class="container" mt-3>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Pelanggan
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/pelanggan/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ketik untuk mencari" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Pelanggan</h3>
<!-- tambah id agar bisa datatable -->
                <table id="dataTable" class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no= 1;
                    foreach($data['plg'] as $plg ) : ?>   
                        <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $plg['nama']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/pelanggan/detail/<?= $plg['id']; ?>" 
                            class= "badge text-bg-primary float-right ml-1">Detail</a>

                            <a href="<?= BASEURL; ?>/pelanggan/ubah/<?= $plg['id']; ?>" 
                                class= "badge text-bg-success float-right tampilModalUbah" 
                                data-bs-toggle="modal" data-bs-target="#formModal" 
                                data-id="<?=$plg['id']; ?>">Ubah</a>

                            <a href="<?= BASEURL; ?>/pelanggan/hapus/<?= $plg['id']; ?>" 
                            class= "badge text-bg-danger float-right ml-1" onclick="return confirm('Yakin?');">Hapus</a>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="formModalLabel">Tambah Data Pelanggan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/pelanggan/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group mb-3">
                <label for="jam_mulai" class="form-label">Jam-Mulai</label>
                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai">
            </div>

            <div class="form-group mb-3">
                <label for="jam_selesai" class="form-label">Jam-Selesai</label>
                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
            </div>

            <div class="form-group mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>

            <div class="form-group">
                <label for="tv">Tv</label>
                <input type="number" class="form-control" id="tv" name="tv">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
