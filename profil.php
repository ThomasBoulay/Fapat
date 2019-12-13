<?php
session_start();

if(isset($_SESSION['logged'])==false){
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
         <link rel="stylesheet"
              href="stylesCss/styleProfile.css">
    </head>
    <body>
        <?php
        include ('enTete.php');
        ?>

        <div class="backgroundAll">
            <div class="backgroundProfil">
                <div class="profilBox" style="padding: 10px">
                    <div style="height: 90%">
                        <img src="images/defaultuser.png" style="max-width: 100%; max-height: 100%"">
                    </div>
                    <div class="profilText" style="height: 90%; flex-basis: 80%; padding: 3%">
                        <h1>Profil</h1>
                        <?php
                        echo '<p><b>Nom : </b>'.$_SESSION['nom'].'</p>';
                        echo '<p><b>Prénom : </b>'.$_SESSION['prenom'].'</p>';
                        echo '<p><b>E-mail : </b>'.$_SESSION['email'].'</p>';
                        echo '<p><b>Date de Naissance : </b>'.$_SESSION['dateNaissance'].'</p>';
                        echo '<br>';
                        echo '<p><b>Pseudonyme : </b>'.$_SESSION['logged'].'</p>';
                        ?>
                        <p><b>Changer de Mot de Passe :</b></p>
                        <form action="nouveauMdp.php" method="post">
                            <div class="mdpInput">
                                <input id="oldPassword" type="password" name="oldPassword" required>
                                <label for="oldPassword" class="mdpLabel">
                                    <span class="content-name"> Ancien Mot de Passe</span>
                                </label>
                            </div>
                            <div class="mdpInput">
                                <input id="newPassword" type="password" name="newPassword" required>
                                <label for="newPassword" class="mdpLabel">
                                    <span class="content-name">Nouveau Mot de Passe</span>
                                </label>
                            </div>
                            <div class="mdpInput">
                                <input id="newPassword2" type="password" name="newPassword2" required>
                                <label for="newPassword2" class="mdpLabel">
                                    <span class="content-name">Confirmer</span>
                                </label>
                            </div>
                            <button name="submit" type="submit" class="mdpButton">Changer</button>
                            <?php
                            if (isset($_SESSION['failed']) && $_SESSION['failed']==1) {
                                echo("<label><b>Veuillez réessayer</b></label>");
                                $_SESSION['failed']=0;
                            }
                            elseif (isset($_SESSION['failed']) && $_SESSION['failed']==2){
                                echo("<label><b>Les mots de passe ne sont pas les mêmes!</b></label>");
                                $_SESSION['failed']=0;
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>