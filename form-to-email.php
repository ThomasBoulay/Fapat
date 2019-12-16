<?php
    session_start();

    $to = 'capsens2019@gmail.com';
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $message = $_POST['email']."$name \n $message";

    if(mail($to, $subject, $message))
        $_SESSION['mail'] = 'success';
    else
        $_SESSION['mail'] = 'failed';
    header('Location: nousContacter.php');
    exit;
?>
//test