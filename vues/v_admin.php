<form action="index.php?uc=voirProduits&action=voirCategories" method="POST">
<select>
<?php

foreach( $lesCategories as $uneCategorie) 
{
	echo '<option value="'.$uneCategorie['id'].'">'.$uneCategorie['libelle'].' </option>';
	$idCategorie = $uneCategorie['id'];
	$libCategorie = $uneCategorie['libelle'];
} echo $libCategorie ?></a>
?>
</select>
        <button class ="btn btn-success" type="submit" value="Valider" name="valider">Valider</button>
        </form>