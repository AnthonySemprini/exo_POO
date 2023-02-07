<?php

class Film{
   
    private string $_titre;
    private int $_anneeSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_genre;
    private string $_resume;

        //*! __construct

    public function __construct(string $_titre , string $_anneeSortie , string $_duree ,Realisateur $_realisateur , string $_genre, string $_resume ){

        
        $this->_titre = $_titre;
        $this->_anneeSortie = $_anneeSortie;
        $this->_duree = $_duree;
        $this->_realisateur = $_realisateur;
        $this->_genre = $_genre;
        $this->_resume = $_resume;
        $this->_realisateur->ajouterFilm($this);
    }


        //*!    getter

public function get_titre(){
    return  $this->_titre;  
} 
public function get_anneeSortie(){
    return  $this->_anneeSortie;  
} 
public function get_duree(){
    return  $this->_duree;  
} 
public function get_realisateur(){
    return  $this->_realisateur;  
} 
public function get_genre(){
    return  $this->_genre;  
} 
public function get_resume(){
    return  $this->_resume;  
} 

        //*!    setter

public function set_titre(){
    $this->_titre;
}
public function set_anneeSortie(){
    $this->_anneeSortie;
}
public function set_duree(){
    $this->_duree;
}
public function set_realisateur(){
    $this->_realisateur;
}
public function set_genre(){
    $this->_genre;
}
public function set_resume(){
    $this->_resume;
}



        //*! toString

public function __toString()
{
    $result ="<br>*****Film*****<br>"."Film : ". $this->_titre . "<br>" . "Sortie en : " . 
    $this->_anneeSortie . "<br>" . $this->_duree . "min"
. "Realisé par " . $this->_realisateur ."<br>". "genre : " . $this->_genre . "<br>";
    return $result;
}




}