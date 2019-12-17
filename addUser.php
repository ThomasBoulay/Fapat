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
$passwordhashed = password_hash($password, PASSWORD_DEFAULT);

$db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");
$req = $db->query("insert into users (username,password,nom,prenom,email,dateNaissance) values ('".$username."', '".$passwordhashed."', '".$nom."', '".$prenom."', '".$email."', '".$date."')");

header('Location: ajoutCandidat.php');

$to = $email;

$headers = "From : Capsens\r\n";
$subject = "Connexion FAPAT";
$message = "Bonjour $nom,\nVoici vos identifiants pour le site FAPAT :\n$username\n$password";
mail($to, $subject, $message, $headers)
?>