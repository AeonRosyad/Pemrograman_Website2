<?php 

// panggil file yang dibutuhkan
require_once '../session.php';
require_once '../koneksi.php';
require_once '../functions.php';

if (!isset($_SESSION['auth'])) {
	set_flash_message('gagal', 'Anda harus login dulu!');
	header('Location: login.php');
}

if(isset($_POST['simpan'])){
	// print_r($_POST);
	$nama_produksi = $_POST['nama_produksi'];
	$jumlah_jam = $_POST['jumlah_jam'];
	$penanggung_jawab = $_POST['penanggung_jawab'];
	$letak_produksi = $_POST['letak_produksi'];
	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "UPDATE tbl_ikan SET nama_produksi = '$nama_produksi', jumlah_jam = $jumlah_jam, penanggung_jawab = '$penanggung_jawab', letak_produksi = '$letak_produksi' WHERE id = $id");

	if($query){
		set_flash_message('sukses', 'Data berhasil diubah!');
		header('Location: index.php');
	} else die('gagal!' . mysqli_error($koneksi));
} else {
	header('Location: tambah.php');
}

?>