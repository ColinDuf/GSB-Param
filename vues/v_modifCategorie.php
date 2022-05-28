<div class="form_title text-center m-5"><b>Panel administrateur : Modifier les catégories</b></div>
<form action="index.php?uc=gestionProduits&action=Categorie" class="form w-50 mx-auto" id="addCategorie" method="POST">

	<div class="m-2"><u>Ajout d'une nouvelle catégorie</u></div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Acronyme de la catégorie" name="acronyme">
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Nom de la catégorie" name="libelle">
	</div>

	<div class="mx-auto fit py-4">
		<button class="btn btn-outline-success" type="submit" name="addValider" value="addValider">Ajouter</button>
	</div>
</form>

<form action="index.php?uc=gestionProduits&action=Categorie" class="form w-50 mx-auto" id="addCategorie" method="POST">
	<div class="m-2"><u>Supprimer une catégorie</u></div>

	<div class="col-lg-4 p-4">
		<select class="form-control" name="categorie">
			<option value="" disabled selected>Séléctonner une catégorie</option>
			<?php

			foreach ($lesCategories as $uneCategorie) {
				echo '<option value="' . $uneCategorie['idCategorie'] . '">' . $uneCategorie['acronyme'] . ' ---- ' . $uneCategorie['libelle'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="mx-auto fit py-4">
		<button class="btn btn-outline-danger" type="submit" name="suppValider" value="suppValider">Supprimer</button>
	</div>
</form>

<form action="index.php?uc=gestionProduits&action=Categorie" class="form w-50 mx-auto" id="addCategorie" method="POST">
	<div class="m-2"><u> Modifier une catégorie</u></div>

	<div class="col-lg-4 p-4">
		<select class="form-control" name="categorie">
			<option value="" disabled selected>Séléctonner une catégorie</option>
			<?php

			foreach ($lesCategories as $uneCategorie) {
				echo '<option value="' . $uneCategorie['idCategorie'] . '">' . $uneCategorie['acronyme'] . ' ---- ' . $uneCategorie['libelle'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Acronyme de la catégorie" name="acronyme">
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Nom de la catégorie" name="libelle">
	</div>

	<div class="mx-auto fit py-4">
		<button class="btn btn-outline-warning" type="submit" name="modifCategorie" value="modifCategorie">Modifier</button>
	</div>
</form>