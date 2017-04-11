<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Billet simple pour l'Alaska: Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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

	<?php include("classe/connect_bdd.php"); ?>

		<!--header-top-starts-->
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

					<?php include("menus.php"); ?>


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

		<!----start-contact---->
		<div class="contact">
			<div class="container">
				<div class="contact-top heading">
					<h3>CONTACT</h3>
				</div>
				<div class="contact-bottom">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" frameborder="0" style="border:0"></iframe>
					<div class="contact-text">
						<div class="col-md-4 contact-left">
							<h4>Sed dapibus nunc eu metus commodo, et dictum justo fermentum.</h4>
							<p>Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
							<div class="address">
								<h4>Address</h4>
								<p>The company name,
									<span>Lorem ipsum dolor,</span> Glasglow Dr 40 Fe 72.</p>
							</div>
						</div>
						<div class="col-md-8 contact-right">
							<input placeholder="Name" type="text" required>
							<input placeholder="Email" type="text" required>
							<textarea placeholder="Message" required></textarea>
							<div class="submit-btn">
								<form>
									<input type="submit" value="SUBMIT">
								</form>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!----end-contact---->
		<!--footer-starts-->

		<?php include("footer.php"); ?>

			<!--footer-end-->
</body>

</html>