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
            <a href="main.php">Français (FR)</a>
            <a href="mainEn.php">English (EN)</a>
        </div>
    </div>
</div>

<div style="width: 20%; display: block; margin-left: auto; margin-right: auto;">
    <form action="addUser.php" method="post" class="formulaire">
        <div>
            <label>
                <b>Nom</b>
            </label>
            <input id="nom" type="text" placeholder="Nom" name="nom" required>

            <label>Prénom</label>
            <input id="prenom" type="text" placeholder="Prénom" name="prenom" required>

            <label>E-mail</label>
            <input id="email" type="text" placeholder="Adresse e-mail" name="email" required>
            <button name="submit" type="submit" class="connect">
                Ajouter candidat
            </button>
        </div>
    </form>
</div>

<?php
include ('piedPage.php');
?>
</body>
</html>
