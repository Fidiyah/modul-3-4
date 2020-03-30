<?php include '../asset/header.php';
?>
<div class="container">
<div class="row mt-4">
<div class="col-md-9">
<div class="card">
<div class="card-header"><h2>Tambah Data Buku</h2>
</div>
<div class="card-body">
<form method="post" action="proses-tambah.php">
    <div class="form-group">
    <label for="judul">judul</label>
    <input type ="text" class="form-control"name="judul"id="judul" 
    placeholder="masukkan judul">
    </div>
    <div class="form-group">
    <label for="pengarang">pengarang</label>
    <input type ="text" class="form-control"name="pengarang"id="pengarang"
    placeholder="masukkan nama pengarang">
    </div>
    <div class="form-group">
    <label for="stok">stok</label>
    <input type ="text" class="form-control"name="stok"id="stok"
    placeholder="masukkan jumlah stok">
    </div>
        <button type="submit" class="btn btn-primary"
        name="simpan">Simpan</button>
</div>
</div>
</div>
</div>
<?php include '../asset/footer.php';
?>