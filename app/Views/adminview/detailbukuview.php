<?= $this->extend('adminview/mainview') ?>

<?= $this->section('judul') ?>
Detail Buku
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<button type="submit" class="btn btn-warning"><a class="text-white" href="<?= base_url('/admin/databuku')?>"><i class="fas fa-arrow-left mr-2"></i>Kembali</a></button>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<div class="row g-0">
    <div class="col-md-1"></div>
    <div class="col-md-4 d-flex align-items-center justify-content-center">
        <img src="<?= base_url($databuku['sampul']); ?>" alt="Sampul Buku" alt="Foto Mobil" class="img-fluid rounded-start" style="margin: 20px;margin-top:40px; width: 150px; height: auto;">
    </div>
    <div class="col-md-6">
        <div class="card-body">
            <ul class="list-unstyled">
                <li>
                    <strong>Kode Buku</strong> <span>: <?= $databuku['kode_buku'] ?></span>
                </li>
                <li>
                    <strong>Judul Buku</strong> <span>: <?= $databuku['judul_buku'] ?></span>
                </li>
                <li>
                    <strong>Pengarang</strong> <span>: <?= $databuku['pengarang'] ?></span>
                </li>
                <li>
                    <strong>Tahun Terbit</strong> <span>: <?= $databuku['tahun_terbit'] ?></span>
                </li>
                <li>
                    <strong>Kategori</strong> <span>: <?= $databuku['kategori'] ?></span>
                </li>
                <li>
                    <strong>Jumlah Buku</strong> <span>: <?= $databuku['jumlah_buku'] ?></span>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    ul.list-unstyled {
    padding: 0;
    margin: 20px;
    margin-left: 100px;
    }

    ul.list-unstyled li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    }

    ul.list-unstyled strong {
    width: 150px;
    display: inline-block;
    }

    ul.list-unstyled span {
    margin-left: 10px;
    }
</style>
<?= $this->endSection('isi') ?>
