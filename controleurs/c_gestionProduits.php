<?php
$action = $_REQUEST['action'];
switch ($action) {

  case 'Produit': {
      $lesCategories = getLesCategories();
      $lesMarques = getLesMarques();
      $lesUnites = getlesUnites();
      $lesProduits = getLesProduits();
      include("vues/v_modifProduit.php");

      if (isset($_POST['valider'])) {
        modifProduit($_POST['produit'], $_POST['nom'], $_POST['description'], $_POST['image'], $_POST['marque'], $_POST['categorie'], $_POST['prix'], $_POST['stock']);
      }
      break;
    }

  case 'histoCommande': {
      $lesCommandes = getCommande();
      include("vues/v_histoCommande.php");
    }

    case 'Categorie': {
      $lesCategories = getLesCategories();

      if (isset($_POST['addValider'])) {
			addCategorie($_POST['acronyme'],$_POST['libelle']);
      }
      if (isset($_POST['suppValider'])) {
      supCat($_POST['categorie']);
      }
      if (isset($_POST['modifCategorie'])) {
        modifCat($_POST['categorie'],$_POST['acronyme'],$_POST['libelle']);
        }
      include("vues/v_modifCategorie.php");
			break;
		}
}
