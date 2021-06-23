<?= $this->extend('layout/template'); ?>

<?= $this->section('konten') ?>
<div class="container">    

<a href="<?= base_url('/home/form_tambah') ?>" class="btn m-2 btn-success btn-sm">Tambah Akun</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
    <tr>
        <td><?= $row->userid ?></td>
        <td><?= $row->username ?></td>
        <td><?= $row->password ?></td>
        <td><?= $row->nama_lengkap ?></td>
        <td><a href="<?= base_url('/home/form_edit/'.$row->userid) ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= base_url('/home/hapus/'.$row->userid) ?>" class="btn btn-success btn-sm">Delete</a>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<?= $this->endSection() ?>
