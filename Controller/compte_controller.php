<?php

session_start();

$email = $_POST['new_email'];
$password = $_POST['password'];
$id = $_SESSION['id'];
$response = array();
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    $response['success'] = false;
    $response['message'] = "Adresse mail invalide";
}
else 
{
    include_once('../Model/compte_model.php');
    $model = new Compte("localhost", "Zozo921506", "tf-rK4a3", "meetic");
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
            $model -> updateMail($id, $email);
            $response['message'] = "Addresse mail modifié avec succès";
            $response['success'] = true;
        } 
        catch (PDOException $e)
        {
            $response['success'] = false;
            $response['message'] = "Erreur lors de la modification dans la base de données : " . $e->getMessage();
        }
    }
}

echo json_encode($response);