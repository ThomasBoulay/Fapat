<?php
session_start();
$_SESSION['failed']=0;


if (isset($_POST['username'],$_POST['password'])) {
    $db = new PDO("mysql:host=localhost;dbname=testlogin", "root", "");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $rep = $db->query("SELECT username,password FROM users WHERE username = '".$username."'");
    $data = $rep->fetch();
    
    if($password==$data['password']){
        $_SESSION['logged']=$username.$password;
        header('Location: profil.php');
        exit;
    }
    else{
        $_SESSION['failed'] = 1;
        header('Location: connect.php');
        exit;
    }
}

?>