<?php

$id_dokter      = $_GET['id_dokter'];
include('koneksi.php');
$delete = mysqli_query($koneksi,"DELETE FROM dokter WHERE id_dokter='$id_dokter'");
if($delete){
    $status = "berhasil";
    
}else{
    $status = "gagal";
}
header("location:data_dokter.php?status=".$status);
?>