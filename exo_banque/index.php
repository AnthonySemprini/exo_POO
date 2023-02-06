<?php


// spl_autoload_register(function($class_name){
//     require $class_name . '.php';

 require "Titulaire.php";
 require "Compte.php";


$titulaire1 = new Titulaire("Balthazar", "Thazar", "Strasboury", "09/01/1991");
$titulaire2= new Titulaire ("MULLER","Marie","Molsheim","2000-06-12");
$titulaire3= new Titulaire ("LEGRAND","Pierre","Geudertheim","1995-03-02");
$titulaire4 = new Titulaire ("SEMPRINI" , "Anthony" , "Strasbourg" ,"1986-01-27");


$compte1 = new Compte("livret A",9999999, "€", $titulaire1);
$compte2 = new Compte("Compte courant",12, "€", $titulaire1);
$compte3 = new compte("compte courant",4500,"E",$titulaire2);
$compte4 = new compte("Livret A",2000,"€",$titulaire2);
$compte5 = new compte("Compte courant", 1500,"€",$titulaire3);
$compte6 = new compte("Livret A",160,"€",$titulaire3);
$compte7 = new compte("Compte courant",1400,"€",$titulaire4);
$compte8 = new compte("Livret A",1800,"€",$titulaire4);




 echo $titulaire1->getInfos();


 $compte1->virement(500,$compte2);
echo $compte1->getInfos();
echo $titulaire1->getInfos();
$compte1->virement(200,$compte5);
