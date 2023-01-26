<h1>Exercice 12<h/1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENGAffichage:Salut MickaëlHola VirgileHello Marie-Claire<p/>

<h2>Résultat</h2>

<?php

$tab=["Mickaël"=>"FRA","Virgile"=>"ESP","Marie-Claire" =>"ENG"];
// ATTENTION KSORT() N'AIME PEUT ETRE PAS LES VARIABLES AVEC DES CHIFFRES GENRE p_1 ...obscure
$bat = ["FRA" => "Salut" , "ESP" => "Hola" , "ENG" => "Hello"];

function fd ($arg1,$arg2){
    foreach($arg1 as $key => $value ){
        foreach($arg2 as $key2 => $value2){
            if($value == $key2){
                echo $value2 ." ". $key . "<br>";
            }
        }
    }
}
fd($tab,$bat);
echo "<br>";
ksort($tab);
fd($tab,$bat);


?>
