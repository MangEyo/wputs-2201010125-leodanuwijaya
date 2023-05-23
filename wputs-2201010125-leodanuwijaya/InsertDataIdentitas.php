<?php
include("konfigurasi.php");
include("fungsiIdentitas.php");

    $psn = "";
    if(isset($_POST["txNIM"])){
            $NIM = $_POST["txNIM"];
            $nama = $_POST["txNAMA"];
            $alamat = $_POST["txALAMAT"];
            $prodi = $_POST["txPRODI"];
            $jurusan = $_POST["txJUR"];
            $psn = registerUSER($NIM, $nama, $alamat, $prodi, $jurusan);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    
    <form method="POST" action="registrasi.php">
<?php 
echo "<div>$psn</div>";
?>
<h3 align="center">Masukan Data Ke Tabel Identitas</h3>
<table align="center" border=1px>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="txNIM"></td>
        </tr>

        <tr>
            <td>Nama</td> 
            <td><input type="text" name="txNAMA"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="txALAMAT"></td>
        </tr>

        <tr>
            <td>Prodi</td>
            <td><input type="text" name="txPRODI"></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="txJUR"></td>
        </tr>

        <tr>
            <td><button type="submit"> Input Data </button></td>
        </tr>

    </form>
</table>
</body>
</html>