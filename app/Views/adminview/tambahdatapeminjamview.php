<?= $this->extend('adminview/mainview') ?>

<?= $this->section('judul') ?>
Tambah Data Peminjam
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<button type="submit" class="btn btn-warning"><a class="text-white" href="<?= base_url('/admin/datapeminjam')?>"><i class="fas fa-arrow-left mr-2"></i>Kembali</a></button>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<?= form_open('/admin/datapeminjam/tambah/proses_tambah')?>
<form class="form-horizontal" id="form">
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">No Peminjam</label>
        <div class="col-sm-6">
            <input type="text" value="<?= $nopeminjam ?>" class="form-control" id="nopeminjam" placeholder="Inputkan No Peminjam" name="nopeminjam" readonly>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Nama Peminjam</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="namapeminjam" placeholder="Inputkan Nama Peminjam" name="namapeminjam" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Buku Yang Dipinjam</label>
        <div class="col-sm-6">
            <select class="form-control" id="judulbuku" name="judulbuku" required>
                <option value="" disabled selected hidden>--- Judul Buku ---</option>
                <?php
                $addedTitles = array();
                foreach ($daftarbuku as $daftar) {
                    $jumlah_buku = intval($daftar['jumlah_buku']);
                    if ($jumlah_buku > 0 && !in_array($daftar['judul_buku'], $addedTitles)) {
                        echo '<option data-max="' . $jumlah_buku . '" value="' . $daftar['kode_buku'] . '">' . $daftar['judul_buku'] . '</option>';
                        $addedTitles[] = $daftar['judul_buku'];
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
        <div class="col-sm-6">
            <input type="datetime-local" class="form-control" id="tanggalpeminjaman" placeholder="Inputkan Tanggal Peminjaman" name="tanggalpeminjaman" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Jumlah Buku</label>
        <div class="col-sm-6">
            <input type="number" min=1 class="form-control" id="jumlahbuku" placeholder="Inputkan Jumlah Buku" name="jumlahbuku" required>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-lg-6">
            <div class="button-group pt-3 ">
                <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save mr-2"></i>Tambah Peminjam</button>
                <button type="reset" class="btn btn-danger"><i class="fas fa-sync-alt mr-2"></i>Reset</button>
            </div>
        </div>
    </div>
    <!-- /.card-footer -->
</form>
<script>
    document.getElementById('judulbuku').addEventListener('change', function () {
        var selectedOption = this.options[this.selectedIndex];
        var maxJumlahBuku = selectedOption.getAttribute('data-max');

        document.getElementById('jumlahbuku').max = maxJumlahBuku;
    });
</script>
<?= $this->endSection('isi') ?>
