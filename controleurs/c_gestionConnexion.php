<?php
$action = $_REQUEST['action'];
switch($action)
{

	case 'verif' :
		{
			$result = verifConnexion();
			var_dump($result);
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
		case 'inscription' :
			{
				include("vues/v_inscription.php");
				break;
			}
}
