<!doctype html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="./modele/cssGeneral.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
	<?php

	if (isset($_SESSION['user']) && isset($_SESSION['niv']) && $_SESSION['niv'] == '1') {

	?>

		<div class="navbar">
			<div class="nom">GSB Param</div>
			<ul class="mb-0">
				<li><a href="index.php?uc=accueil">Accueil </a></li>
				<li><a href="index.php?uc=voirProduits&action=voirCategories"> Nos produits par catégorie</a></li>
				<li><a href="index.php?uc=voirProduits&action=nosProduits"> Nos produits </a></li>
				<li><a href="index.php?uc=gererPanier&action=voirPanier"> Voir son panier </a></li>
				<li><a href="index.php?uc=gestionConnexion&action=profil"> Profil </a></li>
				<li><a href="index.php?uc=gestionConnexion&action=seDeconnecter"> Déconnexion </a></li>
			</ul>

		</div>
	<?php

	} else if (isset($_SESSION['niv']) && $_SESSION['niv'] == '2') {
	?>
		<div class="navbar">
			<div class="nom">GSB Param</div>
			<ul class="mb-0">
				<li><a href="index.php?uc=accueil">Accueil </a></li>
				<li><a href="index.php?uc=voirProduits&action=voirCategories"> Nos produits par catégorie</a></li>
				<li><a href="index.php?uc=voirProduits&action=nosProduits"> Nos produits </a></li>
				<li><a href="index.php?uc=gestionConnexion&action=profil"> Profil </a></li>
				<div class="btn-group">
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Admin </button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.php?uc=gestionProduits&action=Produit">Modifier produit</a>
						<a class="dropdown-item" href="index.php?uc=gestionProduits&action=Categorie">Modifier categorie</a>
						<a class="dropdown-item" href="index.php?uc=gestionProduits&action=Marque">Modifier marque</a>
						<a class="dropdown-item" href="index.php?uc=gestionProduits&action=Commande">Commande</a>
					</div>
				</div>
				<li><a href="index.php?uc=gestionConnexion&action=seDeconnecter"> Déconnexion </a></li>
			</ul>
		</div>

	<?php

	} else {

	?>
		<div class="navbar">
			<div class="nom">GSB Param</div>
			<ul class="mb-0">
				<li><a class href="index.php?uc=accueil">Accueil</a></li>
				<li><a href="index.php?uc=voirProduits&action=voirCategories">Nos produits par catégorie</a></li>
				<li><a href="index.php?uc=voirProduits&action=nosProduits">Nos produits</a></li>
				<li><a href="index.php?uc=gestionConnexion&action=seConnecter">Connexion</a></li>
				<li><a href="index.php?uc=gestionConnexion&action=inscription">Inscription</a></li>
			</ul>
		</div>
	<?php

	}



	?>