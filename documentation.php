<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
        Documentation (Fr)
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="stylesCss/styleMain.css">
       <!--  <link rel="stylesheet"
              href="stylesCss/styleDocumentation.css">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="deroule.js"></script> -->
        <link rel="stylesheet" href="stylesCss/styledoc.css">
    </head>
   <header>
     <?php
        include ('enTete.php');
     ?>
    </header>
  
     <body>
         <h1>En savoir plus sur les métiers de l'armée de l'air</h1>
         <div class="contenu">
        <!-- --------------------------------------------------------------------------  -->
            <div class="section">
                <div class="documentation">
                    <h2>paragraphe 1</h2>
                    <p>Seulement 2,5 à 3% des candidats possèdent un profil psychologique suffisamment équilibré pour résister au stress.<br/>
                            Il est donc primordiale de concevoir une machine pouvant fournir un diagnostique sur les candidats.<br/>
                            Durant leurs tests, lorsqu’ils sont en situation de stress, ils doivent par exemple: <br/>
                            - Répondre à des calculs mentaux<br/>
                            - Maintenir un cap (appuyer sur une pédale avec un effort constant) quoi qu’il arrive (bruits ou sons imprévus)<br/>
                            - Pendant toute la durée de stress, la fréquence cardiaque est évaluée<br/>
                            Il faut obtenir 1 sur les standards suivants <br/>
                            - Les standards d aptitude générale « aviation »<br/>
                            - Les standards d acuité visuelle « aviation »<br/>
                            - Les standards de perception des couleurs « aviation »<br/>
                            - Les standards d audition « aviation » 
                    </p>
                </div> 
                <div class="photo">
                    <img src="images/helicopter.png" class="image" >
                </div>
            </div>
         <!-- -------------------- section suivante------------------------------------- -->
          <div class="section">
                <div class="photo">
                    <img src="images/aircraft.png" class="image" >
                </div>
                <div class="documentation">
                    <h2>paragraphe 2</h2>
                    <p>Seulement 2,5 à 3% des candidats possèdent un profil psychologique suffisamment équilibré pour résister au stress.     <br/>
                        Il est donc primordiale de concevoir une machine pouvant fournir un diagnostique sur les candidats.<br/>
                        Durant leurs tests, lorsqu’ils sont en situation de stress, ils doivent par exemple: <br/>
                        -Répondre à des calculs mentaux<br/>
                        -Maintenir un cap (appuyer sur une pédale avec un effort constant) quoi qu’il arrive (bruits ou sons imprévus)<br/>
                        -Pendant toute la durée de stress, la fréquence cardiaque est évaluée<br/>
                        Il faut obtenir 1 sur les standards suivants <br/>
                        -Les standards d aptitude générale « aviation »<br/>                            
                        -Les standards d acuité visuelle « aviation »<br/>
                        -Les standards de perception des couleurs « aviation »<br/>
                        -Les standards d audition « aviation » 
                    </p>
                </div>        
          </div>
             
        <!-- ----------------------------------------------------------------- -->
    </div>

         
     </body>
    
    <footer> 
        <?php
        include ('piedPage.php');
        ?>
    </footer>
    
</html>


