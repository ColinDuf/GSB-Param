<?php

$idDetail = $lesDetails['idProduit'];
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

foreach ($lesAvis as $unAvis) {

    $idAvis = $unAvis['idAvis'];
    $avis = $unAvis['avis'];
    $idCompte = $unAvis['idCompte'];
}
?>

<hr>
<div> Avis : <?php echo $avis; ?> </div>

<div class="container justify-content-center border border-secondary">
        <form action="index.php?uc=voirProduits&action=addAvis" class="form " id="avis" method="POST">
            <h1 class="form_title text-center">Ecrire un avis</h1>
            <div class="form__input-group">
            <input type="number" id="note" name="note" min="1" value="0" max="5">
            </div>
 
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Commentaire" name="avis" required>
            </div>

            <button class="btn btn-outline-success form-control" type="submit">Valider</button>
 
           
        </form>
    </div>