<?php 

require_once("../Model/recherche_modele.php");

class SearchController 
{
    public function showSearchResults() 
    {
        $searchModel = new Search("localhost", "Zozo921506", "tf-rK4a3", "meetic");

        if(isset($_GET['age'])) 
        {
            $age = $_GET['age'];
            $results = $searchModel-> showSearch($age);
            require_once("../View/recherche.php");
        } 
        else 
        {

        }
    }
}