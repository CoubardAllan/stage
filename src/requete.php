<?php
require 'src/connexion.php';
require 'src/articles.php';
class requete{
    private $connexion;
    public function __construct()
    {
        $this->connexion = new connexion;
    }
    public function selection($table){
        $tableau = [];
        foreach ($this->connexion->getConnexion()->query('SELECT libelle, prix FROM '.$table)as $row){
            $articles = new articles();
            $articles->setLibelle($row['libelle']);
            $articles->setPrix($row['prix']);
            $tableau[] = $articles;
        }
        return $tableau;
    }
    public function insertion($data){
        if ((isset($data['libelle']) || isset($data['prix'])) && (!empty($data['prix']) || !empty($data['libelle'])) ){
            $query = 'INSERT INTO articles(libelle, prix) VALUES (?,?)';
            $this->connexion->prepare($query)->execute([$data['libelle'],$data['prix']]);
        }
    }
}