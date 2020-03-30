<?php include '../asset/header.php';
?>
<div class="container">
<div class="row mt-4">
<div class="col-md-9">
<div class="card">
<div class="card-header"><h2>Tambah Data Anggota</h2>
</div>
<div class="card-body">
<form method="post" action="proses-tambah.php">
    <div class="form-group">
    <label for="anggota">Nama Lengkap</label>
    <input type ="text" class="form-control"name="nama"id="anggota" 
    placeholder="masukkan nama lengkap">
    </div>
    <div class="form-group">
    <label for="kelas">Kelas</label>
    <input type ="text" class="form-control"name="kelas"id="kelas"
    placeholder="masukkan kelas">
    <small class="form-text-text-muted">contoh:XRPL2</small>
    </div>
    <div class="form-group">
    <label for="username">Username</label>
    <input type ="text" class="form-control"name="username"id="username"
    placeholder="masukkan username">
    </div>
    <div class="form-group">
    <label for="password">password</label>
    <input type ="text" class="form-control"name="password"id="password"
    placeholder="masukkan password">
    </div>
        <button type="submit" class="btn btn-primary"
        name="simpan">Simpan</button>
</div>
</div>
</div>
</div>
<?php include '../asset/footer.php';
?>