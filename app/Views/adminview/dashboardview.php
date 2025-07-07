<?= $this->extend('adminview/mainview') ?>

<?= $this->section('judul') ?>
Dashboard Admin
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<ol class="breadcrumb bg-white mb-0">
    <li class="breadcrumb-item"><a href="<?=base_url('/admin/home') ?>">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $totalBuku ?></h3>
                <p>Total Data Buku</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?=  $totalPeminjam ?></h3>
                <p>Total Data Peminjam</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=  $totalKembali ?></h3>
                <p>Dikembalikan</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=  $totalPinjam ?></h3>
                <p>Belum Dikembalikan</p>
              </div>
              <div class="icon">
                <i class="fas fa-exclamation-circle"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
<?= $this->endSection('isi') ?>

