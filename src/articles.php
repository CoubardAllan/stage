<?php
class articles {
    private $libelle;
    private $prix;
        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($libelle)
        {
            $this->libelle = $libelle;
        }
        public function setPrix($prix)
        {
            $this->prix = $prix;
        }
        public function getPrix()
        {
            return $this->prix;
        }
}