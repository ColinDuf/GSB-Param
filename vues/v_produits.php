<div id="produits" class="row w-100">

    <?php
    // parcours du tableau contenant les produits à afficher

    foreach ($lesProduits as $unProduit) {
        $id = $unProduit['id'];
        $description = $unProduit['description'];
        $prix = $unProduit['prix'];
        $image = $unProduit['image'];

    ?>
        <div class="col-4">
            <img src="<?php echo $image ?>" alt=image />
            <div class=""><?php echo $description ?></div>
            <div class=""><?php echo $prix . "€" ?></div>
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