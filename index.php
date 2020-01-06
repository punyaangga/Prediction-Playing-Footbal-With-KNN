<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta name="author" content="John Doe">
	<meta name="description" content="">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Title -->
	<title>Player Soccer</title>
	<!-- Place favicon.ico in the root directory -->
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
	<!-- Plugin-CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main-Stylesheets -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>

	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

	<div class="preloader">
		<div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
	<!--Mainmenu-area-->
	<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
		<div class="container">
			<!--Logo-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand logo">
					<h2>Player Soccer</h2>
				</a>
			</div>
			<!--Logo/-->
			<nav class="collapse navbar-collapse" id="primary-menu">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#home-page">Home</a></li>
					<li><a href="#pengenalan">Pengenalan</a></li>
					<li><a href="#data-uji">Data Uji</a></li>
					<li><a href="#data-latih">Data latih</a></li>
					<li><a href="#tim-kerja">Tim Kerja</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--Mainmenu-area/-->



	<!--Header-area-->
	<header class="header-area overlay full-height relative v-center" id="home-page">
		<div class="absolute anlge-bg"></div>
		<div class="container">
			<div class="row v-center">
				<div class="col-xs-12 col-md-7 header-text">
					<h2>K-Nearest Neighbor (KNN)</h2>
					<p>Sebuah metode untuk melakukan klasifikasi terhadap objek berdasarkan data pembelajaran yang jaraknya paling dekat
						dengan object tersebut.</p>
					
				</div>
				<div class="hidden-xs hidden-sm col-md-5 text-right">
					<!-- kosong -->
				</div>
			</div>
		</div>
	</header>
	<!--Header-area/-->



	<!--Feature-area-->
	<section class="gray-bg section-padding" id="pengenalan">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/service-icon-1.png" alt="">
						</div>
						<h4>Cerita Kasus</h4>
						<p>Dalam permainan sepak bola ada posisi pemain dalam hal ini kami akan menentukan posisi pemain bola dilihat dari tinggi badan, berat badan dan ability. Posisi yang diambil yaitu beck,depan,keeper dan tengah </p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/service-icon-2.png" alt="">
						</div>
						<h4>Fungsi Aplikasi</h4>
						<p>Mengklasifikasi Posisi Pemain Berdasarkan Tinggi,Berat Badan dan Ability.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="box">
						<div class="box-icon">
							<img src="images/service-icon-3.png" alt="">
						</div>
						<h4>Sumber Data</h4>
						<p>Data diambil dari data pemain sepak bola Liga Indonesia.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Feature-area/-->

	<section class="angle-bg sky-bg section-padding" id="data-uji">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
					<div class="page-title">
						<h2>Data Uji</h2>
						<p>Data yang dimasukan berupa Nama,Tinggi Badan,Berat Badan dan Ability</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<form action="proses.php" method="POST">
						<div class="form-group">
							<label for="nama_uji">Nama:</label>
							<input type="text" class="form-control" name="nama1">
						</div>
						<div class="form-group">
							<label for="tinggi_uji">Tinggi badan (cm):</label>
							<input type="number" class="form-control" name="tb1">
						</div>
						<div class="form-group">
							<label for="berat_uji">Berat badan (kg):</label>
							<input type="number" class="form-control" name="bb1">
						</div>
						<div class="form-group">
							<label for="ability_uji">Ability:</label>
							<input type="text" class="form-control" name="ability1">
						</div>
						
						
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>

				<div class="col-xs-12 col-sm-6">
					<table >
						<tr>
						<td>Data : </td>
					</tr>
					<tbody>
					
					<tr>
						<?php
					        include("koneksi.php");
					    	$query = mysql_query("SELECT * FROM datauji ORDER BY id DESC limit 1");
					    	$no = 1;
					    	while ($data = mysql_fetch_array($query)) {
					     ?>
			        <tr>
		            <td class="td"><?php echo $data['nama1'];?> Dengan Tinggi <?php echo $data['tb1'];?>, Berat Badan <?php echo $data['bb1'];?> dan Ability <?php echo $data['ability1'];?> Masuk ke : </td>
		                   
	        		</tr>
							    <?php
							        $no++;
							  	  }
							 	?>
							</tr>
					</tbody>
					
					
					</table>


					<table border ='1'>
					<tr>
						<td>Posisi</td>
						<td>Jarak dengan tetangga</td>
					</tr>
					<tbody>
					
					<tr>
						<?php
					        include("koneksi.php");
					    	$query = mysql_query("SELECT * FROM datalatih ORDER BY euclidien ASC limit 1");
					    	$no = 1;
					    	while ($data = mysql_fetch_array($query)) {
					     ?>
			        <tr>
		            <td class="td"><?php echo $data['posisi'];?> </td>
		            <td class="td"><?php echo $data['euclidien'];?> </td>
		                   
	        		</tr>
							    <?php
							        $no++;
							  	  }
							 	?>
							</tr>
					</tbody>
					</table>
					<?php
					$k=5;
					?>
					K yang digunakan = <?php echo $k;?><br>
					Tabel Jarak <?php echo $k;?> Tetangga terdekat
					<table border ='1'>
					<tr>
						<td>Posisi</td>
						<td>Jarak dengan tetangga</td>
					</tr>
					<tbody>
					
					<tr>
						<?php
						//$k=5;
					        include("koneksi.php");
					    	$query = mysql_query("SELECT * FROM datalatih ORDER BY euclidien ASC limit $k");
					    	$no = 1;
					    	while ($data = mysql_fetch_array($query)) {
					     ?>
			        <tr>
		            <td class="td"><?php echo $data['posisi'];?> </td>
		            <td class="td"><?php echo $data['euclidien'];?> </td>
		                   
	        		</tr>
							    <?php
							        $no++;
							  	  }
							 	?>
							</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>



	
