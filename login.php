<?php  
session_start();
include 'koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Pelanggan</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body style="background: #D9DFC6">

<?php include 'menu.php'; ?>


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class ="panel-title">Login Pelanggan</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button class="btn btn-primary" name="login">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php  
// jika ada tombol login(tombol login ditekan)
if (isset($_POST["login"])) 
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	// lakukan cek kuery akun di tabel pelanggan di db
	$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password='$password'");


	// hitung akun yang terambil
	$akunyangcocok = $ambil->num_rows;

	// jika 1 akun ada yang cocok, maka diloginkan
	if ($akunyangcocok==1) 
	{
		//anda berhasil login
		//mendapatkan akun dalam bentuk array
		$akun = $ambil->fetch_assoc();
		//simpan di session pelanggan
		$_SESSION["pelanggan"] = $akun;
		echo "<script>alert('Anda Berhasil Login');</script>";

		//jika sudah belanja
		if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"])) {
			echo "<script>location='checkout.php';</script>";
			}
		else
		{
			echo "<script>location='riwayat.php';</script>";
		}
	}
		
	else
	{
		//anda gagal login
		echo "<script>alert('Anda Gagal Login. Periksa Akun Anda');</script>";
		echo "<scriptlocation='login.php';</script>";

	}
}
?>


</body>
</html>