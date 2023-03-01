<?php
include "koneksi.php";
$id_kelas = $_POST['kelas'];
$nama = $_POST['nama'];
$absen = $_POST['absen'];
$personality = $_POST['hasil'];



$query = mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES ('','$id_kelas','$nama','$absen','$personality')");

//cek query
if (!$query) {
	die('Query Error : '.mysqli_errno($koneksi).
	' - '.mysqli_error($koneksi));
}
?>