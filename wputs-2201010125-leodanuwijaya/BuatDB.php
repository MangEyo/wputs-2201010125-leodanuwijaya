<?php
    include("konfigurasi.php");

    $s_db = "CREATE DATABASE ".DBNAME;
    echo "SQL: ".$s_db."<br>";

    //koneksi ke DBMS MySQL

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if ($cnn){
        echo "Koneksi ke DBMS MySQL Sukses <br>";
        $hasil = mysqli_query($cnn, $s_db);
        if($hasil){
            echo "Membuat database ".DBNAME." suskses<br>";
        }else{
            echo "Membuat database ".DBNAME." Gagal<br>";
        }

    }else{
        echo "Koneksi ke DBMS MySQL Gagal <br>";
    }