<?php


class Voiture extends Vehicules
{
    public $roues = 4;
    public $marque;

    public function demarrer() {
        echo "Je démarre";
    }

    public function afficherCouleur() {
        echo $this->couleur;
    }

    public function calculerEnergieCinetique($v) {
        return 0.5 * $this->masse * ($v ** 2);
    }
}