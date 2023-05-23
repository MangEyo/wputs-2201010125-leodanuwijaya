<?php
include"ViewKonfigurasi.php";
$liat = mysqli_query($konek, "select * from identitas");

$data=[];

while($r=mysqli_fetch_assoc($liat)) {
    $data[]=$r;
}

$identitas=$data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Identitas</title>
</head>
<body>
<style type="text/css">
table {
    width:100%;
}
table,th,td {
    border:1px solid;
}
</style>    
<table>
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Prodi</th>
        <th>Jurusan</th>
    </tr>

    <?php $no=1; foreach($identitas as $l):?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $l['NIM'] ?></td>
        <td><?php echo $l['nama'] ?></td>
        <td><?php echo $l['alamat'] ?></td>
        <td><?php echo $l['prodi'] ?></td>
        <td><?php echo $l['jurusan'] ?></td>

    </tr>
    <?php endforeach ?>


</body>
</html>