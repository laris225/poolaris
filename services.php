<!DOCTYPE html>
<html lang="en">

<head>
	<title>PooLaris - Services</title>
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

	<!-- Gallery -->
	<!-- lieux -->
	<section class="gallery py-5" id="gallery">
		<div class="container py-md-5">
			<h3 class="tittle text-center font-weight-bold">Nos Services</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Des cadres variés, des decores à couper le
				soufle, des buffés dignent des chefs étoillés, des residesnces luxieuses... Vous y trouveriez vos goût
				tel qu'il soit !
			</p>

			<h3 class="tittle text-center font-weight-bold"><span class="fa fa-home" style="color: #f0546a;margin-right:20px;"></span>Lieux</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				Nous mettons à vos dispositions des résendences meublées avec piscine à bord.
				Des résidences sécurisées, dans des lieux accessibles à tout heure.
				De residences luxieuses à des residences modestes, vous y trouverez votre goût !
				Pour effectuer une réservation <a href="reserve.php">Clicquez-ici </a> .
			</p>
			<div class="row news-grids no-gutters text-center">
				<div class="col-md-4 gal-img">
					<a href="#gal1"><img src="images/l5.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal2"><img src="images/l9.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal3"><img src="images/l18.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal4"><img src="images/l16.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal5"><img src="images/blog3.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal6"><img src="images/l8.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- popup-->
	<div id="gal1" class="pop-overlay animate">
		<div class="popup">
			<img src="images/l5.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des résidences 5 étoiles déjà meublée.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal2" class="pop-overlay animate">
		<div class="popup">
			<img src="images/l9.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des cadres paisible pour se détendre.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal3" class="pop-overlay animate">
		<div class="popup">
			<img src="images/l18.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des vues inpécables sur la ville.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal4" class="pop-overlay animate">
		<div class="popup">
			<img src="images/l16.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des résidences spendides et agréables.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal5" class="pop-overlay animate">
		<div class="popup">
			<img src="images/blog3.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des résidences luxieuses.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal6" class="pop-overlay animate">
		<div class="popup">
			<img src="images/l8.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des sites en connexion avec la nature.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>


	<!-- service traiteur -->
	<section class="gallery py-5" id="gallery2" style="background: rgba(221, 227, 233, 0.233); box-shadow: 0px 1px 04px 1px rgb(75, 96, 104);">
		<div class="container py-md-5">
			<h3 class="tittle text-center font-weight-bold"><span class="fa fa-cutlery" style="color: #f0546a;margin-right:20px;"></span>Service Traiteur</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				Des mets culinaires de chez nous au repas internationaux... Nous vous proposons des répas
				gastronomiques dignes des chefs étoilés, des cocktails, des amuses-bouche et j'en passe.
				Pour effectuer une réservation <a href="reserve.php">Clicquez-ici </a> .
			</p>
			<div class="row news-grids no-gutters text-center">
				<div class="col-md-4 gal-img">
					<a href="#gal7"><img src="images/r11.png" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal8"><img src="images/r34.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal9"><img src="images/r31.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal10"><img src="images/r7.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal11"><img src="images/r27.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal12"><img src="images/r6-1.png" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- popup-->
	<div id="gal7" class="pop-overlay animate">
		<div class="popup">
			<img src="images/r11.png" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Le repas favorit des ivoiriens</p>
			<a class="close" href="#gallery2">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal8" class="pop-overlay animate">
		<div class="popup">
			<img src="images/r34.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Quoi de mieux, qu'une noix de coco fraîche pour se faire plaisir à la piscine !</p>
			<a class="close" href="#gallery2">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal9" class="pop-overlay animate">
		<div class="popup">
			<img src="images/r31.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Le FOUFOU, une spécialité ivoirienne.</p>
			<a class="close" href="#gallery2">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal10" class="pop-overlay animate">
		<div class="popup">
			<img src="images/r7.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Un service traiteur impécable</p>
			<a class="close" href="#gallery2">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal11" class="pop-overlay animate">
		<div class="popup">
			<img src="images/r27.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des repas internationnaux.</p>
			<a class="close" href="#gallery2">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal12" class="pop-overlay animate">
		<div class="popup">
			<img src="images/r6-1.png" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des chefs etoilés pour vous concocter des plats de qualité.</p>
			<a class="close" href="#gallery2">&times;</a>
		</div>
	</div>



	<!-- service décoration -->
	<section class="gallery py-5" id="gallery3">
		<div class="container py-md-5">
			<h3 class="tittle text-center font-weight-bold"><span><img src="icones/d24.png" alt="d24" style="width: 60px; height: 50px;"></span>Service Décoration</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				Un voyage dans un décor à vous coupez le soufle. De la décoration contemporaine à la décoration
				moderne un large choix de décoration pour une ambiance en parfait harmonie avec votre de thème de
				cérémonie. Pour effectuer une réservation <a href="reserve.php">Clicquez-ici </a> .
			</p>
			<div class="row news-grids no-gutters text-center">
				<div class="col-md-4 gal-img">
					<a href="#gal13"><img src="images/d3-1.png" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal14"><img src="images/d2-1.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal15"><img src="images/d7.png" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal16"><img src="images/d12.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal17"><img src="images/d21-1.png" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal18"><img src="images/d11.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- popup-->
	<div id="gal13" class="pop-overlay animate">
		<div class="popup">
			<img src="images/d3-1.png" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des décorations pour vos mariages.</p>
			<a class="close" href="#gallery3">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal14" class="pop-overlay animate">
		<div class="popup">
			<img src="images/d2-1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des décorations pour vos céremonies.</p>
			<a class="close" href="#gallery3">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal15" class="pop-overlay animate">
		<div class="popup">
			<img src="images/d7.png" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des décorations chic pour vos anniversaires.</p>
			<a class="close" href="#gallery3">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal16" class="pop-overlay animate">
		<div class="popup">
			<img src="images/d12.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des décorations pour vos soirées entre amis.</p>
			<a class="close" href="#gallery3">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal17" class="pop-overlay animate">
		<div class="popup">
			<img src="images/d21-1.png" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des décorations pour vos divers soirées.</p>
			<a class="close" href="#gallery3">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal18" class="pop-overlay animate">
		<div class="popup">
			<img src="images/d11.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des décorations pour vos afterworks .</p>
			<a class="close" href="#gallery3">&times;</a>
		</div>
	</div>



	<!-- service animation -->
	<section class="gallery py-5" id="gallery4" style="background: rgba(221, 227, 233, 0.233); box-shadow: 0px 1px 04px 1px rgb(75, 96, 104);">
		<div class="container py-md-5">
			<h3 class="tittle text-center font-weight-bold"><span class="fa fa-music" style="color: #f0546a;margin-right:20px;"></span>Service Animation</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				Des animations avec les meilleurs DJ du moments; Nous vous offrons des animations pour tous les
				catégories d'âge. Pour effectuer une réservation <a href="reserve.php">Clicquez-ici </a> .
			</p>
			<div class="row news-grids no-gutters text-center">
				<div class="col-md-4 gal-img">
					<a href="#gal19"><img src="images/a6.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal20"><img src="images/a5.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal21"><img src="images/a1.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal22"><img src="images/a11.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal23"><img src="images/a10.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal24"><img src="images/a13.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- popup-->
	<div id="gal19" class="pop-overlay animate">
		<div class="popup">
			<img src="images/a6.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des DJ de rénommés!</p>
			<a class="close" href="#gallery4">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal20" class="pop-overlay animate">
		<div class="popup">
			<img src="images/a5.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des animations de ouf!</p>
			<a class="close" href="#gallery4">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal21" class="pop-overlay animate">
		<div class="popup">
			<img src="images/a1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des animations variées!</p>
			<a class="close" href="#gallery4">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal22" class="pop-overlay animate">
		<div class="popup">
			<img src="images/a11.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des animations pour vos céremonies!</p>
			<a class="close" href="#gallery4">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal23" class="pop-overlay animate">
		<div class="popup">
			<img src="images/a10.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des animations pour vos pool-party!</p>
			<a class="close" href="#gallery4">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal24" class="pop-overlay animate">
		<div class="popup">
			<img src="images/a13.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Des annimations personalisées!</p>
			<a class="close" href="#gallery4">&times;</a>
		</div>
	</div>


	<!-- service client -->
	<section class="gallery py-5" id="gallery5">
		<div class="container py-md-5">
			<h3 class="tittle text-center font-weight-bold"><span class="fa fa-group" style="color: #f0546a;margin-right:20px;"></span>Service Client</h3>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">
				Pour un large choix de lieux pour les cérémonies de nos clients, nous vous offrons la possibilité
				de mettre vos maisons en location pour un partenariat gagnant-gangant, ainsi vous devenez notre
				partenaire. La seule contrainte est que la maison doit être impérativement équipée d'une piscine interieure
				! Pour remplir le formulaire et mettre votre residence en location, <a href="poste.php">cliquez-ici !</a>
			</p>
			<div class="row news-grids no-gutters text-center">
				<div class="col-md-4 gal-img">
					<a href="#gal25"><img src="images/p4.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal26"><img src="images/p7.png" alt="Gallery Image" class="img-fluid"></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#gal27"><img src="images/p1.jpg" alt="Gallery Image" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- popup-->
	<div id="gal25" class="pop-overlay animate">
		<div class="popup">
			<img src="images/p4.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nous sommes à l'écoute !</p>
			<a class="close" href="#gallery5">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal26" class="pop-overlay animate">
		<div class="popup">
			<img src="images/p7.png" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Un accord gagnant-gagnant!</p>
			<a class="close" href="#gallery5">&times;</a>
		</div>
	</div>
	<!-- popup-->
	<div id="gal27" class="pop-overlay animate">
		<div class="popup">
			<img src="images/p1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Ensemble nous formons une équipe de choc!</p>
			<a class="close" href="#gallery5">&times;</a>
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
							<a href="index.php">HomAccueile</a>
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
							<p><a href="larisbabou555@gmail.com">larisbabou555@gmail.com</a></p>
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