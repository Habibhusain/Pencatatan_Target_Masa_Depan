<?php
require "db.php";
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target Masa Depan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="target">
        <div class="box-target">
        <h1>Pencatatan Target Masa Depan</h1>
        <a href="tambah_target.php">Tambah Target</a>
        </div>
        <div class="boxes-target">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Target Masa Depan</th>
                    <th>Sudah/Belum Tercapai</th>
                    <th>keterangan</th>
                    <th colspan=2>Action</th>
                </tr>
            </thead>
            <?php 
            $tampil_target = tampil_target();
            $no = 1;
            foreach ($tampil_target as $row):
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo date('d-m-Y', strtotime($row ['tanggal']));?></td>
                <td><?php echo $row['future'];?></td>
                <td><?php echo $row['sudah_belum'];?></td>
                <td><?php echo $row['keterangan'];?></td>
                <td><a href="edit_target.php?id=<?php echo $row['id'];?>">Edit</a></td>
                <td><a href="hapus_target.php?id=<?php echo $row['id'];?>" onclick="return confirm('Yakin Mau Hapus Target mu ??:(')">Hapus</a></td>
            </tr>
            <?php
                $no++;
                endforeach;
            ?>
        </table>
        <p>&copy; 2024 by Habib Husain Nurrohim. All rights reserved.</p>

        </div>
        </div>
       
</body>
</html>