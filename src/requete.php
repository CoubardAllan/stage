<?php
require_once 'src/connexion.php';
require_once 'src/personnage.php';
class requete{
    private $connexion;
    public function __construct()
    {
        $this->connexion = connexion::getConnexion();
    }
    public function selection($table){
        $tableau = [];
        foreach ($this->connexion->query('SELECT nom, prenom, pseudo FROM '.$table)as $row){
            $personnage = new personnage();
            $personnage->setNom($row['nom']);
            $personnage->setPrenom($row['prenom']);
            $personnage->setPseudo($row['pseudo']);
            $tableau[] = $personnage;
        }
        return $tableau;
    }
    public function insertion($data){
        require_once 'src/session.php';
        if ((isset($data['nom']) || (isset($data['prenom'])) || (isset($data['pseudo'])) || (isset($data['mdp'])) || (isset($data['email']))  && (!empty($data['nom'])) || (!empty($data['prenom'])) || (!empty($data['pseudo']))|| (!empty($data['mdp'])) || (!empty($data['email'])) )){
            $requete = 'INSERT INTO personnage( nom, prenom, pseudo, mdp, email) VALUES (?,?,?,?,?)';
            $this->connexion->prepare($requete)->execute([$data['nom'],$data['prenom'],$data['pseudo'],$data['mdp'],$data['email']]);
            session::getSession()->set('message','ajout fait');
            header('Location: interface.php');
        }
    }
}
