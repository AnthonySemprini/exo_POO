<?php


// spl_autoload_register(function($class_name){
//     require $class_name . '.php';

 require "Titulaire.php";
 require "Compte.php";


$titulaire1 = new Titulaire("Balthazar", "Thazar", "Strasboury", "09/01/1991");
$titulaire2= new Titulaire ("MULLER","Marie","Molsheim","2000-06-12");
$Titulaire3= new Titulaire ("LEGRAND","Pierre","Geudertheim","1995-03-02");
$titulaire4 = new Titulaire ("SEMPRINI" , "Anthony" , "Strasbourg" ,"1986-01-27");


$compte1 = new Compte("Balthazar Banque",9999999, "€", $titulaire1);
$compte2 = new Compte("Banque des Dictateur",12, "€", $titulaire1);



echo $titulaire1->getInfos();