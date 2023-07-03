<?php
include 'koneksi.php';
$id_pendaftaran = $_GET['id_pendaftaran'];
$query="DELETE from pendaftaran where id_pendaftaran='$id_pendaftaran'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>