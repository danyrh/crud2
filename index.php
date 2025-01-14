<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php1</title>
</head>
<style>
</style>
<body>
    <div class="container">
        <h2>Data Handphone</h2>

<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id=htmlspecialchars($_GET["id"]);

    $sql="delete from tb_konter where id='$id' ";
    $hasil=mysqli_query($koneksi,$sql);

        if ($hasil) {
            header("Location:index.php");
        }
    }
?>

        <thead>
        <tr>
       <table class="table">
            <tr class="table-utama">           
            <th>No</th>
            <th>Nama</th>
            <th>Warna</th>
            <th>Deskripsi</th>
            <th>Harga</th>
        </tr>

        <?php
        include 'koneksi.php';
        $sql="select * from tb_konter order by id";

        $hasil=mysqli_query($koneksi,$sql);
        $id=0;
        while ($row = mysqli_fetch_array($hasil)) {
            $id++;

            ?>

        </thead>    
        <tbody>
            <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $row ['nama'];?></td>
            <td><?php echo $row ['warna'];?></td>
            <td><?php echo $row ['deskripsi'];?></td>
            <td><?php echo $row ['harga'];?></td>
        </tr>
        </tbody> 
        <?php
        }
        ?>   
    </table>
</div>
        <a href="create.php" role="button">Tambah Data</a>
</body>
</html>
