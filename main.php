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
              href="styleMain.css">
    </head>
    <body>
        <div class="flexcontainer">
            <?php
            include ('enTete.php');
            ?>
            <div class="dropdown" style="flex-basis: 12%">
                <div class="dropdown-content" style="right: 0">
                    <a href="main.php">Français (FR)</a>
                    <a href="mainEn.php">English (EN)</a>
                </div>
            </div>
        </div>

        <div>
            <?php
            if (isset($_SESSION['logged'])==true){
                        echo"<div class=\"corps\">
                <a href=\"profil.php\">Profil</a>
            </div>";
            }
            else{
                echo"<div class=\"corps\">
                <a href=\"connect.php\">Se Connecter</a>
            </div>";
            }
            ?>
            <div class="corps">
                <a href="documentation.php">Documentation</a>
                <a>Statistiques</a>
            </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
