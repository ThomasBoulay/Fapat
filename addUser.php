<?php
include 'functions.php';
$date = $_POST['dateDeNaissance'];

$nom = $_POST['nom'];
$nom = str_replace(' ', '', $nom);
$nom = str_replace('-', '', $nom);

$prenom = $_POST['prenom'];
$prenom = str_replace(' ', '', $prenom);
$prenom = str_replace('-', '', $prenom);

$email = $_POST['email'];

$username = strtolower(substr($prenom,0,1).$nom);

$password = randomPassword();
echo $username." ".$password;

$db = new PDO("mysql:host=localhost;dbname=testlogin", "root", "");
$req = $db->query("insert into users (username,password,nom,prenom,email,dateNaissance) values ('".$username."', '".$password."', '".$nom."', '".$prenom."', '".$email."', '".$date."')");

header('Location: ajoutCandidat.php');
?>