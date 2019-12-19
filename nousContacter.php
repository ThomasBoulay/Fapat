<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Contact (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="stylesCss/styleMain.css">
        <link rel="stylesheet"
              href="stylesCss/styleContact.css">
    </head>
    <body>
        <?php
        include ('enTete.php');
        ?>

        <div style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
            <form action="form-to-email.php" method="post" class="contact">
                <div style="padding: 15px">
                    <label for="name">
                        <b>Name</b>
                    </label>
                    <input type="text" placeholder="Your name" name="name" required>
                    
                    <label for="email">
                        <b>E-Mail</b>
                    </label>
                    <input type="email" placeholder="Your Email" name="email" required>
                    
                    <label for="subject" style="width:100%;">
                        <b>Subject</b>
                    </label>
                    <input type="text" placeholder="Subject" name="subject" required>
                    
                    <label for="message">
                        <b>Message</b>
                    </label>
                    <textarea placeholder="Message to send" name="message" rows="5" cols="50%" required></textarea>
                    
                    <button type="submit" class="send">
                        Envoyer
                    </button>
                </div>
                <?php
                if (isset($_SESSION['mail'])){
                    if ($_SESSION['mail']=='failed'){
                        echo("<label><b>Email non envoyé.</b></label>");
                        unset($_SESSION["mail"]);
                    }
                    elseif ($_SESSION['mail']=='success'){
                        echo("<label><b>Email envoyé.</b></label>");
                        unset($_SESSION["mail"]);
                    }
                }
                ?>
            </form>
        </div>

        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
