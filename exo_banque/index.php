<?php

require "Titulaire.php";
require "Compte.php";


$titulaire1 = new Titulaire("Balthazar", "Thazar", "Strasboury", "09/01/1991");

$compte1 = new Compte("Balthazar Banque",9999999, "€", $titulaire1);


$titulaire1->getInfos();

