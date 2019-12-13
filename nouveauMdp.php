<?php
session_start();
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$newPassword2 = $_POST['newPassword2'];

if($newPassword == $newPassword2){
    $db = new PDO("mysql:host=localhost;dbname=testlogin", "root", "");
    $rep = $db->query("SELECT username,password,admin,nom,prenom,email,dateNaissance FROM users WHERE username = '".$_SESSION['logged']."'");
    $data = $rep->fetch();

    if (password_verify($oldPassword,$data['password'])){
        $newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);
        $rep2 = $db->query("UPDATE users SET password = '".$newPasswordHashed."' WHERE users.username = '".$_SESSION['logged']."'");
        header('Location: profil.php');
        exit;
    }
    else{
        $_SESSION['failed'] = 1;
        header('Location: profil.php');
        exit;
    }
}
else{
    $_SESSION['failed'] = 2;
    header('Location: profil.php');
    exit;
}
?>