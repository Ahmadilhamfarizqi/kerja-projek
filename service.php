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
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li class="active"><a href="service.php">>SERVICE<</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>
	
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