<?php

function database()
{
            $db = new SQLite3('db_target.sqlite');
        if(!$db)
        {
            echo $db->lasterrorMsg();
            exit();
        }else{
            // echo 'database berhasil';
        }

        return $db;
}

function table()
{
    $db= database();
    $table= $db->query("CREATE TABLE IF NOT EXISTS target_future (id INTEGER PRIMARY KEY, tanggal TEXT NOT NULL, future TEXT NOT NULL,sudah_belum TEXT NOT NULL, keterangan TEXT NOT NULL)");

    return $table;
}

function tampil_target() {
    $db = database();

    $tampil_target = "SELECT * FROM target_future ORDER BY tanggal DESC";
    $result = $db->query($tampil_target);

    $tampil = [];
    while ($row = $result->fetchArray()) {
        $tampil[] = $row;
    }

    return $tampil;
}

function ambil_data_target($ambil_id) 
{

    $db = database();

    $tampil_data_target = "SELECT * FROM target_future WHERE id ='$ambil_id'";
    $tampil_target = $db->query($tampil_data_target);
    $ambil = $tampil_target->fetchArray();

    return $ambil;
}

function tambah_target($tanggal,$target,$sudah_belum,$ket)
{
    $db = database();

    $tambah_data_target = "INSERT INTO target_future (tanggal, future,sudah_belum, keterangan) VALUES ('$tanggal','$target','$sudah_belum','$ket')";
    $tambah_target = $db->query($tambah_data_target);

    return $tambah_target;
}

function update_target($ambil_id,$ambil_tanggal,$ambil_future,$ambil_sudah_belum,$ambil_ket)
{
    $db = database();

    $update_data_target = "UPDATE target_future SET tanggal='$ambil_tanggal', future='$ambil_future', sudah_belum='$ambil_sudah_belum', keterangan='$ambil_ket' WHERE id ='$ambil_id'";
    $update_target = $db->query($update_data_target);

    return $update_target;
}

function delete_target($ambil_id)
{
    $db = database();
    
    $delete_target ="DELETE FROM target_future WHERE id='$ambil_id'";
    $delete = $db->query($delete_target);

    return $delete;
}