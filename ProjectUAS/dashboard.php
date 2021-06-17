<?php 

// panggil file yang dibutuhkan
require_once 'session.php';
require_once 'koneksi.php';
require_once 'functions.php';

if (!isset($_SESSION['auth'])) {
	set_flash_message('gagal', 'Anda harus login dulu!');
	header('Location: login.php');
}

$query = mysqli_query($koneksi, "SELECT * FROM tbl_dashboard WHERE id = 1");
$pantai = mysqli_fetch_assoc($query);
$sampah = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) FROM t_sampah"));
$pj = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(penanggung_jawab) FROM tbl_ikan"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $_SESSION['app_name'] ?> - Dashboard</title>
  <link href="_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="_template/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
	<div id="wrapper">
	<?php require_once '_sidebar.php'; ?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

		<!-- Topbar Navbar -->
		<?php require_once '_topnav.php'; ?>
		</nav>
		<!-- End of Topbar -->
		<!-- Begin Page Content -->
		<div class="container-fluid">
		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
		<hr>
		<?php if (check_flash_message('sukses')): ?>
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	            <?php get_flash_message() ?>
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	        </div>
	      <?php elseif(check_flash_message('gagal')) : ?>
	        <div class="alert alert-danger alert-dismissible fade show" role="alert">
	            <?php get_flash_message() ?>
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	        </div>
	    <?php endif ?>
	    <h3>Selamat datang di website resmi pemberdayaan pantai Indonesia. mari jaga keindahan pantai agar dapat terus dinikmati semua orang </h3>
			<div class="row">
				<div class="col">
					<div class="card shadow">
						<div class="card-header">Data Pantai - <?php echo $pantai['nama_pantai'] ?></div>
						<div class="card-body">
							<form action="proses_ubah.php" method="POST">
								<div class="form-group">
									<label for="nama_pantai">Nama Pantai </label>
									<input type="text" name="nama_pantai" class="form-control" autocomplete="off" required="required" value="<?php echo $pantai['nama_pantai'] ?>">
								</div>
								<div class="form-group">
									<label for="pj_pantai">Nama Penanggung Jawab </label>
									<input type="text" name="pj_pantai" class="form-control" autocomplete="off" required="required" value="<?php echo $pantai['pj_pantai'] ?>">
								</div>
								<div class="form-group">
									<label for="luas_pantai">Luas Pantai </label>
									<input type="text" name="luas_pantai" class="form-control" autocomplete="off" required="required" value="<?php echo $pantai['luas_pantai'] ?>">
								</div>
								<div class="form-group">
									<label for="kedalaman">Kedalaman Laut Sekitar </label>
									<input type="text" name="kedalaman" class="form-control" autocomplete="off" required="required" value="<?php echo $pantai['kedalaman'] ?>">
								</div>
								<div class="form-group">
									<label for="tanaman">Tanaman Pantai </label>
									<input type="text" name="tanaman" class="form-control" autocomplete="off" required="required" value="<?php echo $pantai['tanaman'] ?>">
								</div>
								<div class="form-group">
									<label for="kondisi_tanaman">Kondisi Tanaman </label>
									<input type="text" name="kondisi_tanaman" class="form-control" autocomplete="off" required="required" value="<?php echo $pantai['kondisi_tanaman'] ?>">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-sm btn-primary" name="simpan" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-save"></i> Ubah</button>
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
		<span>Copyright &copy; laut bersih</span>
		</div>
		</div>
		</footer>
		<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>

<!-- End of Page Wrapper -->
<script src="_template/vendor/jquery/jquery.min.js"></script>
<script src="_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="_template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="_template/js/sb-admin-2.min.js"></script>
</body>

</html>
