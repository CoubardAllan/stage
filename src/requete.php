<?php
require_once 'src/connexion.php';
require_once 'src/articles.php';
class requete{
    private $connexion;
    public function __construct()
    {
        $this->connexion = new connexion();
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
        require_once 'src/session.php';
        $message = new session();
        if ((isset($data['libelle']) || (isset($data['prix'])) && (!empty($data['libelle'])) || (!empty($data['prix'])) )){
            $requete = 'INSERT INTO articles( libelle, prix) VALUES (?,?)';
            $this->connexion->getConnexion()->prepare($requete)->execute([$data['libelle'],$data['prix']]);
            $message->message('ajout fait');

        }
    }
}