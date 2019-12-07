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

        <div id="login" style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
            <form action="logIn.php" method="post" class="login">
                <div style="padding: 15px">
                    <label>
                        <b>Pseudo</b>
                    </label>
                    <input id="name" type="text" placeholder="Username" name="username" required>
                    
                    <label>
                        <b>Mot de Passe</b>
                    </label>
                    <input id="password" type="password" placeholder="Password" name="password" required>
                    
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
