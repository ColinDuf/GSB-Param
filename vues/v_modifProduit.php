<div class="form_title text-center ">Ajout produit</div>

<form action="index.php?uc=gestionProduits&action=Produit" class="form w-50 mx-auto" id="addProduit" method="POST">

	Ajout du produit n° <?= $updateId; ?>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Nom" name="nom" autofocus required>
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Description" name="description">
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

	<div class="form__input-group my-1">
		<label for="stock">Stock :</label>
		<input type="number" id="stock" name="stock" min="1" value="0" max="">
	</div>

	<div class="mx-auto fit">
		<button class="btn btn-outline-success" type="submit" name="addValider" value="addValider">Ajouter</button>
	</div>
</form>

<form action="index.php?uc=gestionProduits&action=Produit" class="form w-50 mx-auto" id="suppProduit" method="POST">
	<div class="m-2"><u>Supprimer un produit</u></div>

	<div class="col-lg-4 p-4">
		<select class="form-control" name="produit">
			<option value="" disabled selected>Séléctonner un produit</option>
			<?php

			foreach ($lesProduits as $unProduit) {
				echo '<option value="' . $unProduit['idProduit'] . '">' . $unProduit['nom'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="mx-auto fit py-4">
		<button class="btn btn-outline-danger" type="submit" name="suppValider" value="suppValider">Supprimer</button>
	</div>
</form>

<div class="form_title text-center ">Modifier Produit</div>

<form action="index.php?uc=gestionProduits&action=Produit" class="form w-75 mx-auto" id="modifProduit" method="POST">

	<div class="col-lg-4 p-4">
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

	<div class="col-lg-4 p-4">
		<select class="form-control" name="marque">
			<option value="" disabled selected>Modifier la marque</option>
			<?php

			foreach ($lesMarques as $uneMarque) {
				echo '<option value="' . $uneMarque['idMarque'] . '">' . $uneMarque['nom'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="col-lg-4 p-4">
		<select class="form-control" name="categorie">
			<option value="" disabled selected>Modifier la catégorie</option>
			<?php

			foreach ($lesCategories as $uneCategorie) {
				echo '<option value="' . $uneCategorie['idCategorie'] . '">' . $uneCategorie['acronyme'] . ' ---- ' . $uneCategorie['libelle'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Prix" name="prix">
	</div>

	<div class="form__input-group my-1">
		<label for="stock">Stock :</label>
		<input type="number" id="stock" name="stock" min="1" value="0" max="">
	</div>

	<div class="col-lg-1">
		<button class="btn btn-outline-warning " type="submit" value="modifValider" name="modifValider">Modifier</button>
	</div>

</form>