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
            <?php if (isset($_SESSION['user'])) { ?>
            <input type="number" id="qte" name="qte" min="1" max="50">
            <div class=""><a href="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=ajouterAuPanier">
            <img src="images/mettrepanier.png" TITLE="Ajouter au panier" alt="Mettre au panier"> </a></div>
            <?php } ?>
    </div>
 
<?php          
}
?>
</div>
 




<div id="produits">
    <?php
    ?> <div class="p-5">
        <?php
        echo 'Catégorie : ' . $lib;
        ?>
    </div>
    <?php
    foreach ($lesProduits as $unProduit) {
        $id = $unProduit['id'];
        $description = $unProduit['description'];
        $prix = $unProduit['prix'];
        $image = $unProduit['image'];
    ?>
        <div class="card">
            <div class="photoCard"><img src="<?php echo $image ?>" alt=image /></div>
            <div class="descrCard"><?php echo $description ?></div>
            <div class="prixCard"><?php echo $prix . "€" ?></div>
            <?php if (isset($_SESSION['user'])) { ?>
                <input class="" type="number" id="qte" name="qte" min="1" max="50">
                <div class="imgCard"><a href="index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier">
                        <img src="images/mettrepanier.png" TITLE="Ajouter au panier" alt="Mettre au panier">
                    </a></div>
            <?php } ?>
 
        </div>
    <?php
    }
    ?>
</div>