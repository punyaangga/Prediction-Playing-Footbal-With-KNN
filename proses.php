<?php
include('koneksi.php');
$id="";
$nama1=$_POST['nama1'];
$tb1=$_POST['tb1'];
$bb1=$_POST['bb1'];
$ability1=$_POST['ability1'];

$result=mysql_query("INSERT INTO datauji VALUES('$id','$nama1','$tb1','$bb1','$ability1')")or die(mysql_error());
header("location:index.php");
?>