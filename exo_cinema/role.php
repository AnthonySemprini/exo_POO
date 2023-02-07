<?php

class Role{

    private Acteur $_acteur;
    private array $_role;

        //*! construct**************

    public function __construct(Acteur $_acteur)
    {
        $this->_acteur = $_acteur;
        $this->_role = [];
    }

        //*!     getter****************

        public function get_acteur(){
            return  $this->_acteur;  
        } 
        public function get_role(){
            return  $this->_role;  
        }          
        //*!  setter  ******************
                
        public function set_acteur(){
            $this->_acteur;
        }
        public function set_role(){
            $this->_role;
        } 
        
        //*!        function***************

        public function __toString()
        {
        $result ="<br>*****Role*****<br>". 
            "<br>Acteur : ".$this->_acteur.
            "<br>Role : ".$this->_role;   
        }

        function public afficherRoleActeur(){
            $result = "<br>role et acteur<br>";
            foreach ($this->)
        }
}