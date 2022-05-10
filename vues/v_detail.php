<?php

foreach ($lesProduits as $unProduit){

    $id = $unProduit['idProduit'];
    $nom = $unProduit['nom'];
    $prix = $unProduit['prix'];
    $image = $unProduit['image'];
    

    echo $nom;
echo $prix ;
?>
<img class="img" src="<?php echo $image ?>" alt=image />

<?php
}









?>