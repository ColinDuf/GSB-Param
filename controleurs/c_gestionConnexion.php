<?php

switch($action)
{

	case 'verif' :
		{
			$result = verifConnexion();
			break;
		}
	case 'seConnecter' :
		{
			include("vues/v_connexion.php");
			break;
		}
	case 'deconnexion' :
		{
			include("vues/v_deconnexion.php");
			break;
		}
}
