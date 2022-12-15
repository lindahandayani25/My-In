<?php

//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];
$kelas = $_POST['kelas'];
$angkatan = $_POST['angkatan'];

//query menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_jurusan value('$id_jurusan', '$nama_jurusan', '$kelas', '$angkatan')");

//mengalihkan halaman kembali ke mahasiswa.php
header("location:jurusan.php")

?>