<?php

class Acteur{
    private string $_nom;
    private string $_prenom;
    private string $_genre;
    private DateTime $_dateNaissance;
    private array $_casting;

    //*!   construct***********

    public function __construct(string $_nom , string $_prenom , string $_genre ,string $_dateNaissance){

            
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_genre = $_genre;
        $this->_dateNaissance = new DateTime ($_dateNaissance);
        $this->_casting = [];
    }
            //*! getter************

    public function get_nom(){
        return  $this->_nom;  
    } 
    public function get_prenom(){
        return  $this->_prenom;  
    } 
    public function get_genre(){
        return  $this->_genre;  
    } 
    public function get_age(){
        return  $this->_dateNaissance;  
    }

            //*!  setter***********

    public function set_nom(){
        $this->_nom;
    }
    public function set_prenom(){
        $this->_prenom;
    }
    public function set_genre(){
        $this->_genre;
    }
    public function set_dateNaissance($newDateNaissance){
        $this->_dateNaissance = $newDateNaissance;
    }


            //*! function**************

    public function ageReel() { 
        $currentDate= new DateTime();
        $result = $this->_dateNaissance->diff($currentDate);
        return $result->format ('%Y ans');
    }

    public function ajouterCasting(Casting $casting){
        $this->_casting[] = $casting;
    }

    public function afficherCasting() {
        foreach($this->_casting as $casting) {
            echo "<i>".$casting->get_role()."</i>"." est l'un des personnage de ". "<strong>".$casting->get_film()."</strong>"."<br>";
        }
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }

    public function getInfos()
    {
    $result ="<br>*****Acteur*****<br>".
        "<br>Nom : ".$this->_nom.
        "<br>Prenom : ".$this->_prenom.
        "<br>Genre : ".$this->_genre.
        "<br>Age : ".$this->ageReel();  
    }
}