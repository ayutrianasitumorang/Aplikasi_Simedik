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
$query = "UPDATE dokter SET nm_dokter='$nm_dokter',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',telepon='$telepon',agama='$agama',
tipe_dr='$tipe_dr' WHERE id_dokter='$id_dokter'";

$update = mysqli_query($koneksi,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}

header ("location:data_dokter.php?status=".$status);

?>
