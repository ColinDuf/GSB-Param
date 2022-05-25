<?php
$idPoduit = $lesProduits[0]['idProduit'];
$updateId = $idPoduit + 1;
?>
<div class="form_title text-center ">Ajout produit</div>

<form action="index.php?uc=gestionProduits&action=AddProduit" class="form w-50 mx-auto" id="addProduit" method="POST">


	Ajout du produit n° <?= $updateId; ?>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Nom" name="nom" autofocus required>
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Description" name="desc">
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Prix" name="prix">
	</div>

	<div class="form__input-group">
		<input class="form-control" type="file" id="image" name="image">
	</div>
	<div class="row">
		<div class="col-lg-6 ">

			<select class="form-control" name="categorie">
				<option value="" disabled selected>Choisir une catégorie</option>
				<?php

				foreach ($lesCategories as $uneCategorie) {
					echo '<option value="' . $uneCategorie['idCategorie'] . '">' . $uneCategorie['libelle'] . '  </option>';
				}

				?>
			</select>
		</div>

		<div class="col-lg-6 ">
			<select class="form-control" name="marque">
				<option value="" disabled selected>Choisir une marque</option>
				<?php
				foreach ($lesMarques as $uneMarque) {
					echo '<option value="' . $uneMarque['idMarque'] . '">' . $uneMarque['nom'] . ' 	 </option>';
				}

				?>
			</select>
		</div>
	</div><br>
<!-- 	<div class="d-flex align-items-center">
		<div class="me-1 col-6 form__input-group p-0 m-0">
			<input type="text" class="form__input" placeholder="Volume" name="volume">
		</div>

		<select class="ms-1 col-6 form-select w-50" name="unite">
			<option value="" disabled selected>Choisir une unité</option>
			<?php

		/* 	foreach ($lesUnites as $uneUnite) {
				echo '<option value="' . $uneUnite['nom'] . '">' . $uneUnite['nom'] . '  </option>';
			} */

			?>
		</select>
	</div> -->
	<div class="form__input-group my-1">
		<label for="stock">Stock :</label>
		<input type="number" id="stock" name="stock" min="1" value="0" max="">
	</div>

	<div class="mx-auto fit">
		<button onclick="return confirm('Voulez-vous vraiment ajouter ce produit dans la boutique ?');" class="btn btn-outline-success" type="submit">Ajouter</button>
	</div>
</form>

<hr>

<?php

?>
<div class="form_title text-center ">Modifier Produit</div>

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