<h1>Exercice 14<h/1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).Affichage(si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985:Age de la personne: 33 ans 4 mois 4 jours <p/>

<h2>Résultat</h2>

<?php

$date_naissance = 17-01-1985;
$date_actuel = 21-05-2018;
$diff = date_diff($date_naissance,$date_actuel);

?>