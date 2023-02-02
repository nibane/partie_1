<h1>Exercice 15<h/1>

<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.$p1 = new Personne("DUPONT","Michel", "1980-02-19");$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");Affichage:Michel DUPONT a ... ansAlice DUCHEMIN a ... ans<p/>

<h2>Résultat</h2>

<?php

class personne{
    public $name;
    public $prenom;
    public $naissance;
    
    //propriété_______________________________
    //méthode_________________________________
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

    
}

?>