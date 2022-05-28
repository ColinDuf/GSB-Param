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
            $_SESSION['niv'] = getNivAccount();
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

function getInfo()
{
    $monPdo = connexionPDO();
    $req = $monPdo->prepare('SELECT id, mail, nom, prenom, tel, ville, adresse, cp FROM compte WHERE mail =:mail');
    $req->bindParam('mail', $_SESSION['user']);
    $req->execute();
    $res = $req->fetch();

    return $res;
}

function getInfoUser($id)
{

    $monPdo = connexionPDO();
    $req = $monPdo->prepare('SELECT id, mail, nom, prenom, tel, ville, adresse, cp FROM compte WHERE id =:id');
    $req->bindParam('id', $id);
    $req->execute();
    $res = $req->fetch();

    return $res;
}

function getNivAccount()
{
    $monPdo = connexionPDO();
    $req = $monPdo->prepare('SELECT niv FROM compte WHERE mail = :mail');
    $req->bindParam('mail', $_SESSION['user']);
    $req->execute();
    $res = $req->fetch();

    return $res['niv'];
}

