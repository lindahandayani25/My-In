<?php

//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id_mahasiswa = $_POST['id_mahasiswa'];
$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$id_jurusan = $_POST['id_jurusan'];
$id_pembayaran = $_POST['id_pembayaran'];
$id_orangtua = $_POST['id_orangtua'];
$keterangan = $_POST['keterangan'];

//query menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_mahasiswa value('$id_mahasiswa', '$nim', '$nama_mhs', '$jk', '$ttl', '$alamat', '$no_tlp', '$id_jurusan', '$id_pembayaran', '$id_orangtua', '$keterangan')");

//mengalihkan halaman kembali ke mahasiswa.php
header("location:mahasiswa.php")

?>