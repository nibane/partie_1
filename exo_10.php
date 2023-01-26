<h1>Exercice 10<h/1>

<p> A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.
Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €</p>
<h2>Résultat</h2>

<?php
// $amount_to_paid = 100;
// $amount_paid = 200;
// $left_to_pay = $amount_paid - $amount_to_paid;
// $ten = 0;
// $five = 0;
// $two = 0;
// $one = 0;

// while ($left_to_pay > 0) {
//     if ($left_to_pay > 10){
//         $left_to_pay -= 10;
//         $ten += 1;
//     } elseif ($left_to_pay >= 5 && $left_to_pay <10) {
//         $left_to_pay -= 5;
//         $five += 1;
//     } elseif ($left_to_pay >= 2 && $left_to_pay <5){
//         $left_to_pay -= 2;
//         $two += 1;
//     }elseif ($left_to_pay >= 1 && $left_to_pay < 2) {
//         $left_to_pay -= 1;
//         $one += 1;
//     }

// }

// echo $ten."<br>";
// echo $five."<br>";
// echo $two."<br>";
// echo $one."<br>";


$amount_to_paid = 100;
$amount_paid = 154;
$resteARendre = $amount_paid - $amount_to_paid ;

echo "A rendre : " . $resteARendre ."€<br>";
$nbbillet10 = intdiv($resteARendre, 10);
echo "nb de billet de 10€ : ". $nbbillet10."<br>";
$resteARendre = $resteARendre - 10 * $nbbillet10;
echo "il reste maintenant à rendre : " . $resteARendre."€<br>";
$nbbillet5 = intdiv($resteARendre, 5);
echo "nb de billet de 5€ : ".$nbbillet5."<br>";
$resteARendre = $resteARendre - 5 * $nbbillet5;
echo "il reste maintenant à rendre : ".$resteARendre."€<br>";
$nbpiece2 = intdiv($resteARendre, 2);
echo "nb de piece de 2€ : ".$nbpiece2."<br>";
$resteARendre = $resteARendre - 2 * $nbpiece2;
echo "il reste maintenant à rendre : ".$resteARendre."€<br>";
$nbpiece1 = intdiv($resteARendre, 1);
echo "nb de piece de 1€ : ".$nbpiece1."<br>";
$resteARendre = $resteARendre - 1 * $nbpiece1;
echo "il reste maintenant à rendre : ".$resteARendre."€<br>";


$arrayOfBill = [10,5,2,1];

$amount_to_paid = 100;
$amount_paid = 154;
$resteARendre = $amount_paid - $amount_to_paid ;

echo "Solution en utilisant Foreach loop sur une tableau de Billets<br>";

foreach($arrayOfBill as $billet){
    echo "A rendre : " . $resteARendre ."€<br>";
    $nbBillet=intdiv($resteARendre, $billet);
    echo "nb de billet de :".  $nbBillet . " x ". $billet . "€ <br>";
    $resteARendre = $resteARendre - $billet * $nbBillet;
    echo "il reste maintenant à rendre : " . $resteARendre."€<br>";
}



?>