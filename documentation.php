<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Documentation (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="stylesCss/styleMain.css">
        <link rel="stylesheet"
              href="stylesCss/styleDocumentation.css">
    </head>
    <body>
        <div class="flexcontainer">
            <?php
            include ('enTete.php');
            ?>
            <div class="dropdown" style="flex-basis: 12%; background-image: url('images/internet.png');">
                <div class="dropdown-content" style="right: 0">
                    <a href="documentation.php">Français (FR)</a>
                    <a href="documentationEN.php">English (EN)</a>
                </div>
            </div>
        </div>
        <div class="flexcontainer">
            <div class="doc">
                <a href="#">Armée de l'air</a>            
            </div>
            <div class="doc">
                <a href="#">Armée de terre</a>            
            </div>
            <div class="doc">
                <a href="#">Armée de mer</a>            
            </div>
            <div class="doc">
                <a href="#">En savoir plus</a>            
            </div>
        </div>
        <div class="image">
            <img src="images/pilote.jpg" width="45%" height="240%">
            
        </div>
        <div class="texte">
           <?php echo 'Seulement 2,5 à 3% des candidats possèdent un profil psychologique suffisamment équilibré pour résister au stress.<br/>'; echo 'Il est donc primordiale de concevoir une machine pouvant fournir un diagnostique sur les candidats.<br/>';echo 'Durant leurs tests, lorsqu’ils sont en situation de stress, ils doivent par exemple :<br/>';echo '-Répondre à des calculs mentaux<br/>';echo '-Maintenir un cap (appuyer sur une pédale avec un effort constant) quoi qu’il arrive (bruits ou sons imprévus)<br/>';echo '-Pendant toute la durée de stress, la fréquence cardiaque est évaluée<br/>';echo 'Il faut obtenir 1 sur les standards suivants :<br/>';echo'-Les standards d aptitude générale « aviation »<br/>';echo'-Les standards d acuité visuelle « aviation »<br/>';echo'-Les standards de perception des couleurs « aviation »<br/>';echo'-Les standards d audition « aviation »<br/>';  ?>
            

        </div>
          
        <?php
        include ('piedPage.php');
        ?>
    </body>
</html>
