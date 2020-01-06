<?php
include ("koneksi.php");
$nama=$_GET['nama'];

$simpan=mysql_query("DELETE FROM datalatih WHERE nama='$nama'")or die(mysql_error());
header('location:index.php');
?>