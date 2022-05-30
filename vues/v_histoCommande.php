<?php

foreach ($lesCommandes as $uneCommande) {
    
    $idCommande = $uneCommande['idCommande'];
    $dateCommande = $uneCommande['date'];
    $etatCommande = $uneCommande['etat'];
    $montantCommande = $uneCommande['montant'];

    echo "<div><u> Commande numéro </u> : $idCommande </div>";
    echo "<div><u> Date </u> : $dateCommande </div>";
    echo "<div><u> Statut commande </u> : $etatCommande </div>";
    echo "<div><u> Montant </u> : $montantCommande € </div>";
    echo '<hr>';
}

?>



<form action="index.php?uc=gestionProduits&action=Commande" class="form w-50 mx-auto" id="modifCommande" method="POST">
	<div class="m-2"><u>Modifier le statut de la commande</u></div>

<div class="col-lg-4 p-4">
		<select class="form-control" name="idCommande">
			<option value="" disabled selected>Séléctionner une commande</option>
			<?php

			foreach ($lesCommandes as $uneCommande) {
				echo '<option value="' . $uneCommande['idCommande'] . '">Commande n°' . $uneCommande['idCommande'] . ' le ' . $uneCommande['date'] . '  </option>';
			}

			?>
		</select>
	</div>

	<div class="form__input-group">
		<input type="text" class="form__input" placeholder="Etat de la commande" name="etatCommande">
	</div>

    <div class="mx-auto fit py-4">
		<button class="btn btn-outline-success" type="submit" name="modifCommande" value="modifCommande">Modifier</button>
	</div>
</form>