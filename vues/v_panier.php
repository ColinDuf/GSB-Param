<div class="text-center">Votre Panier :</div>
<div id="produits">
	<?php
	foreach ($lesProduitsDuPanier as $unProduit) {
		$id = $unProduit['id'];
		$description = $unProduit['description'];
		$image = $unProduit['image'];
		$prix = $unProduit['prix'];
	?>
		<div class="card">
			<div class="photoCard"><img src="<?php echo $image ?>" alt="image descriptive" /></div>
			<div class="descrCard"><?php echo	$description; ?> </div>
			<div class="prixCard"><?php echo $prix . "€" ?></div>
			<div class="imgCard"><a href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit" onclick="return confirm('Voulez-vous vraiment retirer cet article ?');">
					<img src="images/retirerpanier.png" TITLE="Retirer du panier" alt="retirer du panier"></a></div>
		</div>
	<?php
	}
	?>
	<div class="commande">
		<a href="index.php?uc=gererPanier&action=passerCommande"><img src="images/commander.jpg" title="Passercommande" alt="Commander"></a>
		<a onclick="return confirm('Voulez-vous vraiment supprimer votre panier ?');" href="index.php?uc=gererPanier&action=supprimerPanier" ><img src="images/corbeille.png" title="SupprimerPanier" alt="SupprimerPanier" ></a>
	</div>
</div>
<br/>
