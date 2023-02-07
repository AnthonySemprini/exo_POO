<?php

class Realisateur{

    private string $_nom;
    private string $_prenom;
    private string $_genre;
    private DateTime $_dateNaissance;
    private array $_filmographie;

        //*! construct  *********************
   
    public function __construct(string $_nom , string $_prenom , string $_genre , $_dateNaissance){

        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_genre = $_genre;
        $this->_dateNaissance = new DateTime ($_dateNaissance);
        $this->_filmographie = [];
    }
    

            //*! getter  *******************

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
    public function get_filmographie(){
        return  $this->_filmographie;  
    } 
    
    
    
            //*!  setter  ******************
    
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
    public function set_filmographie(){
        $this->_filmographie;
    }
    
    
    
            //*!  function  ************************
    
    
    public function ageReel() { 
        $currentDate= new DateTime();
        $result = $this->_dateNaissance->diff($currentDate);
        return $result->format ('%Y ans');
    }

    public function ajouterFilm(Film $film){
        $this->_filmographie[] = $film;
    }

    function afficherFilmographie(){
        $result = "Filmographie : <br>";
        foreach ($this->_filmographie as $film){
            $result .=$film->get_titre() . "Sortie en : " . $film->get_anneeSortie() . "<br>"; 
        }
        return $result;
    }

}