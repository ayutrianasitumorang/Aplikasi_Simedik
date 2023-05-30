<?php

$id      = $_GET['id'];
include('koneksi.php');
$delete = mysqli_query($koneksi,"DELETE FROM obat WHERE id='$id'");
if($delete){
    $status = "berhasil";
    
}else{
    $status = "gagal";
}
header("location:data_obat.php?status=".$status);
?>