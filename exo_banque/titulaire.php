<?php

class Titulaire {

    private string $_nom;
    private string $_prenom;
    private datetime $_dateNaissance;
    private string $_ville;
    public array $comptes;


        //__construct

    public function __construct(string $_nom , string $_prenom , string $_ville ,string $_dateNaissance){

        
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = new datetime ($_dateNaissance);
        $this->_ville = $_ville;
        $this->comptes = [];
    }
        //getter

    public function getNom(){
        return  $this->_nom;  
    } 
    public function getprenom(){
        return  $this->_prenom;  
    } 
    public function getAge(){
        return  $this->_dateNaissance;  
    }
    public function getVille(){
        return  $this->_ville;  
    }
    public function getCompte(){
        return  $this->comptes;  
    }

        //setter

    public function setNom(){
        $this->_nom;
    }
    public function setprenom(){
        $this->_prenom;
    }
    public function setDateNaissance($newDateNaissance){
        $this->_dateNaissance = $newDateNaissance;
    }
    public function setVille(){
        $this->_ville;
    }
    public function setCompte(){
        $this->comptes;
    }

    function afficherComptes(){
        $result = "Tableau de Comptes";
        foreach ($this->comptes as $compte) {
            $result .= $compte;
        }

        return $result;


        //function

    public function ageReel() { //pour calcul l'age
        $currentDate= new DateTime();
        $result = $this->_dateNaissance->diff($currentDate);
        return $result->format ('%Y ans');
    }
    public function getInfos()
    {
        $result = "<br>infos titulaire du compte<br>".
                  "**********************<br>". 

                  "Nom et prénom : " . $this->_nom ." ".$this->_prenom . "<br>".

                  "Ville ou il habite :".$this->_ville."<br>".

                 "Age : " . $this->ageReel(). "<br>".

                  "Ensemble des comptes : " . $this->afficherComptes() . "<br>";
        return $result;
    }

    public function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }
    
}


// $tit1 = new Titulaire ("SEMPRINI" , "Anthony" , "Strasbourg" ,"1986-01-27","livret A");
// $Thi2 = new Titulaire ("LEGRAND","Pierre","Geudertheim","1995-03-02","P.E.L.");
// $tit3 = new Titulaire ("MULLER","Marie","Molsheim","2000-06-12","Compte courant");

// echo$tit1->getInfos();