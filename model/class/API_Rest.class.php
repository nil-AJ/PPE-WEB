<?php
 

class ApiRest extends ConnexionBDD
{


    /* " -------------------------------------AIDE --------------------------------------------<br/>
                            -Cette class herite de la classe ConnexionBDD et est incompléte elle sera ameliorer ainsi que sa classe mere dans le futur
                            -Si l'objet ne prend pas de paramètres il appelle l'aide ( équivaut à un NOMDELACLASSE::HELP)<br/>
                            -La methode getAllData prend comme paramétre:
                                *La table dans laquelle on veut recuperer les données
                            -La méthode insertData prend comme paramétre:<br/>
                                *La table dans laquelle on souhaite inserer les données<br/>
                                *Un tableau de valeur  qui contient les valeurs à ajouter ( pour les auto_increment, la valeur a rentrer sera '')<br/>
                            -La methode deleteData est similaire a getAllData()
                            -La methode verification() prend comme parametre:
                                *La table
                                *Un tableau representant le nom des colonnes de la table dans lesquels ce situent le mot de passe et l'utilisateur
                                *Le mot de passe et l'utilisateur

                            ";*/

    
    function __construct($name_of_db=null,$host_url=self::LOCALHOST,$login=null,$password=null)
    {
        parent::__construct($name_of_db,$host_url,$login,$password);
    }


    public function getAllData($table=null)
    {
        if(!empty($table))
        {
            $answer = parent::selectAll($table);
            $this->response($answer);
        }else
        {
            $this->response([["Response"=>"500",
                "Success"=>false]]);
        }
    }

    public function deleteData($table=null, $column=null)
    {
        if(!empty($table) && !empty($column))
        {
            parent::createBDD()->query(" DELETE FROM ".$table." WHERE ".$column."=".$id);
            $this->response([["Response"=>"200"]]);
        }
    }

    public function insertData($table=null, $column=null)
    {
        if(!empty($table) && !empty($column))
        {
            $rep = parent::insertRow($table,$column);
            if($rep != 2 || $rep !=false)
            {
                $this->response([["Response"=>"200",
                "Success"=>$rep]]);
            }else{
                $this->response([["Response"=>"500",
                "Details"=>"Creation impossible",
                "Erreur"=>$rep,
                "Success"=>false]]);
            }
        }
    }

    public function verification($table=null,$r=["user"=>"","password"=>""], $user,$password)
    {
        if(!empty($table) && $row[0]=!"")
        {
        $rows["user"] = $r[0];
        $rows["password"] = $r[1];
         $req =parent::createBDD()->prepare("SELECT * FROM ".$table." WHERE ".$rows["user"]."= ? AND ".$rows["password"]."= ?");
         $req->execute(array(
             $user,
             $password
         ));
         $rep = $req->fetch();
         $req->closeCursor();

         if($rep)
         {
             return true;
         }else{
             return false;
         }
        }
    }

    public function response($tab)
    {
        header('Content-Type: application/json');
        echo $this->jsonParser($tab);
    }

    //Creer un format Json lisible a partir du tableau donné
    private function jsonParser($tabs)
    {
        foreach($tabs as &$tab)
        {
            foreach($tab as $key => $element)
            {
                if(is_numeric($key))
                {
                    unset($tab[$key]);
                }
            }
            unset($tab);
        }

        $json = json_encode($tabs,JSON_FORCE_OBJECT);

        return $json;
    }

}