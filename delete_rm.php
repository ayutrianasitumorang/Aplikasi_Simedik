<?php

$id_pasien      = $_GET['id_pasien'];
include('koneksi.php');
$delete = mysqli_query($koneksi,"DELETE FROM rm WHERE id_pasien='$id_pasien'");
if($delete){
    $status = "berhasil";
    
}else{
    $status = "gagal";
}
header("location:data_rm.php?status=".$status);
?>