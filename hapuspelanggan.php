<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('ID pelanggan tidak valid');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
    exit;
}

$id_pelanggan = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
if ($ambil->num_rows == 0) {
    echo "<script>alert('Pelanggan tidak ditemukan');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
    exit;
}

$delete = $koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
if ($delete) {
    echo "<script>alert('Pelanggan berhasil dihapus');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
} else {
    echo "<script>alert('Gagal menghapus pelanggan');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
}
?>
