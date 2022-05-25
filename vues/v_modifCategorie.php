
<div class="form_title text-center ">Panel administrateur</div>

<form action="index.php?uc=gestionProduits&action=addCategorie" class="form w-50 mx-auto" id="addCategorie" method="POST">


<div class="">Ajout d'une nouvelle catégorie</div>

<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Acronyme de la catégorie" name="acronyme" autofocus required>
	</div>

        <div class="form__input-group">
		<input type="text" class="form__input" placeholder="Nom de la catégorie" name="libelle" >
	</div>

	<div class="mx-auto fit">
		<button class="btn btn-outline-success" type="submit">Ajouter</button>
	</div>


    </form>














<div class="">Supprimer une catégorie</div>

<select class="form-control" name="categorie">
				<option value="" disabled selected>Choisir une catégorie</option>
				<?php

				foreach ($lesCategories as $uneCategorie) {
					echo '<option value="' . $uneCategorie['idCategorie'] . '">' . $uneCategorie['libelle'] . '  </option>';
				}

				?>
			</select>

	<div class="mx-auto fit">
		<button class="btn btn-outline-success" type="submit">Supprimer</button>
	</div>


    </form>