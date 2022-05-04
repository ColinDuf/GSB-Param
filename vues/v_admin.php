<div class="form_title text-center ">Panel administrateur</div>

<form action="index.php?uc=gestionProduits&action=AddProduit" class="form w-50 mx-auto" id="login" method="POST">

	Ajout nouveau produit :

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Description" name="desc" autofocus required>
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Prix" name="prix">
	</div>

	<div class="form__input-group">
	<input class="form-control" type="file" id="image" name="image">
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Categorie" name="idCat">
	</div>

	<button onclick="return confirm('Voulez-vous vraiment ajouter ce produit dans la boutique ?');" class="btn btn-outline-success form-control" type="submit">Ajouter</button>

</form>