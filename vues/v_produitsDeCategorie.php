<div id="produits">
	<?php
	?> <div class="p-5">
		<?php
		echo 'Catégorie : ' . $lib['libelle'];
		?>
	</div>
	<div class="row">
	<?php
	foreach ($lesProduits as $unProduit) {
		$id = $unProduit['idProduit'];
		$description = $unProduit['nom'];
		$prix = $unProduit['prix'];
		$image = $unProduit['image'];
	?>
	 <form action="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=ajouterAuPanier" method="POST">
		<div class="card fit p-3 d-flex flex-column justify-content-center align-items-center m-1">
			<div class=""><img class="img" src="<?php echo $image ?>" alt=image /></div>
			<div class="descrCard"><?php echo $description ?></div>
			<div class="prixCard"><?php echo $prix . "€" ?></div>
			<?php if (isset($_SESSION['user'])) { ?>
				<input class="" type="number" id="qte" name="qte" min="1" max="50" value="1">
				<button type="submit" class="btn btn-outline-success" name="ajouter">Ajouter au panier</button>
            </form>
			<?php } ?>

		</div>
	<?php
	}
	?></div>
</div>