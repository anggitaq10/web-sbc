<h2>Ubah Data Pelanggan</h2>
<?php 
$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Pelanggan</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan'] ?>">
    </div>

    <div class="form-group">
        <label>Email_Pelanggan</label>
        <input type="text" name="email" class="form-control" value="<?php echo $pecah['email_pelanggan'] ?>">
    </div>

    <div class="form-group">
        <label>No Telepon</label>
        <input type="number" name="telepon" class="form-control" value="<?php echo $pecah['no_telepon'] ?>">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $pecah['password'] ?>">
    </div>

    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $password = $_POST['password'];

    
    $query = "UPDATE pelanggan SET 
                nama_pelanggan='$nama', 
                email_pelanggan='$email', 
                no_telepon='$telepon', 
                password='$password' 
              WHERE id_pelanggan='$_GET[id]'";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Data pelanggan berhasil diubah');</script>";
        echo "<script>location='index.php?halaman=pelanggan';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data pelanggan: " . $koneksi->error . "');</script>";
    }
}
?>