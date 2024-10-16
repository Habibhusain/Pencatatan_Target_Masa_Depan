<?php

$db = new SQLite3('db_target.sqlite');
if(!$db)
{
    echo $db->lasterrorMsg();
    exit();
}else{
    // echo 'database berhasil';
}


$db->query("CREATE TABLE IF NOT EXISTS target_future (id INTEGER PRIMARY KEY, tanggal TEXT NOT NULL, future TEXT NOT NULL,sudah_belum TEXT NOT NULL, keterangan TEXT NOT NULL)");