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

<?php
$db = new PDO("mysql:host=localhost;dbname=testlogin", "root", "");
$req = $db->query("select * from users");
$req->execute();
?>
<div style="display: flex;">
<div style="width: 20%; display: block; margin-left: 10%; margin-right: auto;">
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>admin</th>
        <th>dateNaissance</th>
    </tr>
    </thead>
    <tbody>
    <?php while( $row = $req->fetch()) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['admin']; ?></td>
            <td><?php echo $row['dateNaissance']; ?></td>
        </tr>
    <?php endwhile ?>
    </tbody>
</table>
</div>

<div style="width: 20%; display: block; margin-left: auto; margin-right: 10%;">
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

            <label>Date de Naissance</label>
            <input id="dateDeNaissance" type="date" name="dateDeNaissance">

            <button name="submit" type="submit" class="connect">
                Ajouter candidat
            </button>
        </div>
    </form>
</div>
</div>

<?php
include ('piedPage.php');
?>
</body>
</html>
