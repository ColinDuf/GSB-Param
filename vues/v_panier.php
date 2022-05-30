<div class="text-center">Votre Panier :</div>
<div id="produits">
	<?php
	foreach ($lesProduitsDuPanier as $unProduit) {
		if(!isset($count)){
			$count = 0;
			$totalPanier = 0;
		   }
		
		$id = $unProduit['idProduit'];
		$description = $unProduit['nom'];
		$image = $unProduit['image'];
		$prix = $unProduit['prix'];
		
		
	?>
		<div class="card fit p-3">
			<div class=""><img class="img" src="<?php echo $image ?>" alt="image descriptive" /></div>
			<div class="descrCard"><?php echo	$description; ?> </div>
			<div class="prixCard"><?php echo $prix . "€" ?></div>
			<div class="prixCard"><?php echo 'Quantité :' . ' ' . $_SESSION['qte'][$count] ?></div>
			<div class="imgCard">
				<a href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit" onclick="return confirm('Voulez-vous vraiment retirer cet article ?');">
					<img src="images/retirerpanier.png" TITLE="Retirer du panier" alt="retirer du panier">
				</a>
			</div>
		</div>
	<?php
		
		$totalPanier = $totalPanier + $_SESSION['qte'][$count]*$prix;
		$count++;
	}

	?>
	<div class="">Le total du panier est de   <?= $totalPanier ?>€ </div>
	<div class="commande d-flex align-items-center">
		<a class="fit-height" href="index.php?uc=gererPanier&action=passerCommande&total=<?= $totalPanier ?>" ><img src="images/commander.jpg" title="Passercommande" alt="Commander"></a>
		<a class="fit-height" onclick="return confirm('Voulez-vous vraiment supprimer votre panier ?');" href="index.php?uc=gererPanier&action=supprimerPanier"><img class="img" src="images/corbeille.png" title="SupprimerPanier" alt="SupprimerPanier"></a>
	</div>
</div>
<br/>