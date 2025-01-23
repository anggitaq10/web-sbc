<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="form-group">
        <label>Berat (Gr)</label>
        <input type="number" class="form-control" name="berat" required>
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga" required>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10" required></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto" required>
    </div>
    <button type="submit" class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) 
{
  $nama  = $_POST['nama'];
  $berat  = $_POST['berat'];
  $harga  = $_POST['harga'];
  $deskripsi  = $_POST['deskripsi'];
  $foto = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['tmp_name'];
  move_uploaded_file($lokasi, "../foto_produk/".$foto);
  $mysqli  = "INSERT INTO produk (nama_produk,berat_produk,harga_produk,deskripsi_produk,foto_produk) VALUES ('$nama', '$berat','$harga', '$deskripsi','$foto')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<div class='alert alert-info'>Produk Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($koneksi);
 }
?>