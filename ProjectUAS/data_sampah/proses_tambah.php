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
	$jumlah_sampah = $_POST['jumlah_sampah'];
	$jenis_sampah = $_POST['jenis_sampah'];
	$hari_pembersihan = $_POST['hari_pembersihan'];
	$tanggal_pembersihan = $_POST['tanggal_pembersihan'];
	$pngjawab = $_POST['pngjawab'];

	$query = mysqli_query($koneksi, "INSERT INTO t_sampah (jumlah_sampah, jenis_Sampah, hari_pembersihan, tanggal_pembersihan, pngjawab) VALUES ($jumlah_sampah, '$jenis_sampah', '$hari_pembersihan', '$tanggal_pembersihan', '$pngjawab')");

	if($query){
		set_flash_message('sukses', 'Data berhasil ditambahkan!');
		header('Location: index.php');
	} else die('gagal!' . mysqli_error($koneksi));
} else {
	header('Location: tambah.php');
}

?>