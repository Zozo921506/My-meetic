<?php

session_start();
$password = $_POST['password'];
$id = $_SESSION['id'];
if ($password !== "")
{
    include_once('../Model/compte_model.php');
    $model = new Compte("localhost", "Zozo921506", "tf-rK4a3", "meetic");
    try
    {
        $model -> updatePassword($id, $password);
        $response['message'] = "Mot de passe modifié avec succès";
        $response['success'] = true;
    } 
    catch (PDOException $e)
    {
        $response['success'] = false;
        $response['message'] = "Erreur lors de la modification dans la base de données : " . $e->getMessage();
    }
}
echo json_encode($response);