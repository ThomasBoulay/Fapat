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
        <link rel="stylesheet"
              href="stylesCss/styleDocumentation.css">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="deroule.js"></script>
    </head>
   <header>
     <?php
        include ('enTete.php');
     ?>
    </header>
  
     <body>
        <div class="flexcontainer">
            <div class="doc" style="flex-basis: 8%">
                <a href="#">Armée de l'air</a>            
            </div>
            <div class="doc" style="flex-basis: 8%">
                <a href="#">Armée de terre</a>            
            </div>
            <div class="doc" style="flex-basis: 8%">
                <a href="#">Armée de mer</a>            
            </div>
            <div class="doc" style="flex-basis: 8%">
                <a href="#">En savoir plus</a>            
            </div>
        </div>
       <!-- <div class="image">
            <img src="images/pilote.jpg" width="45%" height="240%">
        
        <div class="texte">
           <p>Seulement 2,5 à 3% des candidats possèdent un profil psychologique suffisamment équilibré pour résister au stress.<br/>
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
            </div> -->
         <div class="contenu">
         
            <div class="section">
                <h3>paragraphe 1</h3>
                <div class="documentation">
                    <div class="documentation-inner">
                        <p>Seulement 2,5 à 3% des candidats possèdent un profil psychologique suffisamment équilibré pour résister au stress.<br/>
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
            </div>
         <!-- section suivante -->
          <div class="section">
                <h3>paragraphe 2</h3>
                <div class="documentation">
                    <div class="documentation-inner">
                        <p>Seulement 2,5 à 3% des candidats possèdent un profil psychologique suffisamment équilibré pour résister au stress.<br/>
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
            </div>
             
             
         </div>

         
     </body>
    
    <footer> 
        <?php
        include ('piedPage.php');
        ?>
    </footer>
    
</html>

