<h1>Exercice 8<h/1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme:</p>

<h2>Résultat</h2>

<?php
echo "entrer un chiffre pour obtenir une table de multiplication de ce chiffre jusque 10.<br>";

$parameter = 8;
$start_nb = 0;
 
echo "table de 8:<br>";

while ($start_nb < 11 ) {
    $multiplication = $start_nb * $parameter;

    echo $start_nb." x ".$parameter." = ".$multiplication."<br>";
    // syntax pour incrémenter une variable de +1
    // $start_nb= $start_nb+1;
    // $start_nb+= 1;
    // $start_nb++
    
    $start_nb+=1;
}


?>