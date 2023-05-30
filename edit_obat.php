<?php 
include 
'header.php';
include 
'koneksi.php';
$id      = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM obat WHERE id='$id'");
$obat = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4>Edit Data Obat</h4>
    <Form action="update_pasien.php" method="post">
    <table class="table table-bordered">
    <tr>
                <td>ID Obat</td>
                <td><input type="text" name="id" value="<?php echo $obat['id'] ?>" Placeholder="id" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_obat" value="<?php echo $obat['nama_obat'] ?>" Placeholder="Nama Obat" class="form-control"></td>
            </tr>
            <tr>
                <td>Sediaan</td>
                <td><input type="text" name="sediaan" value="<?php echo $obat['sediaan'] ?>" Placeholder="Sediaan" class="form-control"></td>
            </tr>
            <tr>
              <td>Dosis</td>
              <td><input name="dosis" type="date" value="<?php echo $obat['dosis'] ?>" placeholder="Dosis" class="form-control"></td>
          </tr>
            <tr>
              <td>Stok</td>
              <td><input type="text" name="stok" value="<?php echo $obat['stok'] ?>" Placeholder="Stok" class="form-control"></td>
          </tr>   
          <td>Harga</td>
              <td><input type="text" name="harga" value="<?php echo $obat['harga'] ?>" Placeholder="Harga" class="form-control"></td>
          </tr>      
            <tr>
                <td></td>
                <td>
                  <button type="submit"  class="btn btn-success">Simpan Data</button>
                <a href="data_obat.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>
