<?php
session_start();
$email = $_POST['email'];
$password = $_POST['mot_de_passe'];
$response = array();
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    $response['success'] = false;
    $response['message'] = "Adresse mail invalide";
} 
else 
{
    include_once('../Model/connexion_modele.php');
    $model = new connexionModel("localhost", "Zozo921506", "tf-rK4a3", "meetic");
    $user = $model -> getUser($email, $password);
    if ($user) 
    {
        $_SESSION['genre'] = $user['genre'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prénom'];
        $_SESSION['date_de_naissance'] = $user['date_de_naissance'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['loisir'] = $user['loisir'];
        $_SESSION['loisir2'] = $user['loisir2'];
        $_SESSION['loisir3'] = $user['loisir3'];
        $_SESSION['id'] = $user['id'];
        $response['success'] = true;
    }
    else 
    {
        $response['success'] = false;
        $response['message'] = "Identifiants incorrects";
    }
}

echo json_encode($response);
?>