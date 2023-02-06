<?php

require "Auteur.php";
require "Livres.php";


$livre1 = new Livres ("Harry potter",400,2002,15,"J.K. Rowling");
$Auteur1 = new Auteur ("J.K.","Rowling");
echo $livre1;
echo $Auteur1;
