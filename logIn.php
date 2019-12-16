<?php
session_start();
$_SESSION['failed']=0;


if (isset($_POST['username'],$_POST['password'])) {
    $db = new PDO("mysql:host=localhost;dbname=fapat", "root", "");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $rep = $db->query("SELECT username,password,admin,nom,prenom,email,dateNaissance FROM users WHERE username = '".$username."'");
    $data = $rep->fetch();
    
    if(password_verify($password, $data['password'])){
        $_SESSION['logged']=$username;
        $_SESSION['nom']=$data['nom'];
        $_SESSION['prenom']=$data['prenom'];
        $_SESSION['email']=$data['email'];
        $_SESSION['dateNaissance']=$data['dateNaissance'];

        if($data['admin']==1){
            $_SESSION['gestion']=1;
            header('Location: mainAdmin.php');
            exit;
        }
        else{
            header('Location: profil.php');
            exit;
        }
    }
    else{
        $_SESSION['failed'] = 1;
        header('Location: connect.php');
        exit;
    }
}

?>