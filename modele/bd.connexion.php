<?php
function verifConnexion()
{
    if (isset($_POST['submit'])) {
        $monPdo = connexionPDO();
        $mail = $_POST['mail'];
        $pass = $_POST['mdp'];

        $stm = $monPdo->prepare('SELECT mail, mdp FROM compte WHERE mail = :mail AND mdp= :mdp');
        $stm->bindParam('mdp', $pass);
        $stm->bindParam('mail', $mail);
        $stm->execute();
        $data = $stm->fetch();
        if ($pass == $data["mdp"]) {
            $_SESSION['user'] = $mail;

            header('Location: index.php?uc=accueil');
        } else {
            echo'
            <div class="alert alert-danger py-3 w-25 m-auto text-center" role="alert"> Identifiant ou mot de passe incorect !
            </div>';

        }
    }
}

function createAccount($nom, $prenom, $mail, $ville, $cp, $rue, $pass)
{
    $monPdo = connexionPDO();
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $req = $monPdo->prepare("INSERT INTO compte (nom, prenom, mail, ville, cp, rue, mdp) VALUES (:nom, :prenom, :mail, :ville, :cp, :rue, :mdp);");
    $req->bindParam('nom', $nom);
    $req->bindParam('prenom', $prenom);
    $req->bindParam('mail', $mail);
    $req->bindParam('ville', $ville);
    $req->bindParam('cp', $cp);
    $req->bindParam('rue', $rue);
    $req->bindParam('mdp', $pass);
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
?>