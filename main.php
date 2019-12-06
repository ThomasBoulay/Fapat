<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Test FAPAT (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="stylesCss/styleMain.css">
    </head>
    <body>
        <div class="flexcontainer">
            <?php
            include ('enTete.php');
            ?>
            <div class ="navBar">
                <ul>
                    <li><a class ="animated" href ="#">Home</a></li>
                    <li><a class ="animated" href ="#">Se connecter</a></li>
                    <li><a class ="animated" href ="#">Qui sommes-nous ?</a></li>
                    <li><a class ="animated" href ="#">FAQ</a></li>
                    <li><a class ="animated" href ="documentation.php">Documentation</a></li>
                    <li><a class ="animated" href ="#">Aide</a></li>
                </ul>
            </div>
            <div class="dropdown" style="flex-basis: 12%; background-image: url('images/internet.png');">
                <div class="dropdown-content" style="right: 0">
                    <a href="main.php">Français (FR)</a>
                    <a href="mainEn.php">English (EN)</a>
                </div>
            </div>
        </div>
        <div class ="background">
        <div class="bodyContent">
            <?php
            if (isset($_SESSION['logged'])==true){
                        echo"<div class=\"corps\">
                <a href=\"profil.php\">Profil</a>
            </div>";
            }
            else{
                echo"<div class=\"corps\">
                <a href=\"connect.php\">Se connecter</a>
            </div>";
            }
            ?>
        </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
