<?php 
// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, image, titre, IF(CHAR_LENGTH(contenu) > 100, CONCAT(LEFT(contenu, 100) ), contenu) AS contenu_cut, auteur, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation ASC LIMIT 0, 3');

//on obtient le nombre de commentaire par billet

?>




	<div class="abt-2">
		<h3>PREMIERS CHAPITRES</h3>
		<?php while ($donnees = $req->fetch())
{
?>
			<div class="might-grid">
				<div class="grid-might">

					<!-- On récupere l'id pouvoir renvoyer un lien vers billet complet ainsi que l'image et le alt-->
					<a href="vues/single.php?id=<?php echo htmlspecialchars($donnees['id']); ?>">	
				<img src="<?php echo htmlspecialchars($donnees['image']); ?>" alt="<?php echo htmlspecialchars($donnees['alt']); ?> " height="100" width="100" class="img-responsive"/></a>



				</div>
				<div class="might-top">
					<!-- On récupere l'id pouvoir renvoyer un lien vers billet complet ainsi que le titre du billet-->

					<h4><a href="vues/single.php?id=<?php echo htmlspecialchars($donnees['id']); ?>"> 
					<?php echo htmlspecialchars($donnees['titre']); ?></a>
					</h4>
					<p>
						<?php 
    // On affiche le contenu du billet
   echo nl2br(htmlspecialchars($donnees['contenu_cut']));
    ?>
					</p>

				</div>
				<div class="clearfix"></div>
			</div>

	</div>




	<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>