<?php

$id      = $_POST['id'];
$nama_ruang           = $_POST['nama_ruang'];
$keterangan         = $_POST['keterangan'];

include ('koneksi.php');
$query = "UPDATE ruang SET nama_ruang='$nama_ruang',keterangan='$keterangan' WHERE id='$id'";

$update = mysqli_query($koneksi,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}

header ("location:data_ruang.php?status=".$status);

?>
