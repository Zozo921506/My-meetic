<?php

$nom = $_POST['nom'];
$prenom = $_POST['prénom'];
$date_de_naissance = $_POST['date_de_naissance'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$password = $_POST['mot_de_passe'];
$loisir = $_POST['loisir'];
$loisir2 = $_POST['loisir2'];
$loisir3 = $_POST['loisir3'];
$currentDate = date('Y-m-d');
$age = $currentDate - $date_de_naissance;
$response = array();
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    $response['success'] = false;
    $response['message'] = "Adresse mail invalide";
} 
elseif ($age < 18) 
{
    $response['success'] = false;
    $response['message'] = "Vous devez avoir 18 ans ou plus pour pouvoir vous inscrire";
} 
else 
{
    include_once('../Model/inscription_modele.php');
    $model = new inscriptionModel("localhost", "Zozo921506", "tf-rK4a3", "meetic");
    $existingUser = $model -> getUserByEmail($email);

    if ($existingUser) 
    {
        $response['success'] = false;
        $response['message'] = "Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.";
    } 
    else 
    {
        try 
        {
            $model -> saveUser($nom, $prenom, $date_de_naissance, $genre, $ville, $email, $password, $loisir, $loisir2, $loisir3);
            $response['success'] = true;
            $response['message'] = "Inscription réussie";
        } 
        catch (PDOException $e) 
        {
            $response['success'] = false;
            $response['message'] = "Erreur lors de l'inscription dans la base de données : " . $e->getMessage();
        }
    }
}

echo json_encode($response);