<?php
$id_dokter      = $_POST['id_dokter'];
$nm_dokter           = $_POST['nm_dokter'];
$tanggal_lahir         = $_POST['tanggal_lahir'];
$jenis_kelamin        = $_POST['jenis_kelamin'];
$alamat             = $_POST['alamat'];
$telepon             = $_POST['telepon'];
$agama         = $_POST['agama'];
$tipe_dr        = $_POST['tipe_dr'];

include ('koneksi.php');
$query = "INSERT INTO dokter (id_dokter,nm_dokter,tanggal_lahir,jenis_kelamin,alamat,telepon,agama,tipe_dr)
VALUES('$id_dokter','$nm_dokter','$tanggal_lahir','$jenis_kelamin','$alamat','$telepon','$agama','$tipe_dr')";
$insert = mysqli_query($koneksi,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:data_dokter.php?status=".$status);
?>
