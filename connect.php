<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Conect (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="stylesCss/styleMain.css">
        <link rel="stylesheet"
              href="stylesCss/styleConnect.css">
    </head>
    <body>
        <?php
        include ('enTete.php');
        ?>
        <div class="background">

            <form action="logIn.php" method="post" class="loginBox">
              <h1>Connectez-vous</h1>
              <div class="loginWrite">
                  <input id ="name" type="text" name="name" required>
                  <label for="name" class="label-name">
                      <span class="content-name">Identifiant</span>
                  </label>
              </div>

              <div class="loginWrite">
                  <input id = password type="password" name="password" required>
                  <label for="password" class="label-name">
                      <span class="content-name">Mot de Passe</span>
                  </label>
              </div>

              <button name="submit" type="submit" class="logButton" value ="Se Connecter">Se connecter</button>
                    <?php
                    if (isset($_SESSION['failed']) && $_SESSION['failed']==1){
                    echo("<label><b>Veuillez réessayer</b></label>");
                    $_SESSION['failed']=0;
                    }
                    ?>
            </form>
        </div>
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
