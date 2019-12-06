<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Connect (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="stylesCss/styleMain.css">
        <link rel="stylesheet"
              href="stylesCss/styleConnect.css">
    </head>
    <body>
        <div class="flexcontainer">
            <?php
            include ('enTete.php');
            ?>
            <div class="dropdown" style="flex-basis: 12%; background-image: url('images/internet.png');">
                <div class="dropdown-content" style="right: 0">
                    <a href="connect.php">Français (FR)</a>
                    <a href="connectEn.php">English (EN)</a>
                </div>
            </div>
        </div>

        <div id="formulaire" style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
            <form action="logIn.php" method="post" class="formulaire">
                <div class="loginBox">
                    <div>
                    <label>
                        <b>Pseudo</b>
                    </label>
                    <input id="name" type="text" placeholder="Username" name="username" required>
                    
                    <label>
                        <b>Mot de Passe</b>
                    </label>
                    <input id="password" type="password" placeholder="Password" name="password" required>
                    </div>
                    <button name="submit" type="submit" class="connect">
                        Se connecter
                    </button>
                    <?php
                    if (isset($_SESSION['failed']) && $_SESSION['failed']==1){
                    echo("<label><b>Veuillez réessayer</b></label>");
                    $_SESSION['failed']=0;
                    }
                    ?>
                </div>
            </form>
        </div>

        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
