<?php

class Film{
   
    private string $_titre;
    private int $_anneeSortie;
    private int $_duree;
    private string $_realisateur;
    private string $_categorie;
    private string $_resume;


    public function __construct(string $_titre , string $_anneeSortie , string $_duree ,string $_realisateur , string $_categorie, string $_resume){

        
        $this->_titre = $_titre;
        $this->_anneeSortie = $_anneeSortie;
        $this->_duree = $_duree;
        $this->_realisateur = $_realisateur;
        $this->_categorie = $_categorie;
        $this->_resume = $_resume;
    }

public function getTitre(){
    return  $this->_titre;  
} 
public function setTitre(){
        $this->_titre;
}


public function getAnneeSortie(){
    return  $this->_anneeSortie;  
} 
public function setAnneeSortie(){
    $this->_anneeSortie;
}

public function getduree(){
    return  $this->_duree;  
} 
public function setduree(){
    $this->_duree;
}

public function getRealisateur(){
    return  $this->_realisateur;  
} 
public function setRealisateur(){
    $this->_realisateur;
}

public function getcategorie(){
    return  $this->_categorie;  
} 
public function setcategorie(){
    $this->_categorie;
}


public function getResume(){
    return  $this->_resume;  
} 
public function setResume(){
        $this->_resume;
}
}