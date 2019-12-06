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
            <div class="dropdown" style="flex-basis: 12%; background-image: url('images/internet.png');">
                <div class="dropdown-content" style="right: 0">
                    <a href="main.php">Français (FR)</a>
                    <a href="mainEn.php">English (EN)</a>
                </div>
            </div>
        </div>
        
        <div class="corps">
            
            <div class="logo1" style=" background-image: url('images/internet.png');">
                <div class="dropdown-content-logo" style="right: 0">
                    <a href="main.php">Modifer</a>
                    <a href="mainEn.php">Consulter</a>
                </div>
            </div>
            
        </div>
       
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>

