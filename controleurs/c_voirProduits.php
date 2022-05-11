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
				$lib = getLesInfosCategorie($categorie);
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
			header('Location:index.php?uc=gererPanier&action=voirPanier');
			break;
		}

	case 'voirDetail': {
			$_REQUEST['produit'];
			$lesDetails = getLesDetails();
			$lesAvis = getLesAvis();
			$info = getInfo();
			$moyNote = getMoyNote();
			include("vues/v_detail.php");
			break;
		}

	case 'voirCategories': {
			$lesCategories = getLesCategories();
			include("vues/v_categories.php");
			break;
		}

	case 'addAvis': {
		
			addAvis($_POST['note'], $_POST['avis'], $_POST['idDetail'],$_SESSION['user']);
			break;
		}
}
