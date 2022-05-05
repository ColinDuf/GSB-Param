<div id="produits" class="row w-100">

    <?php
    // parcours du tableau contenant les produits à afficher

    foreach ($lesProduits as $unProduit) {
        $id = $unProduit['id'];
        $description = $unProduit['description'];
        $prix = $unProduit['prix'];
        $image = $unProduit['image'];

    ?>
        <div class="col-4 ">
            <img src="<?php echo $image ?>" alt=image />
            <div class=""><?php echo $description ?></div>
            <div class=""><?php echo $prix . "€" ?></div>
            <?php if (isset($_SESSION['user'])) { ?>
                <input type="number" id="qte" name="qte" min="1" value="1" max="50">
                <div class=""><a href="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=ajouterAuPanier">
                <button type="button" class="btn btn-outline-success ">Ajouter au panier</button> </a></div>
                <div class=""><a href="index.php?uc=voirProduits&produit=<?php echo $id ?>&action=voirDetail">
                <button type="button" class="btn btn-outline-warning ">Détails</button> </a></div>
            <?php
            }
            ?>

        </div>

    <?php

    }

    ?>

</div>