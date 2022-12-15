<?php

//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id_pembayaran = $_POST['id_pembayaran'];
$jml_tunggakan = $_POST['jml_tunggakan'];
$jml_pembayaran = $_POST['jml_pembayaran'];
$bln_pembayaran = $_POST['bln_pembayaran'];
$status = $_POST['status'];

//query menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_pembayaran value('$id_pembayaran', '$jml_tunggakan', '$jml_pembayaran', '$bln_pembayaran', '$status')");

//mengalihkan halaman kembali ke mahasiswa.php
header("location:pembayaran.php")

?>