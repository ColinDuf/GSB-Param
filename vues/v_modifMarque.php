<div class="form_title text-center m-5"><b>Panel administrateur : Modifier les marques</b></div>
<form action="index.php?uc=gestionProduits&action=Marque" class="form w-50 mx-auto" id="addMarque" method="POST">

	<div class="m-2"><u>Ajout d'une nouvelle marque</u></div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Nom de la marque" name="nom">
	</div>

	<div class="mx-auto fit py-4">
		<button class="btn btn-outline-success" type="submit" name="addValider" value="addValider">Ajouter</button>
	</div>
</form>

<form action="index.php?uc=gestionProduits&action=Marque" class="form w-50 mx-auto" id="suppMarque" method="POST">
	<div class="m-2"><u>Supprimer une catégorie</u></div>

	<div class="col-lg-4 p-4">
		<select class="form-control" name="marque">
			<option value="" disabled selected>Séléctonner une marque</option>
			<?php

			foreach ($lesMarques as $uneMarque) {
				echo '<option value="' . $uneMarque['idMarque'] . '">' . $uneMarque['nom'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="mx-auto fit py-4">
		<button class="btn btn-outline-danger" type="submit" name="suppValider" value="suppValider">Supprimer</button>
	</div>
</form>

<form action="index.php?uc=gestionProduits&action=Marque" class="form w-50 mx-auto" id="modifMarque" method="POST">
	<div class="m-2"><u> Modifier une marque</u></div>

	<div class="col-lg-4 p-4">
		<select class="form-control" name="marque">
			<option value="" disabled selected>Séléctonner une marque</option>
			<?php

			foreach ($lesMarques as $uneMarque) {
				echo '<option value="' . $uneMarque['idMarque'] . '">' . $uneMarque['nom'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Nom de la marque" name="nom">
	</div>

	<div class="mx-auto fit py-4">
		<button class="btn btn-outline-warning" type="submit" name="modifMarque" value="modifMarque">Modifier</button>
	</div>
</form>