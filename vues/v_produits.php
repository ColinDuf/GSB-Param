<div id="produits">

<?php
// parcours du tableau contenant les produits à afficher

foreach( $lesProduits as $unProduit) 
{ 	
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];
	
	?>	
	<div class="card">
			<div class="photoCard"><img src="<?php echo $image ?>" alt=image /></div>
			<div class="descrCard"><?php echo $description ?></div>
			<div class="prix"><?php echo $prix."€" ?></div>
			<input type="number" id="qte" name="qte" min="1" max="50">
			<div class=""><a href="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=ajouterAuPanier"> 
			<img src="images/mettrepanier.png" TITLE="Ajouter au panier" alt="Mettre au panier"> </a></div>
			
	</div>

<?php			
} 
?>
</div>
