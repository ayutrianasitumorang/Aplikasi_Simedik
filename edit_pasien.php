<?php 
include 
'header.php';
include 
'koneksi.php';
$id_pasien      = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
$pasien = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4>Edit Data Pasien</h4>
    <Form action="update_pasien.php" method="post">
    <table class="table table-bordered">
    <tr>
                <td>Nomor Rekam Medik</td>
                <td><input type="text" name="id_pasien" value="<?php echo $pasien['id_pasien'] ?>" Placeholder="Nomor Rekam Medik" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $pasien['nama'] ?>" Placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $pasien['alamat'] ?>" Placeholder="Alamat" class="form-control"></td>
            </tr>
            <tr>
              <td>Tanggal Lahir
              </td>
              <td><input name="tgl_lhr" type="date" value="<?php echo $pasien['tgl_lhr'] ?>" placeholder="Tanggal Lahir" class="form-control"></td>
          </tr>
            <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jk" class="form-control">
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select></td>
            </tr>
          <tr>
              <td>Nomor_HP</td>
              <td><input type="text" name="hp" value="<?php echo $pasien['hp'] ?>" Placeholder="Nomor HP" class="form-control"></td>
          </tr>   
          <td>Alergi</td>
              <td><input type="text" name="alergi" value="<?php echo $pasien['alergi'] ?>" Placeholder="Alergi" class="form-control"></td>
          </tr>      
          <td>Nomor BPJS</td>
              <td><input type="text" name="no_bpjs" value="<?php echo $pasien['no_bpjs'] ?>" Placeholder="Nomor BPJS" class="form-control"></td>
          </tr>     
           
            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>
<?php include 'foother.php';?>