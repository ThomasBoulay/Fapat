<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Conditions (Fr)
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
                    <a href="conditions.php">Français (FR)</a>
                    <a href="conditionsEN.php">English (EN)</a>
                </div>
            </div>
        </div>

        <div class="texte" style="width: 75%; display: block; margin-left: auto; margin-right: auto;">
            <h2>Conditions d'utilisation</h2>
            <hr>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
