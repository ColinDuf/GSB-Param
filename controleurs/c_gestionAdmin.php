<?php
$action = $_REQUEST['action'];
switch ($action) {

    case 'admin': {
            include("vues/v_admin.php");
            break;
        }
}
