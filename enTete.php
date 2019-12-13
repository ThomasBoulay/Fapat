<div class="entete">
    <div style="flex-basis: 8%">
    <a href="main.php">
        <img src="images/LogoProduit.png" style="height: 100%; width: 100%; object-fit: contain; cursor: pointer; left: 0;">
    </a>
    </div>
    <div style="flex-basis: 30%">
        <img src="images/FAPAT.png" style="height: 100%; width: 100%; object-fit: contain">
    </div>
    <div class ="navBar" style="flex-basis: 50%; overflow-y:auto;
        white-space:nowrap;">
         <ul>
             <li><a class ="animated" href ="main.php">Home</a></li>
             <?php
             if(isset($_SESSION['logged'])==false){
                 echo "<li><a class =\"animated\" href =\"connect.php\">Se connecter</a></li>";
             }
             else {
                 echo "<li><a class =\"animated\" href =\"profil.php\">Profil</a></li>";
             }
             ?>
             <li><a class ="animated" href ="#">Qui sommes-nous ?</a></li>
             <li><a class ="animated" href ="faq.php">FAQ</a></li>
             <li><a class ="animated" href ="documentation.php">Documentation</a></li>
             <li><a class ="animated" href ="#">Aide</a></li>
             <?php
             if(isset($_SESSION['logged'])==true){
                 echo "<li><a class =\"animated\" href =\"logOut.php\">Déconnexion</a></li>";
             }
             ?>
         </ul>
    </div>
    <div class="dropdown" style="flex-basis: 8%">
        <img src="images/internet.png" style="height: 100%; width: 25%; object-fit: contain">
            <div class="dropdown-content" style="right: 0">
                 <?php
                 $url = $_SERVER['HTTP_HOST'];
                 $url .= $_SERVER['REQUEST_URI'];

                 if (strpos($url, 'En') !== false) {
                     $urlEn = $url;
                     $urlEn = substr($urlEn, 16);

                     $urlFr = substr($urlEn,0,-6);
                     $urlFr .= ".php";

                     echo ("<a href=\"".$urlFr."\">Francais (FR)</a>");
                     echo ("<a href=\"".$urlEn."\">English (EN)</a>");
                 }
                 else{
                     $urlFr = $url;
                     $urlFr = substr($urlFr, 16);

                     $urlEn = substr($urlFr, 0, -4);
                     $urlEn .= "En.php";

                     echo ("<a href=\"".$urlFr."\">Francais (FR)</a>");
                     echo ("<a href=\"".$urlEn."\">English (EN)</a>");
                 }
                 ?>
             </div>
    </div>
</div>