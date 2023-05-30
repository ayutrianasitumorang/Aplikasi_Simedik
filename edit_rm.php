<?php 
include 
'header.php';
include 
'koneksi.php';
$id_pasien      = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "SELECT * FROM rm WHERE id_pasien='$id_pasien'");
$rm = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4>Edit Data Rekam Medis</h4>
    <Form action="update_rm.php" method="post">
    <table class="table table-bordered">
    <tr>
                <td>Nomor Rekam Medik</td>
                <td><input type="text" name="id_pasien" value="<?php echo $rm['id_pasien'] ?>" Placeholder="ID Pasien" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_pasien" value="<?php echo $rm['nama_pasien'] ?>" Placeholder="Nama Pasien" class="form-control"></td>
            </tr>
            <tr>
                <td>Anamnesis</td>
                <td><input type="text" name="anamnesis" value="<?php echo $rm['anamnesis'] ?>" Placeholder="Anamnesis" class="form-control"></td>
            </tr>
            <tr>
              <td>Diagnosa
              <td><input name="diagnosis" type="text" value="<?php echo $rm['diagnosis'] ?>" placeholder="Diagnosa" class="form-control"></td>
          </tr>
            <tr>
              <td>Resep</td>
              <td><input type="text" name="resep" value="<?php echo $rm['resep'] ?>" Placeholder="Resep" class="form-control"></td>
          </tr>   
          <td>Jumlah</td>
              <td><input type="text" name="jumlah" value="<?php echo $rm['jumlah'] ?>" Placeholder="Jumlah" class="form-control"></td>
          </tr>    
          <td>Aturan</td>
              <td><input type="text" name="aturan" value="<?php echo $rm['aturan'] ?>" Placeholder="Aturan Pakai" class="form-control"></td>
          </tr>   
          <td>Dokter</td>
              <td><input type="text" name="dokter" value="<?php echo $rm['dokter'] ?>" Placeholder="Dokter" class="form-control"></td>
          </tr> 
            <tr>
                <td></td>
                <td>
                  <button type="submit"  class="btn btn-success">Simpan Data</button>
                <a href="data_rm.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>
