<?php
$action = $_REQUEST['action'];
switch ($action) {

	case 'verif': {
			$result = verifConnexion();
			break;
		}
	case 'seConnecter': {
			include("vues/v_connexion.php");
			break;
		}
	case 'seDeconnecter': {
			session_destroy();
			header("location:index.php?uc=accueil");
			break;
		}
	case 'inscription': {
			include("vues/v_inscription.php");
			break;
		}
	case 'verifInscription': {
			createAccount($_POST['mail'], $_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['ville'], $_POST['adresse'], $_POST['cp'], $_POST['mdp']);
			break;
		}
	case 'admin': {
			include("vues/v_ajoutProduit.php");
			break;
		}

	case 'profil': {
		$info = getInfo();
			include("vues/v_profil.php");
			break;
		}
}
