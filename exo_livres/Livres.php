<?php

class Livres {

    private string $_titre;
    private int $_nbPage;
    private int $_dateParution;
    private float $_prix;
    private Auteur $_auteur;

    //construct

    public function __construct(string $_titre , int $_nbPage , int $_dateParution , float $_prix,Auteur $_auteur)
    {
        $this->_titre = $_titre;
        $this->_nbPage = $_nbPage;
        $this->_dateParution = $_dateParution;
        $this->_prix = $_prix;
        $this->_auteur = $_auteur;
    }

    //*!          getter 


    public function get_titre(){
        return $this->_titre;
    }
    public function get_nbPage(){
        return $this->_nbPage;
    }
    public function get_dateParution(){
        return $this->_dateParution;
    }
    public function get_prix(){
        return $this->_prix;
    }
    public function get_auteur(){
        return $this->_auteur;
    }
    
    //*!          setter


    public function set_titre(){
        $this->_titre;
    }
    public function set_nbPage(){
        $this->_nbPage;
    }
    public function set_dateParution(){
        $this->_dateParution;
    }
    public function set_prix(){
        $this->_prix;
    }
    public function set_auteur(){
        $this->_auteur;
    }

    //*!            function

    public function __toString()
    {
      $result ="<br>*****Livre*****<br>" . "Le nom du livre : ". $this->_titre ."<br>".
      "Le nombre de pages : " . $this->_nbPage ."<br>".  
      "L'année de parution : ". $this->_dateParution ."<br>".  
      "Prix :". $this->_prix ."<br>". 
       "Auteur :". $this->_auteur ."<br>";
       return $result;
    }
    
}

