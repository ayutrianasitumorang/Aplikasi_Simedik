<?php

$id_pasien      = $_POST['id_pasien'];
$nama_pasien           = $_POST['nama_pasien'];
$anamnesis         = $_POST['anamnesis'];
$diagnosis        = $_POST['diagnosis'];
$resep             = $_POST['resep'];
$jumlah             = $_POST['jumlah'];
$aturan         = $_POST['aturan'];
$dokter        = $_POST['dokter'];

include ('koneksi.php');
$query = "UPDATE rm SET nama_pasien='$nama_pasien',anamnesis='$anamnesis',diagnosis='$diagnosis',resep='$resep',jumlah='$jumlah',aturan='$aturan',dokter='$dokter' WHERE id_pasien='$id_pasien'";

$update = mysqli_query($koneksi,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}

header ("location:data_rm.php?status=".$status);

?>
