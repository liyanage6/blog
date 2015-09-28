<?php

require_once 'Modele.php';

class Billet extends Modele {

    // Renvoie la liste des billets du blog
    public function getBillets() {
        $sql = 'SELECT id_billet, date, titre, contenu FROM billet ORDER BY id_billet desc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }

    // Renvoie les informations sur un billet
    public function getBillet($idBillet) {
        $sql = 'select id_billet, date, titre, contenu from billet  where id_billet=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() == 1)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
}