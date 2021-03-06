<?php

function initPanier()
{
	if (!isset($_SESSION['produits'])) {
		$_SESSION['produits'] = array();
	}
}

function supprimerPanier()
{
	unset($_SESSION['produits']);
	unset($_SESSION['qte']);
}

function ajouterAuPanier($idProduit, $qte)
{

	$ok = true;
	if (in_array($idProduit, $_SESSION['produits'])) {
		$index = array_search($idProduit, $_SESSION['produits']);
		$qte = (int) $qte;
		$_SESSION['qte'][$index] += $qte;
		$ok = false;
	} else {
		$_SESSION['produits'][] = $idProduit; // l'indice n'est pas précisé : il sera automatiquement celui qui suit le dernier occupé
		$_SESSION['qte'][] = $qte;
	}
	return $ok;
}
/**
 * Retourne les produits du panier
 *
 * Retourne le tableau des identifiants de produit
 
 * @return array $_SESSION['produits'] le tableau des id produits du panier 
 */
function getLesIdProduitsDuPanier()
{
	return $_SESSION['produits'];
}
/**
 * Retourne le nombre de produits du panier
 *
 * Teste si la variable de session existe
 * et retourne le nombre d'éléments de la variable session
 
 * @return int $n
 */
function nbProduitsDuPanier()
{
	$n = 0;
	if (isset($_SESSION['produits'])) {
		$n = count($_SESSION['produits']);
	}
	return $n;
}
/**
 * Retire un de produits du panier
 *
 * Recherche l'index de l'idProduit dans la variable session
 * et détruit la valeur à ce rang
 
 * @param string $idProduit identifiant de produit
 
 */
function retirerDuPanier($idProduit)
{
	$index = array_search($idProduit, $_SESSION['produits']);
	unset($_SESSION['produits'][$index]);
}

/**
 * teste si une chaîne a un format de code postal
 *
 * Teste le nombre de caractères de la chaîne et le type entier (composé de chiffres)
 
 * @param string $codePostal  la chaîne testée
 * @return boolean $ok vrai ou faux
 */
function estUnCp($codePostal)
{

	return strlen($codePostal) == 5 && estEntier($codePostal);
}
/**
 * teste si une chaîne est un entier
 *
 * Teste si la chaîne ne contient que des chiffres
 
 * @param string $valeur la chaîne testée
 * @return boolean $ok vrai ou faux
 */

function estEntier($valeur)
{
	return preg_match("/[^0-9]/", $valeur) == 0;
}
/**
 * Teste si une chaîne a le format d'un mail
 *
 * Utilise les expressions régulières
 
 * @param string $mail la chaîne testée
 * @return boolean $ok vrai ou faux
 */
function estUnMail($mail)
{
	return  preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', $mail);
}
/**
 * Retourne un tableau d'erreurs de saisie pour une commande
 *
 * @param string $nom  chaîne testée
 * @param  string $rue chaîne
 * @param string $ville chaîne
 * @param string $cp chaîne
 * @param string $mail  chaîne 
 * @return array $lesErreurs un tableau de chaînes d'erreurs
 */
function getErreursSaisieCommande($nom, $rue, $ville, $cp, $mail)
{
	$lesErreurs = array();
	if ($nom == "") {
		$lesErreurs[] = "Il faut saisir le champ nom";
	}
	if ($rue == "") {
		$lesErreurs[] = "Il faut saisir le champ rue";
	}
	if ($ville == "") {
		$lesErreurs[] = "Il faut saisir le champ ville";
	}
	if ($cp == "") {
		$lesErreurs[] = "Il faut saisir le champ Code postal";
	} else {
		if (!estUnCp($cp)) {
			$lesErreurs[] = "erreur de code postal";
		}
	}
	if ($mail == "") {
		$lesErreurs[] = "Il faut saisir le champ mail";
	} else {
		if (!estUnMail($mail)) {
			$lesErreurs[] = "erreur de mail";
		}
	}
	return $lesErreurs;
}

function commande($total, $mail)
{
	$monPdo = connexionPDO();
	$req = $monPdo->prepare("INSERT INTO commande (date, etat, montant, mailCompte)  VALUES (now(), 0, :total, :mail)");
	$req->bindParam('total', $total);
	$req->bindParam('mail', $mail);
	$req->execute();
	echo '<div class="alert alert-success py-3 w-25 m-auto text-center" role="alert"> Commande réussit !</div>';
}

function contenueCommande($idCommande, $panier)
{
	$monPdo = connexionPDO();
	$nbProduits = count($panier);
	if ($nbProduits != 0) {
		foreach ($panier as $unProduit) {
			$req = $monPdo->prepare("INSERT INTO detenir VALUES (:idProduit, :idCommande, :qte)");
			$req->bindParam('idProduit', $unProduit['id']);
			$req->bindParam('idCommande', $idCommande);
			$req->bindParam('qte', $qte);
			$req->execute();
		}
	}
}
