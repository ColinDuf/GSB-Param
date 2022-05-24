<?php

foreach ($lesCommandes as $uneCommande) {
    
    $idCommande = $uneCommande['idCommande'];
    $dateCommande = $uneCommande['date'];
    $etatCommande = $uneCommande['etat'];
    $montantCommande = $uneCommande['montant'];

    echo "<div><u> Commande numéro </u> : $idCommande </div>";
    echo "<div><u> Date </u> : $dateCommande </div>";
    echo "<div><u> Date </u> : $etatCommande </div>";
    echo "<div><u> Montant </u> : $montantCommande € </div>";
    echo '<hr>';
}

?>