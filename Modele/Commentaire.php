<?php

require_once 'Modele.php';

class Commentaire extends Modele
{
    // Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'SELECT id_commentaire, date, auteur, contenu FROM commentaire where id_billet=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));

        return $commentaires;
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into commentaire(date, auteur, contenu, id_billet)' . ' values(?, ?, ?, ?)';
        $date = date(DATE_W3C);  // Récupère la date courante
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));
    }

}