<?php

require "db.php";

$ambil_id = $_GET['id'];

$delete_target ="DELETE FROM target_future WHERE id='$ambil_id'";
$delete = $db->query($delete_target);

if($delete)
{
    echo "<script>
            alert('Data Berhasil di Hapus');
            window.location='target.php';
          </script>";
}else{
    echo "<script>
            alert('Data Gagal di Hapus');
            window.location='target.php';
          </script>";
}