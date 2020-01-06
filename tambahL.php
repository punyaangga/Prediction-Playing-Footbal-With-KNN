<?php
include ("koneksi.php");
$nama=$_POST['nama'];
$tb=$_POST['tb'];
$bb=$_POST['bb'];
$ability=$_POST['ability'];
$posisi=$_POST['posisi'];
$euclidien="";
$simpan=mysql_query("INSERT INTO datalatih VALUES('$nama','$tb','$bb','$ability','$posisi','$euclidien')")or die(mysql_error());
header('location:index.php');
?>