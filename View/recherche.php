<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../Style/recherche.css">
    <script src = 'http://code.jquery.com/jquery-latest.js'></script>
    <script src = "../Script/recherche.js"></script>
    <title> Recherche </title>
</head>
<body>
    <nav>
        <h1>♡STARE♡</h1>
        <div id = "menu">
            <ul>
                <li> <a href = "#"> Homme </a> 
                    <ul>
                        <li> <a href = "./recherche.php?age=18-25"> 18/25 </a> </li>
                        <li> <a href = "./recherche.php?age=25-35"> 25/35 </a> </li>
                        <li> <a href = "./recherche.php?age=35-45"> 35/45 </a> </li>
                        <li> <a href = "./recherche.php?age=45+"> 45+ </a> </li>
                        <li> <a href = "#"> Loisir </a> </li>
                    </ul>
                </li>
                <li> <a href = "#"> Femme </a>
                    <ul>
                    <li> <a href = "./recherche.php?age=18-25"> 18/25 </a> </li>
                        <li> <a href = "./recherche.php?age=25-35"> 25/35 </a> </li>
                        <li> <a href = "./recherche.php?age=35-45"> 35/45 </a> </li>
                        <li> <a href = "./recherche.php?age=45+"> 45+ </a> </li>
                        <li> <a href = "#"> Loisir </a> </li>
                    </ul> 
                </li>
                <li> <a href = "#"> Autre </a> 
                    <ul>
                    <li> <a href = "./recherche.php?age=18-25"> 18/25 </a> </li>
                        <li> <a href = "./recherche.php?age=25-35"> 25/35 </a> </li>
                        <li> <a href = "./recherche.php?age=35-45"> 35/45 </a> </li>
                        <li> <a href = "./recherche.php?age=45+"> 45+ </a> </li>
                        <li> <a href = "#"> Loisir </a> </li>
                    </ul>
                </li>
                <li> <a href = "#"> Mixte </a> 
                    <ul>
                    <li> <a href = "./recherche.php?age=18-25"> 18/25 </a> </li>
                        <li> <a href = "./recherche.php?age=25-35"> 25/35 </a> </li>
                        <li> <a href = "./recherche.php?age=35-45"> 35/45 </a> </li>
                        <li> <a href = "./recherche.php?age=45+"> 45+ </a> </li>
                        <li> <a href = "#"> Loisir </a> </li>
                    </ul>
                </li>
                <li> <a href = "#"> Proche de vous </a> 
                    <ul>
                        <li> <a href = "#"> A moins de 1km </a> </li>
                        <li> <a href = "#"> A 1km - 5km </a> </li>
                        <li> <a href = "#"> A 5km - 10km </a> </li>
                        <li> <a href = "#"> A plus de 10km </a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <section id = "center">
        <h1> Votre recherche </h1>
        <form id = "heart">
            <input type = "text" id = "recherche">
            <button type = "submit" id = "search"> Rechercher </button>
        </form>
    </section>
</body>
</html>