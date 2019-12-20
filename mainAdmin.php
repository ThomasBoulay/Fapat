<?php
session_start();

if (isset($_SESSION['gestion']) == false) {
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
          href="stylesCss/StyleMain.css">
    <link rel="stylesheet"
          href="stylesCss/StyleMainAdmin.css">
</head>
<body>
    <?php
    include ('enTete.php');
    ?>

        <div class="container">
            <div class="box">
                <div class="imgBox">
                    <img src="images/test2.jpg">
                <div class="details">
                    <div class="content">
                        <h2>What is Za Warudo ?</h2>
                        <p>The stand Za Warudo, the world. ZA WARUUUUDO TOKY WA TOMARUUU</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="images/documentation1.jpg">
                <div class="details">
                    <div class="content">
                        <h2>What is Za Warudo ?</h2>
                        <p>The stand Za Warudo, the world. ZA WARUUUUDO TOKY WA TOMARUUU</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="images/Candidats1.jpg">
                <div class="details">
                    <div class="content">
                        <h2>What is Za Warudo ?</h2>
                        <p>The stand Za Warudo, the world. ZA WARUUUUDO TOKY WA TOMARUUU</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
    <?php
    include('piedPage.php');
    ?>
</body>
</html>

