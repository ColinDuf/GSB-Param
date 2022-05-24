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
			commande($_SESSION['produits']);
			include("vues/v_commande.php");
		}

	





		/* $n= nbProduitsDuPanier();
		if($n>0)
		{ 
			$nom ='';$rue='';$ville ='';$cp='';$mail='';
			include ("vues/v_commande.php");
		}
		else
		{
			$message = "panier vide !!";
			include ("vues/v_message.php");
		}
		break;
	case 'confirmerCommande'	:
	{
		$nom =$_REQUEST['nom'];$rue=$_REQUEST['rue'];$ville =$_REQUEST['ville'];$cp=$_REQUEST['cp'];$mail=$_REQUEST['mail'];
	 	$msgErreurs = getErreursSaisieCommande($nom,$rue,$ville,$cp,$mail);
		if (count($msgErreurs)!=0)
		{
			include ("vues/v_erreurs.php");
			include ("vues/v_commande.php");
		}
		else
		{
			$lesIdProduit = getLesIdProduitsDuPanier();
			creerCommande($nom,$rue,$cp,$ville,$mail, $lesIdProduit );
			$message = "Commande enregistrée";
			supprimerPanier();
			include ("vues/v_message.php");
		}
		break;
	} */
}
