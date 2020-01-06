<html>
<head> <title>Edit </title> <head>
<body>
<?php
	include ("koneksi.php");
	$nama=$_GET['nama'];

	$query = mysql_query("SELECT * FROM datalatih WHERE nama='$nama'");
	while ($data = mysql_fetch_array($query)){ ?>
		<form method="post" action="proses_edit.php">
			Nama <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
			<input type="hidden" name="namalama" value="<?php echo $data['nama']; ?>"><br>
			Tinggi Badan <input type="text" name="tb" value="<?php echo $data['tb']; ?>"><br>
			Berat Badan <input type="text" name="bb" value="<?php echo $data['bb']; ?>"><br>
			Ability <input type="text" name="ability" value="<?php echo $data['ability']; ?>"><br>
			Posisi <input type="text" name="posisi" value="<?php echo $data['posisi']; ?>"><br>
			<button type="submit" name="update">Update</button>
		</form>
		<?php
	}

		?>
		
</body>
</html>