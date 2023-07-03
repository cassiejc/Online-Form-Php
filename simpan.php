<?php
include 'koneksi.php';
$nama           = $_POST['nama'];
$nik            = $_POST['nik'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$no_telepon     = $_POST['no_telepon'];
$email          = $_POST['email'];
$agama          = $_POST['agama'];
$nilai_raport   = $_POST['nilai_raport'];
$alamat         = $_POST['alamat'];
$sekolah_asal   = $_POST['sekolah_asal'];
$query="INSERT INTO pendaftaran SET nama='$nama', nik='$nik', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', no_telepon='$no_telepon', email='$email', agama='$agama', nilai_raport='$nilai_raport', alamat='$alamat', sekolah_asal='$sekolah_asal'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>