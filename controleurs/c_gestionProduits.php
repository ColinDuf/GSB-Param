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
      include("vues/v_modifProduit.php");
      break;
    }

  case 'AddProduit': {
    var_dump($_POST );
      AddProduit($_POST['nom'],$_POST['desc'], $_POST['prix'], $_POST['image'],$_POST['marque'],$_POST['categorie']);
      break;
    }
    
}
