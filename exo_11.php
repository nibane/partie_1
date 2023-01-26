<h1>Exercice 11<h/1>

<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.Exemple: tableau ➔«Peugeot», «Renault», «BMW», «Mercedes»Affichage(attention à utiliser une liste à puces)Il y a 4 marques de voitures dans le tableau:PeugeotRenaultBMWMercedes<p/>

<h2>Résultat</h2>

<?php

$voiture = array("Peugeot","Renault","BWM","Mercedes");
// $voiture = ["Peugeot","Renault","BWM","Mercedes"]

echo "Il y a 4 marques de voitures dans le tableau : <br>";

foreach($voiture as $v){
    echo $v."<br>";
}
?>