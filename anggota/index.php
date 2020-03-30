<?php
include '../koneksi.php';
$sql = "SELECT * FROM anggota ORDER BY nama";
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
        <h2 class="card-title"><i class="fas fa-user"></i> Data Anggota</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">#</th>
                    <th scope="row">Nama</th>
                    <th scope="row">Kelas</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach ($pinjam as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nama'] ?></th>
            <td><?= $p['kelas'] ?></th>
            <td>
        
                
            </td>
        </tr>
        
        <?php
            $no++;
        }
        ?>
        
        </table>
        
    </div>
    <div>
    <a class="nav-item nav-link badge badge-success" href="http://localhost/siperpus/anggota/tambah.php" 
                align="right">tambah data anggota</a>
                <div>
</div>
</div>
<?php
include '../asset/footer.php';
?>