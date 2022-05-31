<?php
$action = $_REQUEST['action'];
switch ($action) {

  case 'Produit': {
      $lesCategories = getLesCategories();
      $lesMarques = getLesMarques();
      $lesUnites = getlesUnites();
      $lesProduits = getLesProduits();
      $idPoduit = $lesProduits[0]['idProduit'];
      $updateId = $idPoduit + 1;

      if (isset($_POST['addValider'])) {
        AddProduit($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['image'], $_POST['marque'], $_POST['categorie']);
        AddProduitStock($updateId, $_POST['stock']);
      }
      if (isset($_POST['suppValider'])) {
        supProduitAvis($_POST['produit']);
        supProduitContenir($_POST['produit']);
        supProduit($_POST['produit']);
      }
      if (isset($_POST['modifValider'])) {
        var_dump($_POST);
        modifProduit($_POST['produit'], $_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['image'], $_POST['marque'], $_POST['categorie']);
        modifProduitStock($_POST['produit'], $_POST['stock']);
      }
      include("vues/v_modifProduit.php");
      break;
    }

  case 'Categorie': {
      $lesCategories = getLesCategories();

      if (isset($_POST['addValider'])) {
        addCategorie($_POST['acronyme'], $_POST['libelle']);
      }
      if (isset($_POST['suppValider'])) {
        supCat($_POST['categorie']);
      }
      if (isset($_POST['modifCategorie'])) {
        modifCat($_POST['categorie'], $_POST['acronyme'], $_POST['libelle']);
      }
      include("vues/v_modifCategorie.php");
      break;
    }

    case 'Marque': {
      $lesMarques = getLesMarques();
      if (isset($_POST['addValider'])) {
        addMarque($_POST['nom']);
      }
      if (isset($_POST['suppValider'])) {
        supMarque($_POST['marque']);
      }
      if (isset($_POST['modifMarque'])) {
        modifMarque($_POST['marque'], $_POST['nom']);
    }
    include("vues/v_modifMarque.php");
    break;
}

case 'Commande': {
  $lesCommandes = getCommande();
  if (isset($_POST['modifCommande'])) {
    modifStatut($_POST['idCommande'], $_POST['etatCommande']);
}
  include("vues/v_histoCommande.php");
  break;
}

case 'dateCommande': {
 $montantCommande = getMontantCommande($_POST['date']);
 var_dump($montantCommande);
  include("vues/v_histoCommandeMois.php");
}

}

