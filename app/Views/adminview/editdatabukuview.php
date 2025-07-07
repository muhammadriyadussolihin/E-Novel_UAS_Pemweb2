<?= $this->extend('adminview/mainview') ?>

<?= $this->section('judul') ?>
Edit Data Buku
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<button type="submit" class="btn btn-warning"><a class="text-white" href="<?= base_url('/admin/databuku')?>"><i class="fas fa-arrow-left mr-2"></i>Kembali</a></button>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<?= form_open_multipart('/admin/databuku/edit/proses_edit')?>
<form class="form-horizontal" id="form">
    <?php
    $pathSampul = $sampul;
    $namaFile = basename($pathSampul);
    ?>
    <!-- Alert Data Gagal Di edit Karena file Sampul Tidak Sesuai -->
    <?php if (session()->getFlashdata('editsampulgagal')) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '<?= session()->getFlashdata("editsampulgagal") ?>',
                });
            });
        </script>
    <?php endif; ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Kode Buku</label>
        <div class="col-sm-6">
            <input type="text" value="<?= $kode_buku  ?>" class="form-control" id="kodebuku" placeholder="Inputkan Kode Buku" name="kodebuku" readonly>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Judul Buku</label>
        <div class="col-sm-6">
            <input type="text" value="<?= $judul_buku  ?>" class="form-control" id="judulbuku" placeholder="Inputkan Judul Buku" name="judulbuku" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Pengarang</label>
        <div class="col-sm-6">
            <input type="text" value="<?= $pengarang  ?>" class="form-control" id="pengarang" placeholder="Inputkan Pengarang" name="pengarang" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Tahun Terbit</label>
        <div class="col-sm-6">
            <input type="text" value="<?= $tahun_terbit  ?>" class="form-control" pattern="\d{4}" title="Masukkan tahun empat digit" id="tahunterbit" placeholder="Inputkan Tahun Terbit" name="tahunterbit" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-6">
            <select class="form-control" name="kategori" required>
                <option value="" disabled selected hidden>Kategori</option>
                <option value="Non-Fiksi" <?= ($kategori == 'Non-Fiksi') ? 'selected' : '';?>>Non Fiksi</option>
                <option value="Novel" <?= ($kategori == 'Novel') ? 'selected' : '';?>>Novel</option>
                <option value="Komik" <?= ($kategori == 'Komik') ? 'selected' : '';?>>Komik</option>
                <option value="Majalah" <?= ($kategori == 'Majalah') ? 'selected' : '';?>>Majalah</option>
                <option value="Kamus" <?= ($kategori == 'Kamus') ? 'selected' : '';?>>Kamus</option>
                <option value="Biografi" <?= ($kategori == 'Biografi') ? 'selected' : '';?>>Biografi</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Jumlah Buku</label>
        <div class="col-sm-6">
            <input type="number" value="<?= $jumlah_buku  ?>" min=1  class="form-control" id="jumlahbuku" placeholder="Inputkan Jumlah Buku" name="jumlahbuku" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label  class="col-sm-2 col-form-label">Sampul</label>
        <div class="col-sm-6">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" onchange="updateFileName(this)" name="sampul">
                <label class="custom-file-label" for="exampleInputFile" id="fileLabel"><?= $namaFile  ?></label>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-lg-6">
            <div class="button-group pt-3 ">
                <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save mr-2"></i>Simpan Data</button>
            </div>
        </div>
    </div>
    <!-- /.card-footer -->
</form>

<script>
    function updateFileName(input) {
        var label = document.getElementById('fileLabel');
        label.innerHTML = input.files[0].name;
    }
</script>

<?= $this->endSection('isi') ?>
