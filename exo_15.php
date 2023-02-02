<h1>Exercice 15<h/1>

<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.$p1 = new Personne("DUPONT","Michel", "1980-02-19");$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");Affichage:Michel DUPONT a ... ansAlice DUCHEMIN a ... ans<p/>

<h2>Résultat</h2>

<?php

class Personne{
    public $name;
    public $prenom;
    private $naissance;

    
    //propriété_______________________________
    //méthode_________________________________

    function __construct($name, $prenom, $naissance) {
        $this->name = $name;
        $this->prenom = $prenom;
        $this->naissance = $naissance;
        
      }

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
//____________________________________________
    
    function set_prenom($prenom){
        $this->prenom = $prenom;
    }
    function get_prenom(){
        return $this->prenom;
    }
//____________________________________________

    
    function set_naissance($naissance){
        $this->naissance = $naissance;
    }
    function get_naissance(){
        return $this->naissance;
    }

    function __toString() {
        return $this->name . " " . $this->prenom;
    }
    
}

$p1 = new personne('DUPONT','Michel','1980-02-19');
$p2 = new personne('DUCHEMIN','Alice','1985-01-17');

// $p1 = new Personne();
// $p1->set_name('DUPONT');
// $p1->set_prenom('Michel');
// $p1->set_naissance('1980-02-19');

// $p2 = new Personne();
// $p2->set_name('DUCHEMIN');
// $p2->set_prenom('Alice');
// $p2->set_naissance('1985-01-17');

echo $p1->get_name().' ';
echo $p1->get_prenom().' ';
echo $p1->get_naissance().'<br>';

echo $p2->get_name().' ';
echo $p2->get_prenom().' ';
echo $p2->get_naissance().'<br>';


echo $p1 . " est né le  : " . $p1->get_naissance().'<br>';
echo $p2;

?>