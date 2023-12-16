<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Warung Wayati</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container-roy">
			<h1><a href="index.php">Warung Wayati</a></h1>
			<ul>
				<li class="active"><a href="index.php">>HOME<</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="service.php">SERVICE</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>WELCOME TO MY WEBSITE</h2>
	</section>
	<section>
		<div class="row">
			<div class="card">
			    <img src="https://topwisata.info/wp-content/uploads/2020/05/jasuke-mozzarella-lezat-830x564-1.jpg">
		        <h2>Jasuke</h2>
			    <p><span>Rp:5000</span></p>
		    </div>
			<div class="card">
			    <img src="data:image/jpeg;base64,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" alt="nasi_goreng">
		        <h2>Nasi Goreng</h2>
			    <p><span>Rp:5000</span></p>
		    </div>
			<div class="card">
			    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi1zGsaT2bOZPXU0O_UNSWZYSRkB-3iRcN1ep1osjzumvmF8Sr66ho-7_BtfmWSqVY08w&usqp=CAU">
		        <h2>Teh Poci</h2>
			    <p><span>Rp:5000</span></p>
		    </div>
			<div class="card">
			    <img src="data:image/jpeg;base64,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">
		        <h2>Es Jeruk Peras</h2>
			    <p><span>Rp:5000</span></p>
		    </div>
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Usaha ini telah berdiri sejak Agustus 2022<br>
			didirikan oleh bu yati <br>
			disini hanya ada 4 menu makanan saja <br>
			Warung wayati adalah warung yang baru saja dibuka tahun lalu <br>
			disini adalah website untuk melihat apa saja yang ada di Warung wayati
		</p>
			</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-mobile"></i></div>
					<h4>MOBILE APP</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-globe"></i></div>
					<h4>WEB DEVELOPMENT</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-edit"></i></div>
					<h4>DESIGN</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-chart-bar"></i></div>
					<h4>DIGITAL MARKETING</h4>
				</div>
			</div>
		</div>
	</section>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>