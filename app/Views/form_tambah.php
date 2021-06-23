<?= $this->extend('layout/template'); ?>

<?= $this->section('konten') ?>
  <div class="container">    
    <center><h1>Tambah Data</h1></center>
    <form method="post" onSubmit="return confirm('Apakah Data Sudah Benar ?')" action="<?= base_url('/home/tambah'); ?>">
  <div class="mb-3">
    <label for="username" class="form-label">User ID</label>
    <input type="number" class="form-control" id="username" name="userid"required>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama_lengkap" required>
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username"required>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" name="password" required>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  <a class="btn btn-success" href="<?= base_url('/home'); ?>">Kembali</a>
  </form> 

</div>
<?= $this->endSection() ?>
