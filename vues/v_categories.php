<form action="index.php?uc=voirProduits&action=voirProduits" method="POST">

        <div class="col-lg-2">
                <select class="form-control" name="categorie">
                        <option value="" disabled selected>Choisir une catégorie</option>
                        <?php

                        foreach ($lesCategories as $uneCategorie) {
                                echo '<option value="' . $uneCategorie['idCategorie'] . '">' . $uneCategorie['libelle'] . '  </option>';
                        }

                        ?>
                </select>
        </div>
        <div class="col-lg-1">
                <button class="btn btn-success form-control" type="submit" value="Valider" name="valider">Valider</button>
        </div>
        <hr>
</form>