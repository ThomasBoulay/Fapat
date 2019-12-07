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
        <?php
        include ('enTete.php');
        ?>
        
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