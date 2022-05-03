<html>
<body>
<link rel="stylesheet" href="./modele/cssConnexion.css">
<div class="container justify-content-center">
        <form action="index.php?uc=gestionConnexion&action=verifInscription" class="form" id="login" method="POST">
            <h1 class="form_title text-center">Inscription</h1>
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Nom" name="nom" autofocus required>
            </div>
 
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Prénom" name="prenom" required>
            </div>
           
            <div class="form__input-group">
                <input type="email" class="form__input" placeholder="Email" name="mail" required>
            </div>
 
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Ville" name="ville" required>
            </div>
           
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Code postal" name="cp" required>
            </div>
           
            <div class="form__input-group">
                <input type="text" class="form__input" placeholder="Rue" name="rue" required>
            </div>
           
            <div class="form__input-group">
                <input type="password" class="form__input" placeholder="Mot de passe" name="pass" required>
            </div>
           
            <div class="form__input-group">
                <input type="password" class="form__input" placeholder="Confirmation mot de passe" name="pass2" required>
            </div>
            <a class="form__text">
                <a class="form__link" href="index.php?uc=gestionConnexion&action=seConnecter" >Déjà inscrit ! Connectez vous ici !</a>
                </a>
 
            <button class="btn btn-outline-success form-control" type="submit">Valider</button>
 
           
        </form>
    </div>
    </div>
</body>
 
</html>
