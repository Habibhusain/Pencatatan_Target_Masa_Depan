<?php
require "db.php";

$ambil_id = $_GET['id'];

function ambil_data_target() {
    global $db;
    global $ambil_id;

    $tampil_data_target = "SELECT * FROM target_future WHERE id ='$ambil_id'";
    $tampil_target = $db->query($tampil_data_target);
    $tampil = $tampil_target->fetchArray();

    return $tampil;
}

if (isset($_POST['future']) && $_POST['future'] != '') {
    $ambil_tanggal = $_POST['tanggal'];
    $ambil_future = $_POST['future'];
    $ambil_sudah_belum = $_POST['sudah_belum'];
    $ambil_ket = $_POST['keterangan'];

    $update_data_target = "UPDATE target_future SET tanggal='$ambil_tanggal', future='$ambil_future', sudah_belum='$ambil_sudah_belum', keterangan='$ambil_ket' WHERE id ='$ambil_id'";
    $update_target = $db->query($update_data_target);

    if ($update_target) {
        echo "<script>
              alert('Data Berhasil di Edit');
              window.location='target.php';
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
        <form action="edit_target.php?id=<?php echo ambil_data_target()['id']; ?>" method="POST">
            <input type="date" name="tanggal" value="<?php echo ambil_data_target()['tanggal']; ?>" required>
            <input type="text" name="future" value="<?php echo ambil_data_target()['future']; ?>" readonly>
            <select name="sudah_belum">
                <option>Belum Tercapai</option>
                <option>Sudah Tercapai</option>
                <option>Masih Belum Tercapai</option>
            </select>
            <textarea name="keterangan" required><?php echo ambil_data_target()['keterangan']; ?></textarea>
            <input type="submit" name="submit" value="Edit Target">
            <a href="target.php">Kembali Ke Beranda</a>
        </form>
    </div>
</body>
</html>
