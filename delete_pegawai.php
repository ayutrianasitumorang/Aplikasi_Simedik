<?php

$id      = $_GET['id'];
include('koneksi.php');
$delete = mysqli_query($koneksi,"DELETE FROM pegawai WHERE id='$id'");
if($delete){
    $status = "berhasil";
    
}else{
    $status = "gagal";
}
header("location:data_pegawai.php?status=".$status);
?>