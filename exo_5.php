<h1>Exercice4</p>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention , la valeur générée devra etre arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php
//le montant en franc a convertir, valeur à modifier pour changer la quantité d'argent à convertir
$montant_francs = 100;


$coeff_conversion =(100/15.24);


$montant_euro = round($montant_francs/$coeff_conversion,2);

echo $montant_euro." euro est égal a ".$montant_francs." francs";
 
?>