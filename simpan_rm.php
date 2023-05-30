<?php
$id_pasien     = $_POST['id_pasien'];
$nama_pasien           = $_POST['nama_pasien'];
$anamnesis         = $_POST['anamnesis'];
$diagnosis        = $_POST['diagnosis'];
$resep             = $_POST['resep'];
$jumlah             = $_POST['jumlah'];
$aturan             = $_POST['aturan'];
$dokter             = $_POST['dokter'];

include ('koneksi.php');
$query = "INSERT INTO rm (id_pasien,nama_pasien,anamnesis,diagnosis,resep,jumlah,aturan,dokter)
VALUES('$id_pasien','$nama_pasien','$anamnesis','$diagnosis','$resep','$jumlah','$aturan','$dokter')";
$insert = mysqli_query($koneksi,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:data_rm.php?status=".$status);
?>
