<?php
require_once 'src/connexion.php';
require_once 'src/articles.php';
class requete{
    private $connexion;
    private $session;
    public function __construct()
    {
        $this->connexion = connexion::getConnexion();

    }
    public function selection($table){
        $tableau = [];
        foreach ($this->connexion->query('SELECT libelle, prix FROM '.$table)as $row){
            $articles = new articles();
            $articles->setLibelle($row['libelle']);
            $articles->setPrix($row['prix']);
            $tableau[] = $articles;
        }
        return $tableau;
    }
    public function insertion($data){
        require_once 'src/session.php';
        if ((isset($data['libelle']) || (isset($data['prix'])) && (!empty($data['libelle'])) || (!empty($data['prix'])) )){
            $requete = 'INSERT INTO articles( libelle, prix) VALUES (?,?)';
            $this->connexion->prepare($requete)->execute([$data['libelle'],$data['prix']]);
            $this->session = session::getSession();
            $this->session->set('message','ajout fait');
            header('Location: interface.php');
        }
    }
}