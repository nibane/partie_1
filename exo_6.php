<h1>Exercice 6<h/1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à
régler à partir de la quantité d'articles, son prix hors taxe et un taux
de TVA (exprimé en décimal. ex :20%->0.2)<p/>

<h2>Résultat</h2>

<?php
$article = 9.99;
$taxe = 0.2;
$quantité = 5;

$T_TVA = ($article*$quantité)*$taxe;

echo "la taxe des article cumulée est de $T_TVA";
?>