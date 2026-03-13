# Skin Beauty Care Website

## Deskripsi

Skin Beauty Care adalah website e-commerce sederhana yang digunakan untuk menampilkan dan menjual berbagai produk skincare secara online. Website ini memungkinkan pengguna untuk melihat produk, melihat detail produk, menambahkan produk ke keranjang belanja, serta melakukan proses checkout.

Website ini dikembangkan menggunakan PHP dan MySQL sebagai bagian dari pembelajaran pengembangan aplikasi web berbasis Sistem Informasi.

Website dapat diakses melalui:
https://skinbeautycare.webox.my.id/

---

# Teknologi yang Digunakan

Website ini dibangun menggunakan beberapa teknologi berikut:

* HTML
* CSS
* Bootstrap
* PHP
* MySQL
* JavaScript

---

# Struktur Folder Project

Berikut adalah struktur folder dari project **Skin Beauty Care Website**:

```
skin_beauty_care
│
├── dashmin-1.0.0/          # template dashboard admin
│
├── foto_produk/            # folder penyimpanan gambar produk
│
├── beli.php                # proses pembelian produk
├── checkout.php            # halaman checkout
├── daftar.php              # halaman registrasi pengguna
├── detail.php              # halaman detail produk
├── hapuskeranjang.php      # menghapus produk dari keranjang
├── index.php               # halaman utama website
├── keranjang.php           # halaman keranjang belanja
├── koneksi.php             # konfigurasi koneksi database
├── lihat_pembayaran.php    # melihat data pembayaran
├── login.php               # halaman login pengguna
├── logout.php              # proses logout
├── menu.php                # komponen menu navigasi website
├── nota.php                # halaman nota / invoice pembelian
├── pembayaran.php          # halaman upload bukti pembayaran
├── pencarian.php           # fitur pencarian produk
├── riwayat.php             # riwayat transaksi pengguna
│
└── skin_beauty_care.sql    # file database MySQL
```

---

# Struktur Sistem

Sistem website terdiri dari tiga komponen utama:

### 1. Client (Browser)

Pengguna mengakses website melalui browser untuk melihat daftar produk, melihat detail produk, serta melakukan transaksi pembelian.

### 2. Web Server

Server menjalankan aplikasi berbasis PHP yang bertugas untuk memproses permintaan pengguna, menampilkan halaman web, serta menghubungkan aplikasi dengan database.

### 3. Database

Database MySQL digunakan untuk menyimpan seluruh data yang digunakan oleh sistem seperti:

* data produk
* data pengguna
* data transaksi
* data pembayaran

---

# Cara Menjalankan Project Secara Lokal

Untuk menjalankan project ini di komputer lokal, ikuti langkah berikut:

1. Install XAMPP atau web server lainnya.
2. Copy folder project **skin_beauty_care** ke dalam folder **htdocs**.
3. Jalankan **Apache** dan **MySQL** pada XAMPP.
4. Buka **phpMyAdmin** melalui browser.
5. Import file database **skin_beauty_care.sql**.
6. Jalankan website melalui browser dengan alamat berikut:

```
http://localhost/skin_beauty_care
```

---

# Tujuan Pengembangan

Tujuan pembuatan website ini adalah:

* Mempelajari pengembangan aplikasi web menggunakan PHP.
* Mengimplementasikan penggunaan database MySQL dalam aplikasi web.
* Membuat sistem sederhana untuk penjualan produk skincare secara online.

---
