<?php 
include 
'header.php';
include 
'koneksi.php';
$id      = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id='$id'");
$pegawai = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4>Edit Data pegawai</h4>
    <Form action="update_pegawai.php" method="post">
    <table class="table table-bordered">
    <tr>
                <td>ID pegawai</td>
                <td><input type="text" name="id" value="<?php echo $pegawai['id'] ?>" Placeholder="id" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $pegawai['Nama'] ?>" Placeholder="Nama pegawai" class="form-control"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" value="<?php echo $pegawai['Username'] ?>" Placeholder="Username" class="form-control"></td>
            </tr>
            <tr>
              <td>Profesi</td>
              <td><input name="Profesi" type="text" value="<?php echo $pegawai['Profesi'] ?>" placeholder="Profesi" class="form-control"></td>
          </tr>
                <tr>
                <td></td>
                <td>
                  <button type="submit"  class="btn btn-success">Simpan Data</button>
                <a href="data_pegawai.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>
