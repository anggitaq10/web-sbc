<h2>Ubah Produk</h2>
<?php 
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk'] ?>">
    </div>

    <div class="form-group">
        <label>Berat (Gr)</label>
        <input type="number" name="berat" class="form-control" value="<?php echo $pecah['berat_produk'] ?>">
    </div>

    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_produk'] ?>">
    </div>

    <div class="form-group">
        <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="200">
    </div>

    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="10"> <?php echo $pecah['deskripsi_produk']; ?>
        </textarea>
    </div>

    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $id_produk = $_GET['id'];
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    // Validasi data yang diperlukan
    if (!isset($_POST['nama'], $_POST['berat'], $_POST['harga'], $_POST['deskripsi'])) {
        die("Input tidak lengkap.");
    }

    // Jika foto diubah
    if (!empty($lokasifoto)) {
        // Upload file
        if (move_uploaded_file($lokasifoto, "../foto_produk/$namafoto")) {
            // Update dengan foto baru
            $query = "UPDATE produk SET nama_produk='$_POST[nama]', berat_produk='$_POST[berat]', harga_produk='$_POST[harga]', deskripsi_produk='$_POST[deskripsi]', foto_produk='$namafoto' WHERE id_produk='$id_produk'";
        } else {
            die("Upload foto gagal.");
        }
    } else {
        // Update tanpa foto
        $query = "UPDATE produk SET nama_produk='$_POST[nama]', berat_produk='$_POST[berat]', harga_produk='$_POST[harga]', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$id_produk'";
    }

    // Eksekusi query
    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Data Produk Telah Diubah');</script>";
        echo "<script>location='index.php?halaman=produk';</script>";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>
