<?php 

// panggil file yang dibutuhkan
require_once '../session.php';
require_once '../koneksi.php';
require_once '../functions.php';

if (!isset($_SESSION['auth'])) {
	set_flash_message('gagal', 'Anda harus login dulu!');
	header('Location: login.php');
}

if(!isset($_GET['id'])){
	header('Location: index.php');
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_ikan WHERE id = $id");
$produksi = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $_SESSION['app_name'] ?> - Ubah Data Produksi</title>
  <link href="../_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../_template/css/sb-admin-2.min.css" rel="stylesheet">
  <style>
  	.input-group-text {
  		width: 45px;
  	}
  </style>
</head>
<body id="page-top">
	<div id="wrapper">
	<?php require_once '../_sidebar.php'; ?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
		<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Topbar Navbar -->
					<?php require_once '../_topnav.php'; ?>
				</nav>
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="clearfix">
						<h1 class="h3 mb-4 text-gray-800 float-left">Ubah Data Produksi Ikan</h1>
						<a href="index.php" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<span class="text-primary"><strong>Silahkan isi data di bawah ini!</strong></span>
								</div>
								<div class="card-body">
									<form action="proses_ubah.php?id=<?php echo $produksi['id'] ?>" method="POST">
										<div class="form-group">
											<label for="nama_produksi">Nama Produksi </label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="fas fa-book"></i></div>
												</div>
												<input type="text" id="nama_produksi" class="form-control" placeholder="Masukan Nama Produksi" name="nama_produksi" autocomplete="off" required="required" value="<?php echo $produksi['nama_produksi'] ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="jumlah_jam">Jumlah Jam Operasi </label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="fas fa-clock"></i></div>
												</div>
												<input type="number" id="jumlah_jam" class="form-control" placeholder="Masukan Jumlah Jam Operasi" name="jumlah_jam" autocomplete="off" required="required" value="<?php echo $produksi['jumlah_jam'] ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="penanggung_jawab">Penanggung Jawab </label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="fas fa-user"></i></div>
												</div>
												<input type="text" id="penanggung_jawab" class="form-control" placeholder="Masukan Penanggung Jawab" name="penanggung_jawab" autocomplete="off" required="required" value="<?php echo $produksi['penanggung_jawab'] ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="letak_produksi">Letak Produksi </label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="fas fa-building"></i></div>
												</div>
												<input type="text" id="letak_produksi" class="form-control" placeholder="Masukan Letak Produksi" name="letak_produksi" autocomplete="off" required="required" value="<?php echo $produksi['letak_produksi'] ?>">
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-sm" name="simpan"><i class="fas fa-save"></i> Simpan</button>
											<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->
			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Laut Bersih</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>

<!-- End of Page Wrapper -->
<script src="../_template/vendor/jquery/jquery.min.js"></script>
<script src="../_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../_template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../_template/js/sb-admin-2.min.js"></script>
</body>

</html>
