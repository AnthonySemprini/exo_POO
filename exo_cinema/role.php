<?php

class Role{

    private string $_role;
    private array $_casting; 

        //*! construct**************

    public function __construct(string $_role)
        {
        $this->_role = $_role;
        $this->_casting = [];
        }

        //*!     getter****************
        public function get_role(){
            return  $this->_role;  
        }          
    
        public function set_role($role){
            $this->_role = $role;
        } 
        
        //*!        function***************


        public function ajouterCasting(Casting $casting){
            $this->_casting[] = $casting;
        }
        
        public function afficherCasting() {
            foreach($this->_casting as $casting) {
                echo "<strong>". $casting->get_acteur()."</strong>"." joue dans  ".$casting->get_film()."<br>";
            }
        }
    public function __toString()
    {
      return $this->_role;
    }

}