<?php

class Genre{

    private string $_genre;
    private array $_films;
    
            //*!  construct***********

    public function __construct(string $_genre){

        $this->_genre = $_genre;
        $this->_films = [];
        
    }
             //*! getter  *******************

    public function get_genre(){
        return  $this->_genre;  
    } 
    public function get_films(){
        return  $this->_films;  
    }          
    //*!  setter  ******************
            
    public function set_genre(){
        $this->_genre;
    }
    public function set_films(){
        $this->_films;
    }
           

    //*!  function  ************************


    public function ajouterFilm(Film $film){
        $this->_films[] = $film;
    }

    function afficherFilmGenre(){
        $result = "<br>*****film de genre *****<br>";
        foreach ($this->_films as $film){
            $result .="<strong>".$film->get_titre()."</strong>" . " Date  sortie  " . $film->get_anneeSortie() . "<br>"; 
        }
        return $result;
    }

    public function __toString()
        {
        $result ="<br>*****Genre*****<br>". 
            "<br>Genre : ".$this->_genre.
            "<br>films : ".$this->_films;   
        }
    }