<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Billet simple pour l'Alaska Accueil </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Billet simple pour l'Alaska, blog ecrivain, livre" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery.min.js"></script>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--start-smoth-scrolling-->
</head>

<body>
	<!--header-top-starts-->

	<?php include("classe/connect_bdd.php"); ?>

		<div class="header-top">
			<div class="container">
				<div class="head-main">
					<a href="index.php"><img src="images/logo-1.png" alt="" /></a>
				</div>
			</div>
		</div>
		<!--header-top-end-->
		<!--start-header-->
		<div class="header">
			<div class="container">
				<div class="head">


					<!--menu php-->
					<?php include("vues/menus.php"); ?>


						<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- script-for-menu -->

		<!-- script-for-menu -->

		<script>
			$("span.menu").click(function () {
				$(" ul.navig").slideToggle("slow", function () {});
			});
		</script>
		<!-- script-for-menu -->


		<!--banner-starts-->
		<div class="banner">
			<div class="container">
				<div class="banner-top">
					<div class="banner-text">
						<h2>Aliquam erat</h2>
						<h1>Suspendisse potenti</h1>
						<div class="banner-btn">
							<a href="vues/about.php">En savoir plus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--banner-end-->
		<!--about-starts-->
		<div class="about">
			<div class="container">
				<div class="about-main">
					<div class="col-md-8 about-left">

						<!-- on récupere le dernier billet -->
						<?php include("classe/derniers_billets.php"); ?>
							<!-- on récupere les 4 derniers billets -->
							<?php include("classe/quatre_ad_billets.php"); ?>



					</div>
					<div class="col-md-4 about-right heading">
						<div class="abt-1">
							<h3>A PROPOS</h3>
							<div class="abt-one">
								<img src="images/c-2.jpg" alt="" />
								<p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a dictum neque.</p>
								<div class="a-btn">
									<a href="vues/single.php">En savoir plus</a>
								</div>
							</div>
						</div>

						<!-- on récupere les trois premiers chapitres -->
						<?php include("classe/trois_prem_billets.php"); ?>




					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--about-end-->

		<!--footer-starts-->

		<?php include("vues/footer.php"); ?>

			<!--footer-end-->
</body>

</html>