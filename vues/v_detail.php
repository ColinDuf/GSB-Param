<?php

$id = $lesDetails['idProduit'];
$description = $lesDetails['description'];
$nom = $lesDetails['nomProduit'];
$prix = $lesDetails['prix'];
$image = $lesDetails['image'];
$marque = $lesDetails['nomMarque'];
$categorie = $lesDetails['nomCategorie'];

?>

<img class="img" src="<?php echo $image ?>" alt=image />
<div> Nom : <?php echo $nom; ?> </div>
<div> Description : <?php echo $description; ?> </div>
<div> Prix : <?php echo $prix . '€'; ?> </div>
<div> Marque : <?php echo $marque; ?> </div>
<div> Catégorie : <?php echo $categorie; ?> </div>

<?php










?>