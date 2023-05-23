<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE identitas(
        NIM VARCHAR(20)PRIMARY KEY,
        nama VARCHAR(35),
        alamat VARCHAR(255),
        prodi VARCHAR(255),
        jurusan VARCHAR(255)
    );";
    echo "SQL: ".$s_db."<br>";

    //koneksi ke DBMS MySQL

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if ($cnn){
        echo "Koneksi ke DBMS MySQL Sukses <br>";
        $hsl = mysqli_query($cnn, $s_db);
        if($hsl){
            echo "Membuat Tabel identitas suskses<br>";
        }else{
            echo "Membuat Tabel identitas Gagal<br>";
        }

    }else{
        echo "Koneksi ke DBMS MySQL Gagal <br>";
    }