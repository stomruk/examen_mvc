<?php
class Ouvrage {
    private $titre;
    private $auteur;

    public function __construct($titre, $auteur) {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }
    public function getAuteur() {
        return $this->auteur;
    }
    public function getTitre() {
        return $this->titre;
    }
}
