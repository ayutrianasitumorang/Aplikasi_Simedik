<?php 
include 
'header.php';
include 
'koneksi.php';
$id_dokter      = $_GET['id_dokter'];
$query = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
$dokter = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4>Edit Data Dokter</h4>
    <Form action="update_dokter.php" method="post">
    <table class="table table-bordered">
    <tr>
                <td>ID Dokter</td>
                <td><input type="text" name="id_dokter" value="<?php echo $dokter['id_dokter'] ?>" Placeholder="ID Dokter" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nm_dokter" value="<?php echo $dokter['nm_dokter'] ?>" Placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
              <td>Tanggal Lahir
              </td>
              <td><input name="tanggal_lahir" type="date" value="<?php echo $dokter['tanggal_lahir'] ?>" placeholder="Tanggal Lahir" class="form-control"></td>
          </tr>
          <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan" >Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $dokter['alamat'] ?>" Placeholder="Alamat" class="form-control"></td>
            </tr>
            <tr>
          <tr>
              <td>Nomor Handphone</td>
              <td><input type="text" name="telepon" value="<?php echo $dokter['telepon'] ?>" Placeholder="Nomor HP" class="form-control"></td>
          </tr>   
          <tr>
                <td>Agama</td>
                <td><select name="agama"  class="form-control">
                    <option value="Islam">Islam</option>
                    <option value="kristen" >Kristen</option>
                    <option value="katolik" >Katolik</option>
                    <option value="Hindu" >Hindu</option>
                    <option value="Budha" >Budha</option>
                    <option value="Konghucu" >Konghucu</option>
                        </select></td>
            </tr>    
          <td>Spesialis</td>
              <td><input type="text" name="tipe_dr" value="<?php echo $dokter['tipe_dr'] ?>" Placeholder="Spesialis" class="form-control"></td>
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
