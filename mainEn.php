<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Test FAPAT (En)
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
            <div class="dropdown" style="flex-basis: 12%">
                <div class="dropdown-content" style="right: 0">
                    <a href="main.php">Français (FR)</a>
                    <a href="mainEn.php">English (EN)</a>
                </div>
            </div>
        </div>
        
        <?php
            if (isset($_SESSION['logged'])==true){
                        echo"<div class=\"corps\">
                <a href=\"profilEn.php\">Profil</a>
            </div>";
            }
            else{
                echo"<div class=\"corps\">
                <a href=\"connectEn.php\">Log In</a>
            </div>";
            }
        ?>
        <div class="corps">
            <a>Documentation</a>
            <a>Statistics</a>
        </div>
        
        <?php
        include ('piedPageEN.php');
        ?>
    </body>
</html>