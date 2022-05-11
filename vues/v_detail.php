<?php

$idDetail = $lesDetails['idProduit'];
$description = $lesDetails['description'];
$nom = $lesDetails['nomProduit'];
$prix = $lesDetails['prix'];
$image = $lesDetails['image'];
$marque = $lesDetails['nomMarque'];
$categorie = $lesDetails['nomCategorie'];
$note = $moyNote[0];

?>

<img class="img" src="<?php echo $image ?>" alt=image />
<div> <u>Nom</u> : <?php echo $nom; ?> </div>
<div> <u>Description</u> : <?php echo $description; ?> </div>
<div> <u>Prix</u> : <?php echo $prix . '€'; ?> </div>
<div> <u>Marque</u> : <?php echo $marque; ?> </div>
<div> <u>Catégorie</u> : <?php echo $categorie; ?> </div>
<div> <u>Note du produit</u> : <?php echo $note[0]; ?> </div>

<form action="index.php?uc=voirProduits&produit=<?php echo $_GET['produit'] ?>&action=ajouterAuPanier" method="POST">
    <input type="number" id="qte" name="qte" min="1" value="1" max="50">
    <button type="submit" class="btn btn-outline-success" name="ajouter">Ajouter au panier</button>
</form>
<hr>

<?php
var_dump($info2);
foreach ($lesAvis as $unAvis) {
    
    $idAvis = $unAvis['idAvis'];
    $avis = $unAvis['avis'];
    $idCompte = $unAvis['idCompte'];
    $info2 = getInfoUser($idCompte);
    $nom = $info2['nom'];
    $prenom = $info2['prenom'];
    $note = $unAvis['note'];

    echo "<div><u> Avis numéro</u> : $idAvis </div>";
    echo "<div><u> Note de l'avis</u> : $note </div>";
    echo "<div><u> Avis déposé par</u> : $nom $prenom : $avis </div>";
    echo '<hr>';
}

?>

<?php
if (isset($_SESSION['user']) && isset($_SESSION['niv']) && $_SESSION['niv'] == '1') {

?>
    <div class="container justify-content-center border border-secondary">
        <form action="index.php?uc=voirProduits&action=addAvis" class="form " id="avis" method="POST">
            <h1 class="form_title text-center">Ecrire un avis</h1>
            <div class="form__input-group"> Note :
                <input type="number" id="note" name="note" min="0" value="0" max="5">
            </div>
            <div class="form__input-group">
                <textarea type="text" class="form__input" placeholder="Commentaire" name="avis" required></textarea>
            </div>
            <button class="btn btn-outline-success form-control" type="submit">Valider</button>
        </form>
    </div>
<?php
}
