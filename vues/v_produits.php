<div id="produits" class="row w-100">

    <?php
    // parcours du tableau contenant les produits à afficher

    foreach ($lesProduits as $unProduit) {
        $id = $unProduit['idProduit'];
        $description = $unProduit['nom'];
        $prix = $unProduit['prix'];
        $image = $unProduit['image'];

    ?>
        <div class="col-4 ">
            <form action="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=ajouterAuPanier" method="POST">
                <img class="img" src="<?php echo $image ?>" alt=image />
                <div class=""><?php echo $description ?></div>
                <div class="badge bg-success"><?php echo $prix . "€" ?></div>
                <a href="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=voirDetail">
                    <button type="button" class="btn btn-outline-warning ">Détails</button>
                </a>
            </form>
        </div>

    <?php

    } 

    ?>

</div>