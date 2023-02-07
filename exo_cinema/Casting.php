<?php

class Casting{

    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;
    private array $_casting;

        //*!   construct************

    public function __construct(Film $_film,Acteur $_acteur,Role $_role)
    {
        $this->_film = $_film;
        $this->_acteur = $_acteur;
        $this->_role = $_role;
        $this->_casting = [];
        $this->_film->ajouterCasting($this);$this->_acteur->ajouterCasting($this);$this->_role->ajouterCasting($this);
    }

        //*!    getter****************

    public function get_film(){
        return  $this->_film;  
    } 
    public function get_acteur(){
        return  $this->_acteur;  
    } 
    public function get_role(){
        return  $this->_role;  
    } 

        //*!    setter*******************

    public function set_film(){
        $this->_film;
    }
    public function set_acteur(){
        $this->_acteur;
    }
    public function set_role(){
        $this->_role;
    }

    //*!    function*********************

    public function __toString()
    {
    $result ="<br>*****Realisateur*****<br>". 
        "<br>Film : ".$this->_film.
        "<br>Acteur : ".$this->_acteur.
        "<br>Role : ".$this->_role;   
    }
}