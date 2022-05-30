<?php
$action = $_REQUEST['action'];
switch ($action) {
	case 'voirPanier': {
			$n = nbProduitsDuPanier();
			if ($n > 0) {
				$desIdProduit = getLesIdProduitsDuPanier();
				$lesProduitsDuPanier = getLesProduitsDuTableau($desIdProduit);
				include("vues/v_panier.php");
			} else {
				$message = "Votre panier est vide !";
				include("vues/v_message.php");
			}
			break;
		}
	case 'supprimerUnProduit': {
			$idProduit = $_REQUEST['produit'];
			retirerDuPanier($idProduit);
			$desIdProduit = getLesIdProduitsDuPanier();
			$lesProduitsDuPanier = getLesProduitsDuTableau($desIdProduit);
			include("vues/v_panier.php");
			break;
		}
	case 'supprimerPanier': {
			supprimerPanier();
			$message = "Panier supprimer !";
			include("vues/v_message.php");
			break;
		}

	case 'passerCommande': {
			$total = $_REQUEST["total"];
			$mail = $_SESSION['user'];
			commande($total, $mail);
			$idCommande = getIdCommande();
			contenueCommande($idCommande,$_SESSION['panier']);
			 supprimerPanier($_SESSION['panier']); 
			include("vues/v_commande.php");

		}



}
