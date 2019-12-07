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
        </div>
        <div class ="background">
        <div class="bodyContent">
            <div class = "textContent">
                <p>Fighting Aircraft Pilot</p>
                <p> Aptitude Test</p>
            </div>
            <?php
            if (isset($_SESSION['logged'])==true){
                if(isset($_SESSION['gestion'])){
                    echo"<div class=\"corps\">
                <a href=\"mainAdmin.php\">Gestion</a>
            </div>";
                }
                else{echo"<div class=\"corps\">
                <a href=\"profil.php\">Profil</a>
            </div>";}
            }
            else{
                echo"<div class=\"corps\">
                <a href=\"connect.php\">Se connecter</a>
            </div>";
            }
            ?>
            <div class="corps">
                <a>Documentation</a>
                <a>Statistics</a>
            </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
