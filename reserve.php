<?php

try {
	$connexion = new PDO('mysql:host=localhost;dbname=poolaris', 'root', '');
} 
catch (Exception $e) {
	die("Erreur:" . $e->getMessage());
}

$errorNom = $errorContact = $errorEmail = $errorAdresse = $errorLieu = $errorType = $errorNombre = $errorDate =
$errorQ1 = $errorQ2 = $errorQ3 = $errorDescription= "";
// $succes = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$nom = $_POST['nom'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$lieu = $_POST['lieu'];
	$type = $_POST['type'];
	$nombre = $_POST['nombre'];
	$date= $_POST['date'];
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3= $_POST['q3'];
	$description = $_POST['description'];
	$isValidate = true;
	// $succes = true;

	if (empty($nom)) {
		$errorNom = "Nom obligtoire";
		$isValidate = false;
	}
	if (empty($contact)) {
		$errorContact = "Contact obligtoire";
		$isValidate = false;
	}
	if (empty($email)) {
		$errorEmail = "Email obligtoire";
		$isValidate = false;
	}
	if (empty($adresse)) {
		$errorAdresse = "Adresse obligtoire";
		$isValidate = false;
	}
	if (empty($lieu)) {
		$errorLieu = "Choix obligtoire";
		$isValidate = false;
	}
	if (empty($type)) {
		$errorType = "champ obligtoire";
		$isValidate = false;
	}
	if (empty($nombre)) {
		$errorNombre = "champ obligtoire";
		$isValidate = false;
	}
	if (empty($date)) {
		$errorDate = "Champ obligtoire";
		$isValidate = false;
	}
	if (empty($q1)) {
		$errorQ1 = "Champ obligtoire";
		$isValidate = false;
	}
	if (empty($q2)) {
		$errorQ2 = "Champ obligtoire";
		$isValidate = false;
	}
	if (empty($q3)) {
		$errorQ3 = "Champ obligtoire";
		$isValidate = false;
	}
	if (empty($description)) {
		$errorDescription = "Décrivez-nous votre cérémonie svp";
		$isValidate = false;
	}
	if ($isValidate = true) {
		$req = $connexion->prepare("INSERT INTO reserve(nom,contact,email,adresse,lieu,type,nombre,date,q1,q2,q3,description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
		$req->execute(array($nom, $contact, $email, $adresse, $lieu, $type, $nombre, $date, $q1, $q2, $q3, $description));
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>PooLaris - Reservé</title>
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

	<!-- reserve form -->
	<div class="register-w3 py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Reservation </h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				Pour mieux cerner le type de ceremonie, nous vous proposons notre formulaire de renseignement.
				Nous aimerions que vous nous fournissez des informations précises pour mieux organiser votre votre
				cérémonie.
			</p>
			<div class="comment-top mt-5">
				<div class="comment-bottom mobamuinfo_mail_grid_right">
					<form action="#" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<label> Nom</label>
								<input class="form-control" type="text" name="nom" placeholder="Nom complet..."
									required="required">
									<p style="color: red;">
										<?php echo "$errorNom" ?>
									</p>
							</div>
							<div class="col-lg-6 form-group">
								<label>Contact</label>
								<input class="form-control" type="number" name="contact" placeholder="Contact..."
									required="required">
									<p style="color: red;">
										<?php echo "$errorContact" ?>
									</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" placeholder="exemple: test@test.com" required="required">
								<p style="color: red;">
									<?php echo "$errorEmail" ?>
								</p>
							</div>
							<div class="col-lg-6 form-group">
								<label>Adresse</label>
								<input class="form-control" type="text" name="adresse" placeholder="Adresse..."
									required="required">
									<p style="color: red;">
										<?php echo "$errorAdresse" ?>
									</p>
							</div>

						</div>
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Choissez le lieu de la céremonie</label>
								<select required="required" class="form-control" name="lieu">
									<option value="Abobo">Abobo</option>
									<option value="Adjamé">Adjamé</option>
									<option value="Cocody">Cocody</option>
									<option value="Koumassi">Koumassi</option>
									<optio value="Marcory">Marcory</optio>
									<option value="Plateau">Plateau</option>
									<option value="Port-Bouet">Port-Bouet</option>
									<option value="Treichville">Treichville</option>
									<option value="Yopougon">Yopougon</option>
								</select>
								<p style="color: red;">
									<?php echo "$errorLieu" ?>
								</p>
							</div>
							<div class="col-lg-6 form-group">
								<label>Quel est le type de cérémonie ? </label>
								<input type="text" name="type" required="required" class="form-control" placeholder="exemple: pool party">
								<p style="color: red;">
									<?php echo "$errorType" ?>
								</p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Quel est le nombre de personnes ?</label>
								<input type="number" name="nombre" required="required" class="form-control" placeholder="exemple: 250">
								<p style="color: red;">
									<?php echo "$errorNombre" ?>
								</p>
							</div>
							<div class="col-lg-6 form-group">
								<label>Date de la cérémonie </label>
								<input type="date" name="date" required="required" class="form-control" placeholder="exemple: 25/03/2020">
								<p style="color: red;">
									<?php echo "$errorDate" ?>
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 form-group">
								<label>Avez vous un décorateur ?</label>
								<div class="form-check form-check-inline" style="margin-left: 10%;">
									<label class="form-check-label" for="inlineRadio1">Oui</label>
									<input class="form-check-input" type="radio" name="q1" value="oui" id="inlineRadio1">
									<label class="form-check-label" for="inlineRadio2">Non</label>
									<input class="form-check-input" type="radio" name="q1" value="non" id="inlineRadio2">
								</div>
								<p style="color: red;">
									<?php echo "$errorQ1" ?>
								</p>
							</div>
							<div class="col-lg-6 form-group">
								<label>Avez vous service pour l'animation ?</label>
								<div class="form-check form-check-inline" style="margin-left: 10%;">
									<label class="form-check-label" for="inlineRadio1">Oui</label>
									<input class="form-check-input" type="radio" name="q2" value="oui" id="inlineRadio1">
									<label class="form-check-label" for="inlineRadio2">Non</label>
									<input class="form-check-input" type="radio" name="q2" value="non" id="inlineRadio2">
								</div>
								<p style="color: red;">
									<?php echo "$errorQ2" ?>
								</p>
							</div>

							<div class="col-lg-6 form-group">
								<label>Avez vous un service traiteur ?</label>
								<div class="form-check form-check-inline" style="margin-left: 10%;">
									<label class="form-check-label" for="inlineRadio1">Oui</label>
									<input class="form-check-input" type="radio" name="q3" value="oui" id="inlineRadio1">
									<label class="form-check-label" for="inlineRadio2">Non</label>
									<input class="form-check-input" type="radio" name="q3" value="non" id="inlineRadio2">
								</div>
								<p style="color: red;">
									<?php echo "$errorQ3" ?>
								</p>
							</div>
						</div>

						<div class="form-group">
							<label>Description bref de la céremonie</label>
							<textarea class="form-control" name="description" placeholder="Description..."
								required="required">
							</textarea>
							<p style="color: red;">
								<?php echo "$errorDescription" ?>
							</p>
						</div>
						<button type="submit" class="btn submit mt-3">Reserver</button>
					</form>
					<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3" style="padding-top: 80px;color: rgb(29, 28, 28);">
						Nous vous contacterons dans un court delais pour d'autres informations, nous vous remercions de nous avoir
						choisir !
						Avec nous, vous ne serrez pas deçu de votre cérémonie.
					</p>
				</div>
			</div>
		</div>
	</div>

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
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>

</html>