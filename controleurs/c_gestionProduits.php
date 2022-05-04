<?php
$action = $_REQUEST['action'];
switch ($action) {

case 'admin': {
            include("vues/v_admin.php");
            break;
        }

        case 'AddProduit': {
			AddProduit($_POST['desc'], $_POST['prix'], $_POST['image'], $_POST['idCat']);
			break;
		}
    }
?>