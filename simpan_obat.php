<?php
$id     = $_POST['id'];
$nama_obat           = $_POST['nama_obat'];
$sediaan         = $_POST['sediaan'];
$dosis        = $_POST['dosis'];
$stok             = $_POST['stok'];
$harga             = $_POST['harga'];

include ('koneksi.php');
$query = "INSERT INTO obat (id,nama_obat,sediaan,dosis,stok,harga)
VALUES('$id','$nama_obat','$sediaan','$dosis','$stok','$harga')";
$insert = mysqli_query($koneksi,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:data_obat.php?status=".$status);
?>
