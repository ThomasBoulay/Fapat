<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Documentation (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="styleMain.css">
        <link rel="stylesheet"
              href="styleAPropos.css">
    </head>
    <body>
        <div class="flexcontainer">
            <?php
            include ('enTete.php');
            ?>
            <div class="dropdown" style="flex-basis: 12%">
                <div class="dropdown-content" style="right: 0">
                    <a href="documentation.php">Français (FR)</a>
                    <a href="documentationEN.php">English (EN)</a>
                </div>
            </div>
        </div>

        
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
