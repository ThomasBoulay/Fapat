<?php
    $to = 'oscarmcauliffe99@gmail.com';
    $email_from = $_POST['email'];
    $headers = "From: $email_from \r\n";
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $text = "$name \n $message";

    mail($to,$subject,$text,$headers);
?>