<?php

require_once("../db.php");

class Search extends DB 
{
    public function showSearch($age) 
    {
        try 
        {
            $age = isset($_GET['age']) ? $_GET['age'] : '';
            $query = $this->connect->prepare("SELECT * FROM user WHERE age LIKE CONCAT('%', :age, '%')");
            $query -> bindParam(':age', $age);
            $query -> execute();
            return $query -> fetchAll(PDO::FETCH_ASSOC);
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de la recherche: " . $e->getMessage());
        }
    }
}