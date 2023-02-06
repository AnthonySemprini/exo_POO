<?php

class Auteur {

    private string $_nom;
    private string $_prenom;
    public array $bibliographie;
   


public function __construct(string $_nom , string $_prenom )
    {
        $this->_nom=$_nom;
        $this->_prenom=$_prenom;

        // instentiation d'un tableau de libre pour un auteur, vide par défaut
        $this->bibliographie = [];
       
    }

    //*!          getter 


    public function get_nom(){
        return $this->_nom;
    }
    public function get_prenom(){
        return $this->_prenom;
    }
   
    
    //*!          setter


    public function set_nom(){
        $this->_nom;
    }
    public function set_prenom(){
        $this->_prenom;
    }

    //*!           function

    // bibliographie est un tableau d'Objet de class Livres, il faut faire une boucle Foreach pour accéder a chacun des livres écrit par l'auteur et y récupérer les informations qui nous interresse
        function afficherBibliographie(){
        $result = "Bibliographie : <br>";
    // on récupère dans une variable temporaire $livre, une a une, les différent objet livre de Classe Livres donc ses propriétés et méthodes sont accessible ici.
        foreach ($this->bibliographie as $livre) {
            $result .= $livre->titre . " parru en :" . $livre->dateParution. "<br>";
        }
        return $result;
    }

    public function __toString(){
        $result = "<br>*****Auteur*****<br>" . "Nom : ". $this->_nom . "<br>". 
        "Prenom : " . $this->_prenom . "<br>";
        return $result;
    }
    
}    