<?= $this->extend('adminview/mainview') ?>

<?= $this->section('judul') ?>
Data Peminjam
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<ol class="breadcrumb bg-white mb-0">
    <li class="breadcrumb-item"><a href="<?=base_url('/admin/home') ?>">Home</a></li>
    <li class="breadcrumb-item active">Data Peminjam</li>
</ol>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
 <!-- Alert Data berhasil Di input -->
<?php if (session()->getFlashdata('inputpeminjamberhasil')) : ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '<?= session()->getFlashdata("inputpeminjamberhasil") ?>',
            });
        });
    </script>
<?php endif; ?>
<!-- Alert Data berhasil Di kembalikan -->
<?php if (session()->getFlashdata('kembalikanberhasil')) : ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '<?= session()->getFlashdata("kembalikanberhasil") ?>',
            });
        });
    </script>
<?php endif; ?>
<!-- Alert Data berhasil DiHapus -->
<?php if (session()->getFlashdata('hapusberhasil')) : ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: '<?= session()->getFlashdata("hapusberhasil") ?>',
        });
    });
</script>
<?php endif; ?>
<!-- data tables -->
<button class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i><a class="text-white" href="<?=base_url('/admin/datapeminjam/tambah') ?>">Tambah Data Peminjam</a></button>
<table id="example1_peminjam" class="table table-bordered table-striped">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>No Peminjam</th>
            <th>Nama Peminjam Buku</th>
            <th>Buku Yang Dipinjam</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Jumlah Buku</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($datapeminjam)) : ?>
        <tr class="odd">
            <td colspan="9" class="text-center">Data Kosong</td>
        </tr>
        <?php else : ?>
        <?php
        $no = 1;
        foreach ($datapeminjam as $row) :
        ?>
            <tr class="odd text-center">
                <td><?= $no++; ?></td>
                <td><?= $row['no_peminjam'] ?></td>
                <td><?= $row['nama_peminjam'] ?></td>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= $row['tanggal_peminjaman'] ?></td>
                <td><?= $row['tanggal_pengembalian'] ? $row['tanggal_pengembalian'] : '-' ?></td>
                <td><?= $row['jumlah_buku'] ?></td>
                <td>
                    <?php if ($row['status'] == 'dipinjam') : ?>
                        <span class="badge bg-danger">dipinjam</span>
                    <?php else : ?>
                        <span class="badge bg-success">dikembalikan</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($row['status'] == 'dipinjam') : ?>
                        <form method="POST" action="/admin/datapeminjam/kembalikan/<?= $row['no_peminjam'] ?>" style="display:inline" onsubmit="return kembalikan()">
                            <input type="hidden" value="Kembalikan" name="_method">
                            <button class="btn btn-success" type="submit" title="Pengembalian">
                                <i class="fas fa-undo"></i>
                            </button>
                        </form>
                    <?php else : ?>
                        <form id="hapusForm" method="POST" action="/admin/datapeminjam/hapus/<?= $row['no_peminjam'] ?>"  style="display:inline">
                            <input type="hidden" value="DELETE" name="_method">
                            <button class="btn btn-danger" type="button" title="Hapus" onclick="konfirmasiHapus()"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach ?>
        <?php endif; ?>
    </tbody>
</table>
<script>
    function kembalikan(){
        return true;
    }
    function konfirmasiHapus() {
        Swal.fire({
            title: 'Yakin Ingin Menghapus Data Peminjam Ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('hapusForm').submit();
            }else{
                return false;
            }
        });
    }
</script>
<?= $this->endSection('isi') ?>
