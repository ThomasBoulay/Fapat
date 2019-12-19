<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        FAPAT Test (En)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="stylesCss/styleMain.css">
    </head>
    <body>
        <?php
        include ('enTete.php');
        ?>
        <div class ="background" style="background-image:url('images/fighterPilot.jpg');">
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
                    <a href=\"connect.php\">Log in</a>
                </div>";
                }
                ?>
                <div class="corps">
                    <a>Documentation</a>
                    <a>Statistics</a>
                </div>
            </div>
        </div>
        <?php
        include ('piedPageEN.php');
        ?>
    </body>
</html>