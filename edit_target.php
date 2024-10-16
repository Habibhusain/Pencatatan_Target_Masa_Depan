<?php
require "db.php";
require "function.php";

$ambil_id = $_GET['id'];

if (isset($_POST['future']) && $_POST['future'] != '') {
    $ambil_tanggal = $_POST['tanggal'];
    $ambil_future = $_POST['future'];
    $ambil_sudah_belum = $_POST['sudah_belum'];
    $ambil_ket = $_POST['keterangan'];

    $update = update_target($ambil_id,$ambil_tanggal,$ambil_future,$ambil_sudah_belum,$ambil_ket);

    if ($update) {
        echo "<script>
              alert('Data Berhasil di Edit');
              window.location='index.php';
              </script>";
    } else {
        echo "<script>
              alert('Data Gagal di Edit');
              window.location='edit_target.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Target</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-edit-target">
        <h1>Form Edit Target</h1>
        <form action="edit_target.php?id=<?php echo ambil_data_target($ambil_id)['id']; ?>" method="POST">
            <input type="date" name="tanggal" value="<?php echo ambil_data_target($ambil_id)['tanggal']; ?>" required>
            <input type="text" name="future" value="<?php echo ambil_data_target($ambil_id)['future']; ?>" readonly>
            <select name="sudah_belum">
                <option>Belum Tercapai</option>
                <option>Sudah Tercapai</option>
                <option>Masih Belum Tercapai</option>
            </select>
            <textarea name="keterangan" required><?php echo ambil_data_target($ambil_id)['keterangan']; ?></textarea>
            <input type="submit" name="submit" value="Edit Target">
            <a href="index.php">Kembali Ke Beranda</a>
        </form>
    </div>
</body>
</html>
