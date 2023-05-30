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
$query = "UPDATE pasien SET nama='$nama',alamat='$alamat',tgl_lhr='$tgl_lhr',
jk='$jk',hp='$hp',alergi='$alergi',no_bpjs='$no_bpjs' WHERE id_pasien='$id_pasien'";

$update = mysqli_query($koneksi,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}

header ("location:data_pasien.php?status=".$status);

?>
