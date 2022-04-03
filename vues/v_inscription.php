<html>
<body>
<link rel="stylesheet" href="./modele/cssConnexion.css">
<div class="container justify-content-center">
        <form action="index.php?uc=gestionConnexion&action=verif" class="form" id="login" method="POST">
            <h1 class="form_title justify-content-center">Inscription</h1>
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Nom" name="nom" autofocus required>
            </div>

            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Prenom" name="prenom" required>
            </div>
            
            <div class="form__input-group">
                <input type="email" class="form__input" placeholder="Email" name="email" required>
            </div>

            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Ville" name="ville" required>
            </div>
            
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Code Postal" name="cp" required>
            </div>
            
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Rue" name="rue" required>
            </div>
            
            <div class="form__input-group">
                <input type="password" class="form__input" placeholder="Mot de passe" name="pass" required>
            </div>
            
            <div class="form__input-group">
                <input type="password" class="form__input" placeholder="Mot de passe" name="pass2" required>
            </div>
            <a class="form__text">
                <a class="form__link" href="index.php?uc=gestionConnexion&action=seConnecter" >Déja inscrit ! Connecté vous ici !</a>
                </a>

            <button class="form__button" type="submit">Valider</button>

            
        </form>
    </div>
    </div>
</body>

</html>