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
  <a href="#">Ajouter un utilisateur</a>
  <a href="#">Modifier un profil</a>
  </div>
</div>
    
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>

