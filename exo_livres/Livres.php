<?php

class Livres {

    public string $titre;
    private int $_nbPage;
    public int $dateParution;
    private float $_prix;
    public Auteur $_auteur;

    //construct

    public function __construct(string $titre , int $_nbPage , int $dateParution , float $_prix,Auteur $_auteur)
    {
        $this->titre = $titre;
        $this->_nbPage = $_nbPage;
        $this->dateParution = $dateParution;
        $this->_prix = $_prix;
        $this->_auteur = $_auteur;

        //a la création d'un livre, on ajoute le livre dans la bibliographie de l'auteur
        $_auteur->bibliographie[] = $this;
    }

    //*!          getter 


    public function gettitre(){
        return $this->titre;
    }
    public function get_nbPage(){
        return $this->_nbPage;
    }
    public function get_dateParution(){
        return $this->dateParution;
    }
    public function get_prix(){
        return $this->_prix;
    }
    public function get_auteur(){
        return $this->_auteur;
    }
    
    //*!          setter


    public function settitre(){
        $this->titre;
    }
    public function set_nbPage(){
        $this->_nbPage;
    }
    public function set_dateParution(){
        $this->dateParution;
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
      $result ="<br>*****Livre*****<br>" . "Le nom du livre : ". $this->titre ."<br>".
      "Le nombre de pages : " . $this->_nbPage ."<br>".  
      "L'année de parution : ". $this->dateParution ."<br>".  
      "Prix :". $this->_prix ."<br>". 
       $this->_auteur ."<br>";
       return $result;
    }
    
}

