<?php 
// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, image, titre, IF(CHAR_LENGTH(contenu) > 100, CONCAT(LEFT(contenu, 100) ), contenu) AS contenu_cut, auteur, auteur, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 1, 4');

//on obtient le nombre de commentaire par billet



while ($donnees = $req->fetch())
{
?>


	<div class="about-tre">
		<div class="a-1">
			<div class="col-md-6 abt-left">
				<a href="vues/single.php?id=<?php echo htmlspecialchars($donnees['id']); ?>"><img src="<?php echo htmlspecialchars($donnees['image']); ?>" alt="<?php echo htmlspecialchars($donnees['alt']); ?>" /></a>

				<h3><a href="vues/single.php">
					<?php echo htmlspecialchars($donnees['titre']); ?></a></h3>
				<p>
					<?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu_cut']));
    ?>
				</p>
				<label>
					<?php echo htmlspecialchars($donnees['date_creation_fr']); ?>
				</label>
			</div>
		</div>


	</div>










	<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>