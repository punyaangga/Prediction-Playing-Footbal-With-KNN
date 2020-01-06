<?php
include ("koneksi.php");

	$namalama = $_POST['namalama'];
	$nama = $_POST['nama'];
	$tb = $_POST['tb'];
	$bb = $_POST['bb'];
	$ability = $_POST['ability'];
	$posisi = $_POST['posisi'];
	
	//var_dump($_POST['nama']);
	
	$simpan=mysql_query("UPDATE datalatih set nama='$nama',tb='$tb',bb='$bb',ability='$ability',posisi='$posisi' where nama='$namalama'")or die(mysql_error());
	header('location:index.php');
	
?>