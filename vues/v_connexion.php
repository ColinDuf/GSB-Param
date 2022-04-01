<html>
<body>
    <link rel="stylesheet" href="./modele/cssConnexion.css">
    <div class=" container d-flex justify-content-center ">
        <form action="index.php?uc=gestionConnexion&action=verif" class="form" id="login" method="POST">
            <h1 class="form_title d-flex justify-content-center ">Connexion</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="email" class="form__input" name="mail" autofocus placeholder="Email" required>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="mdp" autofocus placeholder="Mot de passe" required>
            </div>
            <div class="form__text py-3">
                <a class="p-4 form__link" href="index.php?uc=gestionConnexion&action=inscription" id="linkCreateAccount"><u>Pas de compte ? S'inscrire ici</u> !</a>
            </div>
            <button name="submit" class="form__button" type="submit">Valider</button>
        </form>
    </div>
    <script>
        scr = "./modele/main.js"
    </script>
</body>
</html>