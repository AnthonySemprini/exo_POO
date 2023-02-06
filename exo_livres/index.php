<?php

// require "Auteur.php";
// require "Livres.php";

spl_autoload_register(function($class_name){
    require $class_name . ".php";
});

$Auteur1 = new Auteur ("J.K.","Rowling");
$Auteur2 = new Auteur ("Stephen","King");

$livre1 = new Livres ("Harry Potter 1",400,2002,15,$Auteur1);
$livre2 = new Livres ("Harry Potter 2" ,280,2004,15,$Auteur1);
$livre3 = new Livres ("Harry Potter 3" ,320,2006,15,$Auteur1);
$livre4 = new Livres ("Ca" ,415,2005,19,$Auteur2);
$livre5 = new Livres ("Simetierre" ,374,2003,22,$Auteur2);
$livre6 = new Livres ("Harry Potter 3" ,420,2007,25,$Auteur2);

echo $livre5;
echo $livre2;
