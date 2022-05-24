<?php
$action = $_REQUEST['action'];
switch ($action) {

  case 'ajoutProduit': {
      $lesCategories = getLesCategories();
      $lesMarques = getLesMarques();
      $lesUnites = getlesUnites();
      $lesProduits = getLesProduits();
      include("vues/v_ajoutProduit.php");
      break;
    }

  case 'modifProduit': {
      $lesProduits = getLesProduits();
      $lesMarques = getLesMarques();
      $lesCategories = getLesCategories();
      include("vues/v_modifProduit.php");
      if (isset($_POST['valider'])) {
        modifProduit($_POST['produit'], $_POST['nom'], $_POST['description'], $_POST['image'], $_POST['marque'], $_POST['categorie'], $_POST['prix'], $_POST['stock']);
      }
      break;
    }

  case 'AddProduit': {
      AddProduit($_POST['nom'], $_POST['desc'], $_POST['prix'], $_POST['image'], $_POST['marque'], $_POST['categorie']);
      break;
    }

  case 'histoCommande': {
      $lesCommandes = getCommande();
      include("vues/v_histoCommande.php");
    }
}
