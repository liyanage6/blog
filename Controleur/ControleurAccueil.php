<?php


require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $billet;
    private $newBillet;

    public function __construct() {
        $this->billet = new Billet();
        $this->newBillet = new Billet();
    }

    // Affiche la liste de tous les billets du blog
    public function accueil() {
        $billets = $this->billet->getBillets();
        $vue = new Vue("Accueil");
        $vue->generer(array('billets' => $billets));
    }

    public function newBillet($titre, $contenu){
        $this->newBillet->ajoutBillet($titre, $contenu);
        $this->accueil();
    }
}