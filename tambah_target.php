<?php

require "db.php";

if(isset($_POST['future']) && $_POST['future'] !=''){

    $tanggal = $_POST['tanggal'];
    $target = $_POST['future'];
    $sudah_belum = $_POST ['sudah_belum'];
    $ket = $_POST ['keterangan'];
    $tambah_data_target = "INSERT INTO target_future (tanggal, future,sudah_belum, keterangan) VALUES ('$tanggal','$target','$sudah_belum','$ket')";
    $tambah_target = $db->query($tambah_data_target);
    if($tambah_target)
    {
        echo "<script>
               alert=('Data Berhasil Di Tambah');
               window.location='target.php'; 
              </script>";
    }else{
        echo "<script>
               alert=('Data Gagal Di Tambah');
               window.location='tambah_target.php'; 
              </script>";
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Target</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="container-tambah-target">
            <h1>Tambah Targetmu</h1>
        <form action="" method="POST">
            <label> Tanggal</label>
            <input type="date" name="tanggal" required><br>
            <label> Target yang Ingin di Capai</label>
            <input type="text" name="future" required><br>
            <input type="text" name="sudah_belum" value="Belum Tercapai" hidden>
            <textarea name="keterangan" hidden>Jangan lupa Isi ini jika sudah melewati tanggal</textarea>
            <input type="submit" name="submit">
            <a href="target.php">Kembali ke Beranda</a>
        </form>
        </div>
</body>
</html>