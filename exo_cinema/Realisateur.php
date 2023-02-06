<?php

class Realisateur{

    private string $_nom;
    private string $_prenom;
    private string $_genre;
    private datetime $_dateNaissance;
    private string $_filmeRealise;

    public function __construct(string $_nom , string $_prenom , string $_genre ,string $_dateNaissance , string $_filmeRealise){

        
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_genre = $_genre;
        $this->_dateNaissance = new datetime ($_dateNaissance);
        $this->_filmeRealise = $_filmeRealise;
    }
    
    public function getNom(){
        return  $this->_nom;  
    } 
    public function setNom(){
        $this->_nom;
    }
    
    public function getGenre(){
        return  $this->_genre;  
    } 
    public function setGenre(){
        $this->_genre;
    }
    
    public function getprenom(){
        return  $this->_prenom;  
    } 
    public function setprenom(){
        $this->_prenom;
    }
    
    public function getAge(){
        return  $this->_dateNaissance;  
    }
    public function setDateNaissance($newDateNaissance){
        $this->_dateNaissance = $newDateNaissance;
    }
    
    public function get_filmeRealise(){
        return  $this->_filmeRealise;  
    } 
    public function set_filmeRealise(){
        $this->_filmeRealise;
    }
    
    public function ageReel() { 
        $currentDate= new DateTime();
        $result = $this->_dateNaissance->diff($currentDate);
        return $result->format ('%Y ans');
    }

}