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



        $pdst = "INSERT INTO" .$table." VALUES" .$data;
        var_dump($pdst);

        $this->base->getConnexion()->exec($pdst);

        echo "L'ajout a été effectuer";
    }



    public function delete($table, $id)
    {

        $query = "DELETE FROM ".$table." WHERE id = ".$id;
        var_dump($query);
        $this->base->getConnexion()->exec($query);

    }

    public function maj($vtable,$tableau){
    foreach ($vtable as $key)
            if (array_key_exists('id',$tableau)){
                $this->base->getConnexion()->exec('UPDATE '.$vtable.' SET'.$tableau.'WHERE id =');

            }else {
                echo 'non';
            }
    }

}


