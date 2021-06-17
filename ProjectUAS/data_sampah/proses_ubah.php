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
	$jumlah_sampah = $_POST['jumlah_sampah2'];
	$jenis_sampah = $_POST['jenis_sampah2'];
	$hari_pembersihan = $_POST['hari_pembersihan2'];
	$tanggal_pembersihan = $_POST['tanggal_pembersihan2'];
	$pngjawab = $_POST['pngjawab2'];
	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "UPDATE t_sampah SET jumlah_sampah = '$jumlah_sampah', jenis_sampah = '$jenis_sampah', hari_pembersihan = '$hari_pembersihan',  tanggal_pembersihan = '$tanggal_pembersihan', pngjawab = '$pngjawab' WHERE id = $id");

	if($query){
		set_flash_message('sukses', 'Data berhasil diubah!');
		header('Location: index.php');
	} else die('gagal!' . mysqli_error($koneksi));
} else {
	header('Location: tambah.php');
}

?>