<h1>Exercice4</p>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = 'Engage le jeu que je le gagne';

$phrase1 = str_replace(' ','', $phrase);

$phrase2 = strtolower($phrase1);

$reverse = strrev($phrase2);
;

// verification si la chaine de caractère est un palindrome
// utilisation d'une structure de conditionnel If elseif else
//  https://www.w3schools.com/php/php_if_else.asp
// https://www.php.net/manual/en/control-structures.if.php

if ($phrase2 == $reverse) {
    echo "\"". $phrase."\" est un palindrome";
} else {
    echo "\"". $phrase."\"  n\'est pas un palindrome";
}
    

?>