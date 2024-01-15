$(function () {
    $('.tombolTambahData').on('click', function() {
        $('#tombolTambahData').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Pelanggan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/magnaplaystation/public/pelanggan/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/magnaplaystation/public/pelanggan/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#jam_mulai').val(data.jam_mulai);
                $('#jam_selesai').val(data.jam_selesai);
                $('#tanggal').val(data.tanggal);
                $('#tv').val(data.tv);
            }
        }); 

    });

});