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
			$image = $unProduit['image'];
		?>
			<form action="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=ajouterAuPanier" method="POST">
				<div class="card fit p-3 d-flex flex-column justify-content-center align-items-center m-1">
					<div class=""><img class="img" src="<?php echo $image ?>" alt=image /></div>
					<div class="descrCard"><?php echo $description ?></div>
					<a href="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=voirDetail">
						<button type="button" class="btn btn-outline-warning ">Détails</button>
					</a>
			</form>
	</div>
<?php
		}
?>
</div>
</div>