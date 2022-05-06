<?php
function verifConnexion()
{
    if (isset($_POST['submit'])) {
        $monPdo = connexionPDO();
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $stm = $monPdo->prepare('SELECT mail, mdp FROM compte WHERE mail = :mail');
        $stm->bindParam('mail', $mail);
        $stm->execute();
        $data = $stm->fetch();
        if ($data != null && password_verify($mdp, $data["mdp"])) {
            $_SESSION['user'] = $mail;
            $_SESSION['lvl'] = getLvlAccount();
            header('Location: index.php?uc=accueil');
        } else {
            echo '<div class="alert alert-danger py-3 w-25 m-auto text-center" role="alert"> Identifiant ou mot de passe incorrect !</div>';
        }
    }
}

function createAccount($mail, $nom, $prenom, $tel, $ville, $adresse, $cp, $mdp)
{
    $monPdo = connexionPDO();
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $req = $monPdo->prepare("INSERT INTO compte ( mail, nom, prenom, tel, ville, adresse, cp, mdp, niv) VALUES (:mail, :nom, :prenom, :tel, :ville, :adresse, :cp, :mdp, 1);");
    $req->bindParam('mail', $mail);
    $req->bindParam('nom', $nom);
    $req->bindParam('prenom', $prenom);
    $req->bindParam('tel', $tel);
    $req->bindParam('ville', $ville);
    $req->bindParam('adresse', $adresse);
    $req->bindParam('cp', $cp);
    $req->bindParam('mdp', $mdp);
    $req->execute();
}

function getPrenom()
{
    $monPdo = connexionPDO();
    $sql = 'SELECT prenom FROM compte WHERE id = "' . $_SESSION['id'] . '"';
    $result = $monPdo->prepare($sql);
    $result->execute();
    $data = $result->fetch();
    return $data;
}

function getLvlAccount()
{
    $monPdo = connexionPDO();
    $req = $monPdo->prepare('SELECT lvl FROM compte WHERE mail = :mail');
    $req->bindParam('mail', $_SESSION['user']);
    $req->execute();
    $res = $req->fetch();

    return $res['lvl'];
}
