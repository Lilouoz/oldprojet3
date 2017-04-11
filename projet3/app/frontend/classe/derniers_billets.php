<?php 
// On récupère le derniers billets
$req = $bdd->query('SELECT id, image, alt, titre, contenu, auteur, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 1');

//on obtient le nombre de commentaire par billet



while ($donnees = $req->fetch())
{
?>


	<div class="about-one">
		<p>Dernier billet</p>




		<h3><?php echo htmlspecialchars($donnees['titre']); ?></h3>
	</div>
	<div class="about-two">
		<a href="vues/single.php?id=<?php echo htmlspecialchars($donnees['id']); ?>">
			
			<img src="<?php echo htmlspecialchars($donnees['image']);?>
					  " alt=""
				 
				 <?php echo htmlspecialchars($donnees['alt']); ?> /></a>
		<p>Posté par
			<a href="vues/about.php">
				<?php echo htmlspecialchars($donnees['auteur']); ?>
			</a> le
			<?php echo htmlspecialchars($donnees['date_creation_fr']); ?>
				<em><a href="classe/commentaires.php?id_billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
		</p>
		<p>
			<?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>

		</p>
		<div class="about-btn">
			<a href="vues/single.php">En savoir plus</a>
		</div>
		<ul>
			<li>
				<p>Share : </p>
			</li>
			<li><a href="#"><span class="fb"> </span></a></li>
			<li><a href="#"><span class="twit"> </span></a></li>
			<li><a href="#"><span class="pin"> </span></a></li>
			<li><a href="#"><span class="rss"> </span></a></li>
			<li><a href="#"><span class="drbl"> </span></a></li>
		</ul>
	</div>










	<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>