<?php

?>
<div class="form_title text-center ">Panel administrateur</div>

<form action="index.php?uc=gestionProduits&action=modifProduit" class="form w-75 mx-auto" id="modifProduit" method="POST">

<div class="col-lg-2 p-4">
                <select class="form-control" name="produit">
                        <option value="" disabled selected>Choisir un produit</option>
                        <?php

                        foreach ($lesProduits as $unProduit) {
                                echo '<option value="' . $unProduit['idProduit'] . '">' . $unProduit['nom'] . '  </option>';
                        }

                        ?>
                </select>
        </div>

        <div class="form__input-group">
            <input type="text" class="form__input" name="nom" autofocus placeholder="Modifier le nom" required>
         </div>

         <div class="form__input-group">
            <input type="text" class="form__input" name="description" autofocus placeholder="Modifier la description" required>
         </div>
                    
         <div class="">Modifier l'image</div>
         <div class="form__input-group">
		<input class="form-control" type="file" id="image" name="image">
	</div>

    <div class="col-lg-2 p-4">
                <select class="form-control" name="marque">
                        <option value="" disabled selected>Modifier la marque</option>
                        <?php

                        foreach ($lesMarques as $uneMarque) {
                                echo '<option value="' . $uneMarque['idMarque'] . '">' . $uneMarque['nom'] . '  </option>';
                        }

                        ?>
                </select>
        </div>

        <div class="col-lg-2 p-4">
                <select class="form-control" name="categorie">
                        <option value="" disabled selected>Modifier la catégorie</option>
                        <?php

                        foreach ($lesCategories as $uneCategorie) {
                                echo '<option value="' . $uneCategorie['idCategorie'] . '">' . $uneCategorie['acronyme']. ' ---- ' . $uneCategorie['libelle'] . '  </option>';
                        }

                        ?>
                </select>
        </div>

        <div class="form__input-group my-1">
		<label for="prix">Prix :</label>
		<input type="number" id="prix" name="prix" min="" value="0" max="">
	</div>

        <div class="form__input-group my-1">
		<label for="stock">Stock :</label>
		<input type="number" id="stock" name="stock" min="1" value="0" max="">
	</div>





















        <div class="col-lg-1">
                <button class="btn btn-success form-control " type="submit" value="valider" name="valider">Valider</button>
        </div>
	

	



</form>