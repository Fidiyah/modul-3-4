<?php
include '../koneksi.php';
$sql = "SELECT * FROM buku ORDER BY judul";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}
?>
<?php
include '../asset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md"></div>
    </div>

<div class="card">
<div class="card-header">
        <h2 class="card-title"><i class="fas fa-book"></i>Data Buku</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">#</th>
                    <th scope="row">Judul</th>
                    <th scope="row">Pengarang</th>
                    <th scope="row">Stok</th>
                    <th scope="row">Aksi</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach ($pinjam as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['judul'] ?></th>
            <td><?= $p['pengarang'] ?></th>
            <td><?= $p['stok'] ?></th>
            <td>
                <a href="#" class="badge badge-success">Detail</a>
                <a href="#" class="badge badge-warning">Edit</a>
                <a href="#" class="badge badge-danger">Hapus</a>
               
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
        
        </table>
    </div>
    <div>
    <a class="nav-item nav-link badge badge-info" href="http://localhost/siperpus/buku/tambah.php" 
                align="right">tambah data Buku</a>
                <div>
</div>
</div>
<?php
include '../asset/footer.php';
?>