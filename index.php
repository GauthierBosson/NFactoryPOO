<?php
include_once("Vehicules.php");
include_once("Voiture.php");
include_once("Bidon.php");

Bidon::afficherMessageALaCon();

$voiture1 = new Voiture();

echo $voiture1->roues;

$voiture1->couleur = "bleue";
echo $voiture1->couleur;
$voiture1->couleur = "noire";

$voiture1->demarrer();

$voiture2 = new Voiture();
$voiture2->masse = 1000;

$energieC = $voiture2->calculerEnergieCinetique(28);
echo "La voiture a $energieC joules d'énergie cinetique </br>";
$voiture2->masse = 960;
$energieC = $voiture2->calculerEnergieCinetique(28);
echo "La voiture a $energieC joules d'énergie cinetique </br>";
