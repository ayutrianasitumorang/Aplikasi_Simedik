<?php

$id     = $_POST['id'];
$Nama           = $_POST['Nama'];
$image         = $_POST['image'];
$Password        = $_POST['Password'];
$Profesi             = $_POST['Profesi'];

include ('koneksi.php');
$query = "UPDATE pegawai SET Nama='$Nama',image='$image',Password='$Password',Profesi='$Profesi' WHERE id='$id'";

$update = mysqli_query($koneksi,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}

header ("location:data_pegawai.php?status=".$status);

?>
