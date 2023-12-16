<?php
    include "config.php";
    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $email = $_POST["email"];                                        
        $pesan = $_POST["pesan"];

        $sql = "INSERT INTO contac VALUES ('$nama', '$email', '$pesan')";
        $result = $db->query($sql);

        if ($result) {
            header("Refresh: 0");
        }
    }
?>
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

<style>
	 /* Style for the comment container */
	 .comment-container {
            border: 3px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        /* Style for the name */
        .comment-container h3 {
            color: #333;
            margin-bottom: 5px;
			margin-right: 5px;
			margin-left: 5px;
        }

        /* Style for the email */
        .comment-container h5.email {
            color: #555;
            margin-bottom: 10px;
			margin-left: 5px;
			margin-right: 5px;
        }

        /* Style for the comment text */
        .comment-container p#komentar {
            color: #777;
            margin-top: 0;
			margin-left: 5px;
			margin-right: 5px;
        }
</style>
	<!-- loader -->
	<!-- <div class="bg-loader">
		<div class="loader"></div>
	</div> -->

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
				<li><a href="service.php">SERVICE</a></li>
				<li class="active"><a href="contact.php">>CONTACT<</a></li>
			</ul>
		</div>
	</header>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Jl. Desa Satria Jaya, Bekasi, Tambun Utara, Griya Satria Pesona</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>ilham686494@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<p>(+62) 088211152352</p>
				</div>
				<div class="col-4">
					<h4>Hp</h4>
					<p>082217604816</p>
				</div>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2557.078002611673!2d107.05375935923375!3d-6.211117353826985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1700806533928!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</section>
	<?php
				$sql = "SELECT * FROM contac";
				$result = $db->query($sql);
	
	?>
	<form class="buy" action="contact.php" method="post">
        <h1>Feedback</h1>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pesan">Pesan atau Komentar:</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>

        <button class="buy-button" type="submit" name="submit">Kirim Umpan Balik</button>
    </form>
	<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="comment-container">';
            echo '    <h3>' . $row['nama'] . '</h3>';
            echo '    <h5 class="email">' . $row['gmail'] . '</h5>';
            echo '    <p id="komentar">' . $row['komentar'] . '</p>';
            echo '</div>';
        }
    }
    ?>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

	<script>
		var sensor = ["anjing","babi","taek","kontol","memek","pantat","taek"]
        function replaceTextInElements(elements) {
            elements.forEach(function(element) {
                // Mengambil teks dari elemen
                var originalText = element.textContent;

                // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
                var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function(match) {
                // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
                return '*'.repeat(match.length);
                });

                // Menetapkan teks yang telah diganti kembali ke elemen
                element.textContent = newText;
            });
        }

        // Mengambil semua elemen <p> dengan id="message"
        var messageElements = document.querySelectorAll('p#komentar');

        // Mengganti kata-kata dalam elemen-elemen yang dipilih
        replaceTextInElements(messageElements);
	</script>

</body>
</html>