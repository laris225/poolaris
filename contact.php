<?php

try {
	$connexion = new PDO('mysql:host=localhost;dbname=poolaris', 'root', '');
} catch (Exception $e) {
	die("Erreur:" . $e->getMessage());
}
$errorNom = $errorEmail = $errorPhone = "";
// $succes = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$isValidate = true;
	// $succes = true;

	if (empty($nom)) {
		$errorNom = "Nom obligtoire";
		$isValidate = false;
	}
	if (empty($email)) {
		$errorEmail = "Email obligtoire";
		$isValidate = false;
	}
	if (empty($phone)) {
		$errorPhone = "Contact obligtoire";
		$isValidate = false;
	}
	if ($isValidate = true) {
		$req = $connexion->prepare("INSERT INTO contact(nom,email,phone,message) VALUES(?,?,?,?)");
		$req->execute(array($nom, $email, $phone, $message));
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>PooLaris - Contact</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="PooLaris Responsive website" />


	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a href="index.php">PooLaris</a></h1>
					</div>
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php" class="active">Accueil</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="reserve.php" class="drop-text">Reserver</a></li>
								<li><a href="poste.php" class="drop-text">Poster</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- banner -->
		<div class="banner_w3lspvt-2">

		</div>
	</div>

	<!-- contact -->
	<section class="contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Contactez-Nous</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				Retrouvez nous sur nos différentes pages. Nos clients partagent leurs témoignages !</p>
			<ul class="list-unstyled row text-left pt-4 mb-lg-5">
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-map-marker"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Adresse</h6>
							<p>PooLaris
								<br>Abidjan. </p>
						</div>
					</div>
				</li>
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-envelope-open-o"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Email</h6>
							<a href="mailto:larisbabou555gmail.com">larisbabou555@gmail.com</a>
							<br>
							<a href="mailto:infopoolaris@gmail.com">infopoolaris@gmail.com</a>
						</div>
					</div>
				</li>
				<li class="col-lg-4 adress-info mb-lg-0 mb-5">
					<div class="row">
						<div class="col-3 text-lg-center text-sm-right text-center adress-icon">
							<span class="fa fa-phone"></span>
						</div>
						<div class="col-9 text-left">
							<h6>Téléphone</h6>
							<p>+ 22540319251</p>
							<p>+ 22587594166</p>
						</div>
					</div>
				</li>
			</ul>
			<div class="contact-form mx-auto text-left mt-lg-5 mt-4">
				<form name="contactform" id="contactform1" method="post" action="#">
					<div class="row">
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Name *</label>
								<input type="text" class="form-control" id="name" placeholder="" name="nom" required="required">
								<p style="color: red;">
									<?php echo "$errorNom" ?>
								</p>
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Email *</label>
								<input type="email" class="form-control" id="email" placeholder="" name="email" required="required">
								<p style="color: red;">
									<?php echo "$errorEmail" ?>
								</p>
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group" data-aos="fade-up">
								<label>Téléphone *</label>
								<input type="text" class="form-control" id="phone" placeholder="" name="phone" required="required">
								<p style="color: red;">
									<?php echo "$errorPhone" ?>
								</p>
							</div>
						</div>

					</div>

					<div class="form-group mb-5">
						<label>Comment pouvons nous vous aider ?</label>
						<textarea name="message" class="form-control" id="iq" placeholder="" required=""></textarea>
					</div>
					<div class="contact-page">
						<button type="submit" class="btn btn-default">Envoyer</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer class="py-5">
		<div class="container pt-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 col-md-6 footer-grid_section_1its">
					<h2 class="logo-2 mb-lg-4 mb-3">
						<a href="index.php" class="text-capitalize text-wh">PooLaris</a>
					</h2>
					<!-- Map -->
					<div class="map-fo">
						<p>
							Leader de l'organisation des céremonies<br>
							à piscine, pour des fêtes réussites !
							Nous mettons à votre disposition un spécialiste pour
							noter tous vos propositions.
						</p>
					</div>

				</div>
				<div class="col-lg-2 col-md-6 footer-grid_section_1its mt-md-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Liens</h3>
					<ul class="list-unstyled">
						<li class="mb-3">
							<a href="index.php">Accueil</a>
						</li>
						<li class="mb-3">
							<a href="services.php">Services</a>
						</li>
						<li class="mb-3">
							<a href="reserve.php">Reserver</a>
						</li>
						<li class="mb-3">
							<a href="poste.php">Poster</a>
						</li>
						<li class="mb-3">
							<a href="about.php">A propos</a>
						</li>
						<li class="mb-3">
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Info Contact</h3>
					<div class="contact-info">
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Téléphone</h4>
							<p>+225 40 319 251</p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Email </h4>
							<p><a href="mailto:larisbabou555@gmail.com">larisbabou555@gmail.com</a></p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Adresse</h4>
							<p>Cocody, Abidjan, Côte d'Ivoire</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<!-- social icons -->
					<div class="mobamuinfo_social_icons">
						<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Réseaux sociaux</h3>
						<p>
							Retrouvez nous sur nos différentes pages.
							Nos clients partagent leurs témoignages !
						</p><br>
						<ul class="mobamuits_social_list list-unstyled">
							<li class="w3_mobamu_facebook">
								<a href="#">
									<span class="fa fa-facebook-f"></span>
								</a>
							</li>
							<li class="w3_mobamu_twitter">
								<a href="#">
									<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li class="w3_mobamu_dribble">
								<a href="#">
									<span class="fa fa-dribbble"></span>
								</a>
							</li>
							<li class="w3_mobamu_google">
								<a href="#">
									<span class="fa fa-google-plus"></span>
								</a>
							</li>
						</ul>
					</div>
					<!-- social icons -->
				</div>
			</div>
		</div>
	</footer>
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2020 <span class="text-capitalaze">PooLaris</span>. Tout droit réservés | Concepteur
			<a href="#"> LarisBabou.</a>
		</p>
	</div>

	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>


</body>

<script>
	addEventListener("load", function() {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>

</html>