<?php

class Compte {
    
    private string $_libelle;
    private  float $_soldeInitial;
    private string $_devise;
    private  string $_titulaire;
    private float $_status;
        //construct
    
    public function __construct($_libelle , $_soldeInitial , $_devise , $_titulaire,$_status)
    {
        $this->_libelle = $_libelle;
        $this->_soldeInitial = $_soldeInitial;
        $this->_devise = $_devise;
        $this->_titulaire = $_titulaire;
        $this->_status = 0;
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
    public function getStatus(){
        return $this->_status;
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
    public function setStatus(){
        $this->_status;
    }
    public function crediter(float $crediter){
        $this->_soldeInitial += $crediter;
        echo "le compte de " . $this->_titulaire . $this->_libelle." :" . $this->_soldeInitial . "€<br>";
    }
    public function debiter(float $debiter){
        $this->_soldeInitial -= $debiter;
        echo "le compte de ". $this->_titulaire . $this->_libelle." :". $this->_soldeInitial . "€<br>";
    }

}

$cp1 = new Compte ("livretA" , 100 , "€" , "Anthony" , 0);

$cp1->crediter(200);
$cp1->debiter(30);
$cp1->crediter(4000);
$cp1->debiter(5500);