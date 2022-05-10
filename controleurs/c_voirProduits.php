<?php
// contrôleur qui gère l'affichage des produits
initPanier(); // se charge de réserver un emplacement mémoire pour le panier si pas encore fait
$action = $_REQUEST['action'];
switch ($action) {
	case 'voirCategories': {
			$lesCategories = getLesCategories();
			include("vues/v_categories.php");
			break;
		}
	case 'voirProduits': {
			$lesCategories = getLesCategories();
			include("vues/v_categories.php");
			if (!isset($_POST['categorie']) or empty($_POST['categorie'])) {
				echo '<div class="alert alert-danger py-3 w-25 m-auto text-center" role="alert"> Veuillez séléctionner une catégorie !</div>';
			} else {
				$categorie = $_POST['categorie'];


				$lesProduits = getLesProduitsDeCategorie($categorie);
				$lib = getLesInfosCategorie($categorie)['nom'];
				include("vues/v_produitsDeCategorie.php");
			}
			break;
		}
	case 'nosProduits': {
			$lesProduits = getLesProduits();
			include("vues/v_produits.php");
			break;
		}
	case 'ajouterAuPanier': {
			$idProduit = $_REQUEST['produit'];
			$qte = $_POST['qte'];
			$ok = ajouterAuPanier($idProduit, $qte);
			/* if(!$ok)
		{
			$message = "Cet article est déjà dans le panier !!";
			include("vues/v_message.php");
		}
		else{
		// on recharge la même page ( NosProduits si pas categorie passée dans l'url')
		if (isset($_REQUEST['categorie'])){
			$categorie = $_REQUEST['categorie'];
			header('Location:index.php?uc=voirProduits&action=voirProduits&categorie='.$categorie);
		}
		else 
		} */
			header('Location:index.php?uc=voirProduits&action=nosProduits');

			break;
		}

	case 'voirDetail': {
			$_REQUEST['produit'];
			$lesProduits = getLesDetails();
			include("vues/v_detail.php");
			break;
		}

	case 'voirCategories': {
			$lesCategories = getLesCategories();
			include("vues/v_categories.php");
			break;
		}
}
