<?php

class Auteur {

    private string $_nom;
    private string $_prenom;
    public array $bibliographie;
   


public function __construct(string $_nom , string $_prenom )
    {
        $this->_nom=$_nom;
        $this->_prenom=$_prenom;
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

    // function bibliographie(){
    //     $result = "Tableau livre";
    //     foreach ($this->
    //     return $result;
    }

    public function __toString(){
        $result = "<br>*****Auteur*****<br>" . "Nom : ". $this->_nom . "<br>". 
        "Prenom : " . $this->_prenom ."<br>";
        return $result;
    }
    
}    