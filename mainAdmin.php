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
    <div class="bloc">
        
        
        <div class="cardLeft">
            <div class="front"> 
                <img src="images/logoTest.png" alt="">
            </div>
            <div class="back">
               <div class="back-content middle">
                <h4><a href="#">1ere option</a></h4>           
                <p><a href="#">2eme option</a></p> 
                </div>  
            </div>
        </div>
        
        
        <div class="cardMiddle">
            <div class="front"> 
                <img src="images/logoInfo.png" alt="">
            </div>
            <div class="back">
               <div class="back-content middle">
                <h4><a href="#">1ere option</a></h4>           
                <p><a href="#">2eme option</a></p>
                </div>  
            </div>
        </div>
        
        
        <div class="cardRight">
            <div class="front"> 
                <img src="images/logoProfil.png" alt="">
            </div>
            <div class="back">
               <div class="back-content middle">
                <h4><a href="#">1ere option</a></h4>           
                <p><a href="#">2eme option</a></p>
                </div>  
            </div>
        </div>   
        
        
    </div>

    <?php
    include('piedPage.php');
    ?>
</body>
</html>

