<?php

//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id_orangtua = $_POST['id_orangtua'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$nama_wali = $_POST['nama_wali'];
$alamat_ortu = $_POST['alamat_ortu'];
$no_tlp_ortu = $_POST['no_tlp_ortu'];

//query menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_orangtua value('$id_orangtua', '$nama_ayah', '$nama_ibu', '$nama_wali', '$alamat_ortu', '$no_tlp_ortu')");

//mengalihkan halaman kembali ke mahasiswa.php
header("location:orangtua.php")

?>