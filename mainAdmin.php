<?php
session_start();

if(isset($_SESSION['gestion'])==false){
    header('Location: main.php');
}
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
        <div class="flexcontainer" style="height: 20%">
            <?php
            include ('enTete.php');
            ?>
        </div>
      <div class="corps">  
        <div class="dropdown">
            <img src="images/logoTest.png" width="50" height="50">
                <div class="dropdown-content">
                    <a href="#">Modifier</a>
                    <a href="#">Consulter</a>
                </div>
        </div>      
          
        <div class="dropdown">
            <img src="images/logoInfo.png" width="50" height="50">
                <div class="dropdown-content">
                    <a href="#">Documentation</a>
                    <a href="#">Statistiques</a>
                </div>
        </div>
          
        <div class="dropdown">
            <img src="images/logoProfil.png" width="50" height="50">
                <div class="dropdown-content">
                    <a href="ajoutCandidat.php">Ajouter un utilisateur</a>
                    <a href="#">Modifier un profil</a>
                </div>
        </div>
    </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>

