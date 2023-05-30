<?php

$id_pasien      = $_GET['id_pasien'];
include('koneksi.php');
$delete = mysqli_query($koneksi,"DELETE FROM pasien WHERE id_pasien='$id_pasien'");
if($delete){
    $status = "berhasil";
    
}else{
    $status = "gagal";
}
header("location:data_pasien.php?status=".$status);
?>