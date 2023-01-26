<h1>Exercice 6<h/1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge:</p>

<h2>Résultat</h2>

<?php

use function PHPSTORM_META\type;

$enfant_age = "toto";

var_dump($enfant_age);
echo "<br>";
var_dump(gettype($enfant_age));

var_dump(gettype($enfant_age)=='integer');


if(gettype($enfant_age) == 'integer'){
    if($enfant_age < 6){
        echo "la catégorie de l'enfant n'est pas encore applicable";
    }elseif($enfant_age<7){
        echo 'votre enfant est un poussin';
    }elseif($enfant_age<9){
        echo 'votre enfant est un canard';

    }elseif($enfant_age<11){
        echo 'votre enfant est un pelican';

    }
    else {
        echo "att j'ai pas fini de bosser...";
    }
}else {
    echo "veuillez saisir un age valide";
}

// if(gettype($enfant_age)=="string") {
//     echo "saisie incorrecte";
// }elseif ($enfant_age <6 && gettype($enfant_age)!="string") {
//     echo "votre catégorie n'est pas pris en charge";
// } elseif ($enfant_age < 7 ) {
//     echo "votre catégorie est Poussin";
// }elseif ($enfant_age < 9 ) {
//     echo "votre catégorie est un Pupille";
// }elseif ($enfant_age < 12 ) {
//     echo "votre catégorie est Minime";
// }elseif ($enfant_age >=12 ) {
//    echo "votre catégorie est Cadet";

// }
// else {
//     echo "saisie incorrecte";
// }
?>