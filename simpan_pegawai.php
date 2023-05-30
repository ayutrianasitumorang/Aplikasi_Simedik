<?php
$id             = $_POST['id'];
$Nama           = $_POST['Nama'];
$Username       = $_POST['Username'];
$Profesi       = $_POST['Profesi'];

include ('koneksi.php');
$query = "INSERT INTO pegawai (id,Nama,Username,Profesi)
VALUES('$id','$Nama','$Username','$Profesi')";
$insert = mysqli_query($koneksi,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:data_pegawai.php?status=".$status);
?>
