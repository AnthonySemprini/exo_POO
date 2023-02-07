<?php

class Genre{

    private string $_action;
    private string $_aventure;
    private string $_horreur;
    private string $_commedie;

    public function __construct(string $_action,string $_aventure,string $_horreur,string $_commedie){

        $this->_action = $_action;
        $this->_aventure = $_aventure;
        $this->_horreur = $_horreur;
        $this->_commedie = $_commedie;
    }

             //*! getter  *******************

             public function get_action(){
                return  $this->_action;  
            } 
            public function get_aventure(){
                return  $this->_aventure;  
            } 
            public function get_horreur(){
                return  $this->_horreur;  
            } 
            public function get_commedie(){
                return  $this->_commedie;  
            }
            
                    //*!  setter  ******************
            
            public function set_action(){
                $this->_action;
            }
            public function set_aventure(){
                $this->_aventure;
            }
            public function set_horreur(){
                $this->_horreur;
            }
            
            public function set_commedie(){
                $this->_commedie;
            }

                   //*!  function  ************************
}