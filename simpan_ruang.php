<?php
$id      = $_POST['id'];
$nama_ruang           = $_POST['nama_ruang'];
$keterangan         = $_POST['keterangan'];

include ('koneksi.php');
$query = "INSERT INTO ruang (id,nama_ruang,keterangan)
VALUES('$id','$nama_ruang','$keterangan')";
$insert = mysqli_query($koneksi,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:data_ruang.php?status=".$status);
?>
