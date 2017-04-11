<?php


//on récupere les commentaires
$req = $bdd->query('SELECT id, id_billet, pseudo, contenu_commentaire , DATE_FORMAT(date_commentaire, \'%d/%m/%Y \') AS date_commentaire_fr FROM commentaires ORDER BY date_commentaire');
 


	//connecter en php

?>
	<h3>Commentaires</h3>
	<div class="media">
		<div class="media-body">
			<h4 class="media-heading">
				<?php echo htmlspecialchars($donnees ['auteur']);?>
			</h4>

			<p>
				<?php echo htmlspecialchars($donnees ['commentaires']);?>
			</p>
		</div>
		<div class="media-right">
			<a href="#">
				<img src="images/si.png" alt=""> </a>
		</div>
	</div>
	<div class="media">
		<div class="media-left">
			<a href="#">
				<img src="images/si.png" alt="">
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading">Joseph Goh</h4>
			<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs . </p>
		</div>
	</div>