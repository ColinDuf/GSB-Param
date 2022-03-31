<html>
<body>
    <div class="  d-flex flex-column align-items-center w-25 border border-secondary rounded" id="container" style="text-align:center">
        <form action="index.php?uc=gestionConnexion&action=verif" method="POST">
            <div class="py-4">
            <h1>Connexion</h1>
            </div>
            <label class="py-2"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Entrer votre email" name="username" required>
            <br>
            <label class="py-2"><b>Mot de passe</b></label>
            <br>
            <input type="password" placeholder="Entrer mot de passe" name="pass" required>
            <div class="py-4">
        <button name="submit" class="btn btn-success ">Valider</button>
        <div>
        </form>
    </div>
</body>

</html>