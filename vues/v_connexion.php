<div>
   <div class="container d-flex justify-content-center border border-secondary">
      <form action="index.php?uc=gestionConnexion&action=verif" class="form" id="login" method="POST">
         <h1 class="text-center font-weight-bold">Connexion</h1>
         <div class="form__message form__message--error"></div>
         <div class="form__input-group">
            <input type="email" class="form__input" name="mail" autofocus placeholder="Email" required>
         </div>
         <div class="form__input-group">
            <input type="password" class="form__input" name="mdp" autofocus placeholder="Mot de passe" required>
         </div>
         <div class="form__text py-3">Pas de compte ?
            <a class="" href="index.php?uc=gestionConnexion&action=inscription" id="linkCreateAccount"><u>S'inscrire ici</u> !</a>
         </div>
         <button name="submit" class="btn btn-outline-success form-control" type="submit">Valider</button>
      </form>
   </div>
</div>