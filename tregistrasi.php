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
$nm_jurusan = $_POST['nm_jurusan'];
$kelas = $_POST['kelas'];
$angkatan = $_POST['angkatan'];
$jml_pembayaran = $_POST['jml_pembayaran'];
$nm_ayah = $_POST['nm_ayah'];
$nm_ibu = $_POST['nm_ibu'];
$nm_wali = $_POST['nm_wali'];
$alamat_ortu = $_POST['alamat_ortu'];
$no_tlp_ortu = $_POST['no_tlp_ortu'];

//query menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_registrasi value('$id_mahasiswa', '$nim', '$nama_mhs', '$jk', '$ttl', '$alamat', '$no_tlp', '$nm_jurusan', '$kelas', '$angkatan', '$jml_pembayaran', '$nm_ayah', '$nm_ibu', '$nm_wali', '$alamat_orangtua', '$no_tlp_ortu')");

//mengalihkan halaman kembali ke mahasiswa.php
header("location:registrasi.php")

?>