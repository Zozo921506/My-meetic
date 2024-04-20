<?php
session_start();
if (!isset($_SESSION['id']))
{
    header("Location: connexion.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <script src = 'http://code.jquery.com/jquery-latest.js'></script>
    <script src = "../Script/recherche.js"></script>
    <title> Mon compte </title>
    <link rel="stylesheet" href="../Style/compte.css">
</head>
<body>
    <nav>
        <h1>♡STARE♡</h1>
        <div id = "menu">
            <ul>
                <li> <a href = "#"> Homme </a> 
                    <ul>
                        <li> <a href = "recherche.php"> 18/25 </a> </li>
                        <li> <a href = "recherche.php"> 25/35 </a> </li>
                        <li> <a href = "recherche.php"> 35/45 </a> </li>
                        <li> <a href = "recherche.php"> 45+ </a> </li>
                        <li> <a href = "recherche.php"> Loisir </a> </li>
                    </ul>
                </li>
                <li> <a href = "#"> Femme </a>
                    <ul>
                        <li> <a href = "recherche.php"> 18/25 </a> </li>
                        <li> <a href = "recherche.php"> 25/35 </a> </li>
                        <li> <a href = "recherche.php"> 35/45 </a> </li>
                        <li> <a href = "recherche.php"> 45+ </a> </li>
                        <li> <a href = "recherche.php"> Loisir </a> </li>
                    </ul> 
                </li>
                <li> <a href = "#"> Autre </a> 
                    <ul>
                        <li> <a href = "recherche.php"> 18/25 </a> </li>
                        <li> <a href = "recherche.php"> 25/35 </a> </li>
                        <li> <a href = "recherche.php"> 35/45 </a> </li>
                        <li> <a href = "recherche.php"> 45+ </a> </li>
                        <li> <a href = "recherche.php"> Loisir </a> </li>
                    </ul>
                </li>
                <li> <a href = "#"> Mixte </a> 
                    <ul>
                        <li> <a href = "recherche.php"> 18/25 </a> </li>
                        <li> <a href = "recherche.php"> 25/35 </a> </li>
                        <li> <a href = "recherche.php"> 35/45 </a> </li>
                        <li> <a href = "recherche.php"> 45+ </a> </li>
                        <li> <a href = "recherche.php"> Loisir </a> </li>
                    </ul>
                </li>
                <li> <a href = "#"> Proche de vous </a> 
                    <ul>
                        <li> <a href = "recherche.php"> A moins de 1km </a> </li>
                        <li> <a href = "recherche.php"> A 1km - 5km </a> </li>
                        <li> <a href = "recherche.php"> A 5km - 10km </a> </li>
                        <li> <a href = "recherche.php"> A plus de 10km </a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div id = "compte">
            <div>
                <h3> Genre: </h3> 
                <p> <?php echo isset($_SESSION['genre']) ? $_SESSION['genre'] : ''; ?> </p>
            </div>
            <div>
                <h3> Nom: </h3>
                <p> <?php echo isset($_SESSION["nom"]) ? $_SESSION["nom"] : ''; ?> </p>
            </div>
            <div>
                <h3> Prénom: </h3>
                <p> <?php echo isset($_SESSION["prenom"]) ? $_SESSION["prenom"] : ''; ?> </p>
            </div>
            <div>
                <h3> Date de naissance: </h3>
                <p> <?php echo isset($_SESSION["date_de_naissance"]) ? $_SESSION["date_de_naissance"] : ''; ?> </p>
            </div>
            <div>
                <h3> Email: </h3>
                <p> <?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : ''; ?> </p>
                <form action = "../Script/compte.js" method = "post" id = "email">
                    <input type = "text" name = "new_email" id = "new_email">
                    <button type = "submit" name = "new_mail"> Modifier </button>
                </form>
            </div>
            <div>
                <h3> Loisirs: </h3> 
                <p> <?php echo isset($_SESSION["loisir"]) ? $_SESSION["loisir"] : ''; ?> <?php echo isset($_SESSION["loisir2"]) ? $_SESSION["loisir2"] : ''; ?> <?php echo isset($_SESSION["loisir3"]) ? $_SESSION["loisir3"] : ''; ?> </p>
            </div>
            <div>
                <h3> Mot de passe: </h3>
                <form action = "../Script/compte.js" method = "post" id = "new_password">
                    <input type = "password" name = "password" id = "password"> 
                    <button type = "submit" name = "modifier"> Modifier </button>
                </form>
            </div>
            <button type = "submit" name = "delete" id = "delete"> Supprimer compte </button>
        </div>
    </section>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src = "../Script/compte.js"></script>
</body>
</html>