<?php

try {
	$connexion = new PDO('mysql:host=localhost;dbname=poolaris', 'root', '');
} catch (Exception $e) {
	die("Erreur:" . $e->getMessage());
}
$errorLetter = "";
// $succes = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$letter = $_POST['letter'];
	$isValidate = true;
	// $succes = true;

	if (empty($letter)) {
		$errorLetter = "email obligtoire";
		$isValidate = false;
	}

	if ($isValidate = true) {
		$req = $connexion->prepare("INSERT INTO newsletter(letter) VALUES(?)");
		$req->execute(array($letter));
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>PooLaris - Accueil</title>
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
								<li><a href="reserve.php">Reserver</a></li>
								<li><a href="poste.php">Poster</a></li>
								<li><a href="about.php">A propos</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul class="banner_slide_bg">
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Bienvenue au PooLaris</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Pool Party</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Plus d'infos</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Bienvenue au PooLaris</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">After-works</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Plus d'infos</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Bienvenue au PooLaris</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Mariages</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Plus d'infos</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Bienvenue au PooLaris</p>
								<h3 class="w3ls_pvt-title text-wh text-uppercase let">Autres Céremonies</h3>
								<a href="about.php" class="btn button-style mt-sm-5 mt-4">Plus d'infos</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
					<label for="slides_3"></label>
					<label for="slides_4"></label>
				</div>
			</div>
		</div>

	</div>


	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="d-md-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls">
				<h6 class="text-wh let">Leader des Pool Party</h6>
				<h3 class="text-wh my-3">Bienvenue au PooLaris</h3>
				<p>Nous vous souhaitons la bienvenue chez les leaders de l'organisation des fêtes de la jeunese.
					Nous vous proposons une large gamme de choix pour vos pool-party, after-work, cérémonie de
					mariages d'anniversaire et bien d'autres cérémonies dans un splendide décor au bord de nos chic
					piscines.
					Pour effectuer une réservation <a href="reserve.php">Clicquez-ici </a> .
				</p>
			</div>
			<div class="button offset-lg-2 offset-md-1">
				<a href="about.php" class="btn w3ls-button-mobamu">Plus d'infos</a>
			</div>
		</div>
	</div>

	<!-- about -->
	<section class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-md-5">
				<div class="col-lg-4 about-left-w3pvt offset-lg-1 mt-lg-4">
					<div class="main-img">
						<img src="images/p17.jpg" alt="" class="img-fluid pos-aboimg">
						<img src="images/p4.jpg" alt="" class="img-fluid pos-aboimg2">
					</div>
				</div>
				<div class="col-xl-6 col-lg-7 about-right offset-xl-1">
					<h4 class="sub-tittle-w3layouts let">A propos de nous !</h4>
					<h3 class="tittle-w3layouts text-uppercase pr-lg-5 mt-2">Leader de l'envent à la piscine</h3>
					<p class="mt-4 mb-4">Répondre aux besoins des personnes qui font face à des défis pour l'organisation de leurs
						cérémonies. Pour réfléchir, décider et agir efficacement, votre connaissance seul ne suffit pas: il devient
						nécessaire de considérer l'apport d'un service qui s'y connait dans l'organisation de ce type de cérémonie.
					</p>
					<p>
						Vous faire passer des moments inoubliables pendant votre sejour dans l'une de nos résidences est notre mission.
					</p>
					<a href="about.php" class="btn button-style-2 mt-sm-5 mt-4">Plus d'infos</a>
				</div>
			</div>
		</div>
	</section>

	<!-- stats -->
	<div class="stats py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row stats-mobamu py-5">
				<div class="col-lg-4 col-md-6">
					<div class="stats-grid">
						<div class="row">
							<div class="col-4 text-center">
								<span class="fa fa-star"></span>
							</div>
							<div class="col-8">
								<h4 class="numscroller">6000</h4>
								<p>Excellentes notes</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
					<div class="stats-grid">
						<div class="row">
							<div class="col-4 text-center">
								<span class="fa fa-smile-o"></span>
							</div>
							<div class="col-8">
								<h4 class="numscroller">25k</h4>
								<p>Clients heureux</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto mt-lg-0 mt-4">
					<div class="stats-grid">
						<div class="row">
							<div class="col-4 text-center">
								<span class="fa fa-cutlery"></span>
							</div>
							<div class="col-8">
								<h4 class="numscroller">150</h4>
								<p>Produits alimentaires</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- why -->
	<div class="serives py-5" id="why">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Pourquoi PooLaris </h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				PooLaris est né des mots POOL qui veut dire piscine en anglais et Laris, le prénom de son concepteur.
				La réussite ou l’échec de toute action au sein d’une
				organisation dépend, de manière cruciale, de facteurs humains : enjeux personnels et collectifs spécifiques
				qu’il faut savoir percevoir et intégrer, même lorsqu’ils ne sont pas exprimés...
				Un assistant, personnellement impliqué à vos côtés, pour prendre note de tous vos recommendation et
				une équipe recrutés pour leurs qualités dans l'évènementiel sont autant
				d’alliés de confiance pour que votre cérémonie soit un succès.
			</p>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 ser-grid">
					<span class="fa fa-cutlery"></span>
					<h4>Restauration</h4>
					<p>Nous vous proposons des répas gastronomiques dignes des chefs étoilés,
						des cocktails, des amuses-bouche et bien d'autres.
					</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-md-0 mt-5">
					<span class="fa fa-money"></span>
					<h4>Prix Bas</h4>
					<p>Soucieux de vous aidez pour vos céremonies, nous vous proposons des prix très éconimque</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
					<span class="fa fa-user-secret"></span>
					<h4>Zones sécurisées</h4>
					<p>Soucieux de votre sécurité, nous mettons à votre disposition des services de sécurité et
						des lieux sécurisés.
					</p>
				</div>
				<div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
					<span class="fa fa-car"></span>
					<h4>Vehicule</h4>
					<p>Des véhicules disponibles pour votre céremonie et des lieux accessibles à tout heure, à
						tout temps.
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- services -->
	<div class="serives-mobamu py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-wh font-weight-bold">Nos Services</h3>
			<p class="sub-tittle text-center text-li mt-2 mb-sm-5 mb-4 pb-xl-3">Des cadres variés, des decores à couper le
				soufle, des buffés dignent des chefs étoillés, des residesnces luxieuses... Vous y trouveriez vos goût tel qu'il soit !
			</p>
			<div class="row welcome-bottom text-center">
				<div class="col-lg-3 col-sm-6 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/r7-1.png" alt="" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Service Traiteur</h4>
						<p>Des repas traditionnels et modernes.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/d7-1.png" alt="" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Service Décoration</h4>
						<p>Des cadres divers et variés pour un voyage innoubliable.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/a10-1.jpg" alt="" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Service Animation</h4>
						<p>Les meilleurs DJ du moment pour votre animation.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
					<div class="welcome-grid bg-wh py-5 px-4">
						<img src="images/p4-1.png" alt="" class="img-fluid">
						<h4 class="mt-4 mb-3 text-bl">Service Client</h4>
						<p>Un partenariat Gagnant-Gagnant.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- newsletter -->
	<div class="newsletter_w3w3pvt py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Abonnez-vous à la newsletter</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Pour recevoir tout nos offres promotionnelles
				et les nouveautés que nous proposons.
			</p>
			<div class="newsletter">
				<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
					<div class="form-group mb-0 w-100">
						<input class="email" type="email" name="letter" placeholder="Votre email..." required="required">
						<p style="color: red;">
							<?php echo "$errorLetter" ?>
						</p>
					</div>
					<button type="submit" class="btn">Abonnez-vous</button>
				</form>
				<!-- <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3" style="display:<?php //if($succes) echo 'block'; else echo 'none';?>; color:green;">
					Merci de vous être abonner !
				</p> -->
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
							<p><a href="mailto:larisbabou555@gmail.com">larisbabu555@gmail.com</a></p>
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