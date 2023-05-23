<?php
function registerUSER($NIM, $nama, $alamat, $prodi, $jurusan){
    $psn = "";
    $sql = "INSERT INTO identitas(NIM, nama, alamat, prodi, jurusan) VALUES('$NIM', '$nama', '$alamat', '$prodi', '$jurusan');";
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($cnn){
        $hsl = mysqli_query($cnn, $sql);
        if($hsl){
           $psn = "Insert Data Sukses";
        }
    }
    return $psn;
}