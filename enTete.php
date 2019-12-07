 <div style="flex-basis: 8%">
<a href="main.php">
    <img src="images/LogoProduit.png" style="height: 100%; width: 100%; object-fit: contain; cursor: pointer">
</a>
</div>
<div style="flex-basis: 30%">
    <img src="images/FAPAT.png" style="height: 100%; width: 100%; object-fit: contain">
</div>
 <div class ="navBar">
     <ul>
         <li><a class ="animated" href ="main.php">Home</a></li>
         <li><a class ="animated" href ="connect.php">Se connecter</a></li>
         <li><a class ="animated" href ="#">Qui sommes-nous ?</a></li>
         <li><a class ="animated" href ="#">FAQ</a></li>
         <li><a class ="animated" href ="documentation.php">Documentation</a></li>
         <li><a class ="animated" href ="#">Aide</a></li>
     </ul>
 </div>
 <div class="dropdown" style="flex-basis: 12%; background-image: url('images/internet.png');">
     <div class="dropdown-content" style="right: 0">
         <?php
         $urlFr = $_SERVER['HTTP_HOST'];
         $urlFr .= $_SERVER['REQUEST_URI'];
         $urlFr = substr($urlFr, 16);

         $urlEn = substr($urlFr, 0, -4);
         $urlEn .= "En.php";

         echo ("<a href=\"".$urlFr."\">Francais (FR)</a>");
         echo ("<a href=\"".$urlEn."\">English (EN)</a>");
         ?>
     </div>
 </div>

