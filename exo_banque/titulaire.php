<?php

class Titulaire {

    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private string $_ville;
    private string $_compte;




    public function __construct($_nom , $_prenom , $_dateNaissance , $_ville , $_compte){

        
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = $_dateNaissance;
        $this->_ville = $_ville;
        $this->_compte = $_compte;
    }
        //getter

    public function getNom(){
        return  $this->_nom;  
    } 
    public function getprenom(){
        return  $this->_prenom;  
    } 
    public function getDateNaissance(){
        return  $this->_dateNaissance;  
    } 
    public function getVille(){
        return  $this->_ville;  
    }
    public function getCompte(){
        return  $this->_compte;  
    }

        //setter

    public function setNom(){
        $this->_nom;
    }
    public function setprenom(){
        $this->_prenom;
    }
    public function setDateNaissance(){
        $this->_dateNaissance;
    }
    public function setVille(){
        $this->_ville;
    }
    public function setCompte(){
        $this->_compte;
    }
}