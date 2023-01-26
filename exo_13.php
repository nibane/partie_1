<h1>Exercice 13<h/1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.Affichage:Les notes obtenues par l'élève sont: 10 12 8 19 3 16 11 13 9Sa moyenne générale est donc de: 11.22<p/>

<h2>Résultat</h2>

<?php

$tab = [10,12,8,19,3,16,11,13,9];

//Voire erreur avec count($array) 

$average = array_sum($tab) / count($tab);



echo (round($average,2));

?>
