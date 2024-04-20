<?php

include_once("../db.php");

class connexionModel extends DB
{
    public function getUser($email, $password) 
    {
        try 
        {
            $query = $this -> connect -> prepare("SELECT * FROM user WHERE email = ? AND mot_de_passe = MD5(?)");
            $query -> execute([$email, $password]);
            $user = $query -> fetch(PDO::FETCH_ASSOC);
            if (!$user) 
            {
                return false;
            } 
            else 
            {
                return $user;
            }
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de la vérification dans la base de données : " . $e->getMessage());
        }
    }
}

?>