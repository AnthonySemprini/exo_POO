<?php

class Role{

    private Acteur $_acteur;
    private array $_roles;

        //*! construct**************

    public function __construct(Acteur $_acteur)
    {
        $this->_acteur = $_acteur;
        $this->_roles = [];
    }

        //*!     getter****************

        public function get_acteur(){
            return  $this->_acteur;  
        } 
        public function get_roles(){
            return  $this->_roles;  
        }          
        //*!  setter  ******************
                
        public function set_acteur(){
            $this->_acteur;
        }
        public function set_roles(){
            $this->_roles;
        } 
        
        //*!        function***************

        public function __toString()
        {
        $result ="<br>*****Role*****<br>". 
            "<br>Acteur : ".$this->_acteur.
            "<br>Role : ".$this->_roles;   
        }

        function public afficherRoleActeur(){
            $result = "<br>role et acteur<br>";
            foreach ($this->_roles as $role){
                $result
            }
        }
}