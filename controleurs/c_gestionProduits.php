<?php
$action = $_REQUEST['action'];
switch ($action) {

  case 'admin': {
    $lesCategories = getLesCategories();
      include("vues/v_ajoutProduit.php");
      break;
    }

  case 'AddProduit': {
      AddProduit($_POST['desc'], $_POST['prix'], $_POST['image'], $_POST['idCat']);
      break;
    }
}
