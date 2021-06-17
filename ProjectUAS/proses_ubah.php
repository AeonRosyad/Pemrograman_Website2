<?php 

// panggil file yang dibutuhkan
require_once 'session.php';
require_once 'koneksi.php';
require_once 'functions.php';

if(isset($_POST['simpan'])){
	  $nama_pantai = $_POST['nama_pantai'];
    $pj_pantai = $_POST['pj_pantai'];
    $luas_pantai = $_POST['luas_pantai'];
    $kedalaman = $_POST['kedalaman'];
    $tanaman = $_POST['tanaman'];
    $kondisi_tanaman = $_POST['kondisi_tanaman'];

    $query = mysqli_query($koneksi, "UPDATE tbl_dashboard SET nama_pantai = '$nama_pantai', pj_pantai = '$pj_pantai', luas_pantai = '$luas_pantai', kedalaman = '$kedalaman', tanaman = '$tanaman', kondisi_tanaman = '$kondisi_tanaman' WHERE id = 1");

    if($query){
    	set_flash_message('sukses', 'Data berhasil diubah!');
		header('Location: dashboard.php');
    } else die('gagal'. mysqli_error($koneksi));
}


?>