<div class="w-100 d-flex justify-content-center">
    <section class="d-flex flex-column align-items-center w-25 m-2 border border-secondary rounded">
        <div class=" m-2"> Détail du profil :</div>
        <?php
        echo '<div class="profil py-1"><u>Nom</u> : ' . $info['nom'] . '</div>';
        echo '<div class="profil py-1"><u>Prenom</u> : ' . $info['prenom'] . '</div>';
        echo '<div class="profil py-1"><u>Mail</u> : ' . $info['mail'] . '</div>';
        echo '<div class="profil py-1"><u>Téléphone</u> : ' . $info['tel'] . '</div>';
        echo '<div class="profil py-1"><u>Ville</u> : ' . $info['ville'] . '</div>';
        echo '<div class="profil py-1"><u>Adresse</u> : ' . $info['adresse'] . '</div>';
        echo '<div class="profil py-1"><u>Code Postal</u> : ' . $info['cp'] . '</div>';
        ?>
</div>
<form action="index.php?uc=gestionConnexion&action=seDeconnecter" class="form mx-auto fit" id="deconnexion" method="POST">
        <button name="submit" class="btn btn-outline-danger " type="submit">Déconnexion</button>
         </form>
</section>
