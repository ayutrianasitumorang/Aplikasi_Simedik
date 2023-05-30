<?php

$id      = $_POST['id'];
$nama_obat           = $_POST['nama_obat'];
$sediaan         = $_POST['sediaan'];
$dosis        = $_POST['dosis'];
$stok             = $_POST['stok'];
$harga             = $_POST['harga'];

include ('koneksi.php');
$query = "UPDATE obat SET nama_obat='$nama_obat',sediaan='$sediaan',dosis='$dosis',
stok='$stok',harga='$harga' WHERE id='$id'";

$update = mysqli_query($koneksi,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}

header ("location:data_obat.php?status=".$status);

?>
