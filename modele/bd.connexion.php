<?php
function verifConnexion()
{
    if (isset($_POST['submit'])) {
        $monPdo = connexionPDO();
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        $sql = 'SELECT mail, mdp FROM compte WHERE mail = "'.$mail.'"';
        $result = $monPdo->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {
            $data = $result->fetch();
            if ($pass == $data["mdp"]) {
                 $_SESSION['user'] = $mail;
                
                header('Location: index.php?uc=accueil');
            } else {
?>
                <div class="alert alert-danger py-3 w-25 m-auto text-center" role="alert"> Identifiant ou mot de passe incorect !
                </div>
            <?php
            }
        } 
    }
}

function createAccount()
{

    $monPdo = connexionPDO();
    $req = $monPdo->prepare("INSERT INTO compte (id, nom, prenom, rue, cp, ville, mail, mdp) VALUES (:id,:nom,:prnom,:rue,:cp,:ville,:mail,:mdp);");
    $req->bindParam('id', $id);
    $req->bindParam('nom', $nom);
    $req->bindParam('prenom', $prenom);
    $req->bindParam('rue', $rue);
    $req->bindParam('cp', $cp);
    $req->bindParam('ville', $ville);
    $req->bindParam('mail', $mail);
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
?>