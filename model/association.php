<?php
class Association {
    private $idAbonne;
    private $idOuvrage;

    public function __construct($idAbonne, $idOuvrage) {
        $this->idAbonne = $idAbonne;
        $this->idOuvrage = $idOuvrage;
    }
    public function getidAbonne() {
        return $this->idAbonne;
    }
    public function getidOuvrage() {
        return $this->idOuvrage;
    }
}
