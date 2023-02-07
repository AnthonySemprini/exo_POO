<?php

class Acteur{
    private string $_nom;
    private string $_prenom;
    private string $_genre;
    private datetime $_dateNaissance;
    private string $_role;


public function __construct(string $_nom , string $_prenom , string $_genre ,string $_dateNaissance , string $_role){

        
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_genre = $_genre;
    $this->_dateNaissance = new datetime ($_dateNaissance);
    $this->_role = $_role;
}

public function get_nom(){
    return  $this->_nom;  
} 
public function set_nom(){
    $this->_nom;
}

public function get_genre(){
    return  $this->_genre;  
} 
public function set_genre(){
    $this->_genre;
}

public function get_prenom(){
    return  $this->_prenom;  
} 
public function set_prenom(){
    $this->_prenom;
}

public function get_age(){
    return  $this->_dateNaissance;  
}
public function set_dateNaissance($newDateNaissance){
    $this->_dateNaissance = $newDateNaissance;
}

public function get_role(){
    return  $this->_role;  
} 
public function set_role(){
    $this->_role;
}

public function ageReel() { 
    $currentDate= new DateTime();
    $result = $this->_dateNaissance->diff($currentDate);
    return $result->format ('%Y ans');
}
    
}