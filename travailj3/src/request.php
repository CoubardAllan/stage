<?php
require_once 'index.php';
require_once 'src/connexion.php';
class request
{
    private $base;

    public function __construct()
    {
        $this->base = new Connexion();

    }
    public function select($table){
        foreach ($this->base->getConnexion()->query('SELECT * FROM '.$table) as $row) {
            print $row['id'];
            print $row['titre'];
            print $row['contenu'];
            print $row['date_publication'];
            print $row['utilisateur_id'];
            print $row['categorie_id'];
        }
    }


    public function insertion($table, $data)
    {
        $pdst = "INSERT INTO".$table."() VALUES .$data)";
    }



    public function delete($table, $id)
    {
        $this->base->getConnexion()->exec("DELETE FROM".$table."WHERE id = ".$id);
    }


    public function maj(){
        
    }
}


