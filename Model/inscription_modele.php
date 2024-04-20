<?php

require_once("../db.php");
class inscriptionModel extends DB
{
    public function getUserByEmail($email)
    {
        try 
        {
            $query = $this -> connect -> prepare("SELECT * FROM user WHERE email = :email");
            $query -> bindParam(':email', $email);
            $query -> execute();
            $user = $query -> fetch(PDO::FETCH_ASSOC);
            return $user;
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de la recherche d'utilisateur par e-mail : " . $e->getMessage());
        }
    }

    public function saveUser($nom, $prenom, $date_de_naissance, $genre, $ville, $email, $password, $loisir, $loisir2, $loisir3)
    {
        try 
        {
            $query = $this -> connect -> prepare("INSERT INTO user (nom, prénom, date_de_naissance, genre, ville, email, mot_de_passe, loisir, loisir2, loisir3)
            VALUES (:nom, :prenom, :date_de_naissance, :genre, :ville, :email, MD5(:password), :loisir, :loisir2, :loisir3)");
            $query -> bindParam(':nom', $nom);
            $query -> bindParam(':prenom', $prenom);
            $query -> bindParam(':date_de_naissance', $date_de_naissance);
            $query -> bindParam(':genre', $genre);
            $query -> bindParam(':ville', $ville);
            $query -> bindParam(':email', $email);
            $query -> bindParam(':password', $password);
            $query -> bindParam(':loisir', $loisir);
            $query -> bindParam(':loisir2', $loisir2);
            $query -> bindParam(':loisir3', $loisir3);
            $query -> execute();
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de l'insertion dans la base de données : " . $e->getMessage());
        }
    }
}
?>