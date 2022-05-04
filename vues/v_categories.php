<form action="index.php?uc=voirProduits&action=voirProduits" method="POST">
<select name="categorie">
<?php

foreach( $lesCategories as $uneCategorie) 
{
	echo '<option value="'.$uneCategorie['id'].'">'.$uneCategorie['libelle'].' </option>';

} 

?>
</select>
        <button class ="btn btn-success" type="submit" value="Valider" name="valider">Valider</button>
        </form>