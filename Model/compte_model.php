<?php

require_once("inscription_modele.php");
class Compte extends inscriptionModel
{
    public function updateMail($id, $email)
    {
        try 
        {
            $query = $this -> connect -> prepare("UPDATE user SET email = ? WHERE id = ?");
            $query -> execute([$email, $id]);
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de la recherche d'utilisateur par e-mail : " . $e->getMessage());
        }
    }

    public function updatePassword($id, $password)
    {
        try 
        {
            $hashed_password = md5($password);
            $query = $this -> connect -> prepare("UPDATE user SET mot_de_passe = ? WHERE id = ?");
            $query -> execute([$hashed_password, $id]);
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de la recherche d'utilisateur par e-mail : " . $e->getMessage());
        }
    }
}