<!-- Bagian Data Latih (Data SET)-->
	<section class="section-padding gray-bg" id="data-latih">
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
					<div class="page-title">
						<h2>Data Latih</h2>
						<p>Data latih terdiri dari 3 variabel yaitu Tinggi Badan,Berat Badan dan Ability Pemain, Untuk menambahkan data latih silakan isi form</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<form action="tambahL.php" method="POST">
						<div class="form-group">
							<label for="nama_uji">Nama:</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<label for="tinggi_uji">Tinggi badan (cm):</label>
							<input type="number" class="form-control" name="tb">
						</div>
						<div class="form-group">
							<label for="berat_uji">Berat badan (kg):</label>
							<input type="number" class="form-control" name="bb">
						</div>
						<div class="form-group">
							<label for="ability_uji">Ability:</label>
							<input type="text" class="form-control" name="ability">
						</div>
						<div class="form-group">
							<label for="ability_uji">Posisi:</label>
							<select name="posisi" class="form-control">
				                <option value="">&nbsp;</option>
				                <option value="Keeper">Keeper</option>
				                <option value="Back">Back</option>
								<option value="Tengah">Tengah</option>
								<option value="Depan">Depan</option>
				            </select>
							
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>

				<div class="col-xs-12 col-sm-6" style="overflow:auto; height:500px;">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Tinggi badan (cm)</th>
								<th>Berat badan (kg)</th>
								<th>Ability</th>
								<th>Posisi</th>
								<th>Euclidean</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
							        include("koneksi.php");
							    	$query = mysql_query("SELECT * FROM datalatih");
							    	$no = 1;
							    	while ($data = mysql_fetch_array($query)) {
							     ?>
								<td><?php echo $no;?></td>
								<td><?php echo $data['nama'];?></td>
								<td><?php echo $data['tb'];?></td>
								<td><?php echo $data['bb'];?></td>
								<td><?php echo $data['ability'];?></td>
								<td><?php echo $data['posisi'];?></td>
								<td><?php echo $data['euclidien'];?></td>
								<td><a href="edit.php?nama=<?php echo $data['nama']; ?>">Edit</a>|<a href="delete.php?nama=<?php echo $data['nama']; ?>">Delete</a></td></td>
							</tr>
							  <?php
							        $no++;
							  	  }
							  ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>



	




	<footer class="footer-area relative sky-bg" id="tim-kerja">
		<div class="absolute footer-bg"></div>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-5 col-sm-offset-3 text-center">
						<div class="page-title">
							<h2>Tim Kerja</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-2">
						<div class="single-team">
							<div class="team-photo">
								<img src="images/devi.jpg" alt="">
							</div>
							<h4>Devi Fajar Wati</h4>
							<h6>3411171112</h6>
							<ul class="social-menu">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2">
						<div class="single-team">
							<div class="team-photo">
								<img src="images/angga.jpg" alt="">
							</div>
							<h4>Angga Fantiya </h4>
							<h6>3411171142</h6>
							<ul class="social-menu">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2">
						<div class="single-team">
							<div class="team-photo">
								<img src="images/team-section-1.png" alt="">
							</div>
							<h4>Bayu Setyo</h4>
							<h6>34111511</h6>
							<ul class="social-menu">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2">
						<div class="single-team">
							<div class="team-photo">
								<img src="images/irvan.jpg" alt="">
							</div>
							<h4>Irvan Tanjung</h4>
							<h6>3411171172</h6>
							<ul class="social-menu">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2">
						<div class="single-team">
							<div class="team-photo">
								<img src="images/hary.jpg" alt="">
							</div>
							
							<h4>Hary Suryanto</h4>
							<h6>3411171145</h6>
							<ul class="social-menu">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2">
						<div class="single-team">
							<div class="team-photo">
								<img src="images/afifah.jpg" alt="">
							</div>
							<h4>Affifah Jayanthi</h4>
							<h6>3411171163</h6>
							<ul class="social-menu">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 pull-right">
						<ul class="social-menu text-right x-left">
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-twitter"></i></a></li>
							<li><a href="#"><i class="ti-instagram"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
							<li><a href="#"><i class="ti-github"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id corrupti architecto consequuntur, laborum quaerat sed nemo temporibus unde, beatae vel.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<p>&copy;Copyright 2018 All right resurved.  This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>





	<!--Vendor-JS-->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<!--Plugin-JS-->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/contact-form.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/scrollUp.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/wow.min.js"></script>
	<!--Main-active-JS-->
	<script src="js/main.js"></script>
</body>

</html>
