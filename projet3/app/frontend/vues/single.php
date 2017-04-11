<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>

<head>
	<title>Billet simple pour l'Alaska: | Single :</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Billet simple pour l'Alaska, blog, billet simple" />
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
				<div class="container">
					<div class="head-main">
						<a href="index.php"><img src="images/logo-1.png" alt="" /></a>
					</div>

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

		<!--start-single-->
		<div class="single">
			<div class="container">
				<div class="single-top">

					<?php include("billets_simple.php"); ?>

						<?php include("commantaires.php"); ?>

				</div>
				<div class="comments heading">
					
				</div>
				<div class="comment-bottom heading">
					<h3>Leave a Comment</h3>
					<form>
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
		</div>
		<!--end-single-->
		<!--footer-starts-->

		<?php include("footer.php"); ?>

			<!--footer-end-->
</body>

</html>