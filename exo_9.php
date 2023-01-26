<h1>Exercice 9<h/1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas,« non imposable »).</p>

<h2>Résultat</h2>

<?php
$gens_age = 32;
$gens_s = "gsdf";



if ($gens_s == "F"){
    if ($gens_age >= 18 && $gens_age <= 35) {
        $result = "La personne est imposable";
       
        }
    else {
        $result = "Non imposable";
        }
}elseif ($gens_s == "H"){
    if ($gens_age >= 20 ) {
        $result = "La personne est imposable";
        
    }else {
        $result = "Non imposable";
        
    }
}else 
    $result = "Vous êtes non binaire";

echo "age : ".$gens_age;
echo "<br>sexe : ".$gens_s."<br>" ;
echo $result;


?>