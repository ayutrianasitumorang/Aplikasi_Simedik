<?php 
include 
'header.php';
include 
'koneksi.php';
$id      = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM ruang WHERE id='$id'");
$ruang = mysqli_fetch_array($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4>Edit Data Ruang</h4>
    <Form action="update_ruang.php" method="post">
    <table class="table table-bordered">
    <tr>
                <td>ID Ruang</td>
                <td><input type="text" name="id" value="<?php echo $ruang['id'] ?>" Placeholder="id" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_ruang" value="<?php echo $ruang['nama_ruang'] ?>" Placeholder="Nama Ruangan" class="form-control"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value="<?php echo $ruang['keterangan'] ?>" Placeholder="Keterangan" class="form-control"></td>
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
<?php include 'foother.php'; ?>
