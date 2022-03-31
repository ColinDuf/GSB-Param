<html>
<body>
    <link rel="stylesheet" href="./modele/cssConnexion.css">
    <div class="container">
        <form action="index.php?uc=gestionConnexion&action=verif" class="form" id="login" method="POST">
            <h1 class="form_title">Connexion</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="email" class="form__input" name="mail" autofocus placeholder="Email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="mdp" autofocus placeholder="Mot de passe" required>
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Valider</button>
            <p class="form__text">
                <a class="form__link" href="index.php?uc=gestionConnexion&action=inscription" id="linkCreateAccount">Pas de compte ? Créer un compte !</a>
            </p>
        </form>
    </div>
    <script>scr = "./modele/main.js"</script>
</body>
</html>