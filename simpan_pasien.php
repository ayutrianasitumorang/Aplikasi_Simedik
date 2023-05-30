<?php
$id_pasien      = $_POST['id_pasien'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$tgl_lhr        = $_POST['tgl_lhr'];
$jk             = $_POST['jk'];
$hp             = $_POST['hp'];
$alergi         = $_POST['alergi'];
$no_bpjs        = $_POST['no_bpjs'];

include ('koneksi.php');
$query = "INSERT INTO pasien (id_pasien,nama,alamat,tgl_lhr,jk,hp,alergi,no_bpjs)
VALUES('$id_pasien','$nama','$alamat','$tgl_lhr','$jk','$hp','$alergi','$no_bpjs')";
$insert = mysqli_query($koneksi,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:data_pasien.php?status=".$status);
?>
