<?php

class Compte {
    
    private string $_libelle;
    private  float $_soldeInitial;
    private string $_devise;
    private  string $_titulaire;
    
    public function __construct($_libelle , $_soldeInitial , $_devise , $_titulaire)
    {
        $this->_libelle = $_libelle;
        $this->_soldeInitial = $_soldeInitial;
        $this->_devise = $_devise;
        $this->_titulaire = $_titulaire;
    }
	
    //getter

    public function getLibelle(){
        return  $this->_libelle;  
    } 
    public function getSoldeInitial(){
        return  $this->_soldeInitial;  
    } 
    public function getDevise(){
        return  $this->_devise;  
    } 
    public function getTitulaire(){
        return  $this->_titulaire;  
    }
    
        //setter

    public function setLibelle(){
        $this->_libelle;
    }
    public function setSoldeInitial(){
        $this->_soldeInitial;
    }
    public function setDevise(){
        $this->_devise;
    }
    public function setTitulaire(){
        $this->_titulaire;
    }
}