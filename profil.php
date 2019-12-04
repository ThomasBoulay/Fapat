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
         <link rel="stylesheet"
              href="styleProfile.css">
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
        
        <div class="profileBox">
            <div class="profileInside">
                        <div class="profile">
                            <p>Profil</p>
                        </div>

                        <div class="profileText">
                            <div class = "flexPicture">
                                <img class ="profilePicture" src="Airplane.png" 
                                    alt=""
                                    height="50px" 
                                    width="40px" />        
                            </div>
                        
                            <?php
                            echo "Nom : <br>";
                            echo "Prénom : <br>";
                            echo "Pseudo : ".$_SESSION['logged']."<br>";
                            echo "ID : <br>";
                            echo "Changer de mot de passe <br> <br>"
                            ?>

                            <label for="pswd">
                                <b>Entrez votre de passe actuel</b>
                            </label>
                            <input type="password" placeholder="Mot de passe" name="pswd" required>
                            <br> <br>
                            <label for="pswd">
                                <b>Nouveau mot de passe</b>
                            </label>
                            <input type="password" placeholder="" name="pswd" required>
                            <br> <br>
                            <label for="pswd">
                                <b>Confirmer le nouveau mot de passe</b>
                            </label>
                            <input type="password" placeholder="" name="pswd" required>
                            <br> <br>
                            <input class="buttonStat" type="button" value="Voir mes statistiques">
                        </div>
                <?php
                echo"<a href=\"logOut.php\">Log out</a>";
                ?>
            </div>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>