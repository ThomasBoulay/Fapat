<?php
    $to = 'capsens2019@gmail.com';
    $comingfrom = 'oscarmcauliffe99@gmail.com';
    $headers = "From : ".$comingfrom."\r\n";
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $message = "$name \n $message";

    if(mail($to, $subject, $message, $headers))
        echo "WOOHOO, email sent";
    else
        echo "BUMMER, email failed";
?>