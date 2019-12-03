<?php
header('Location: main.php');
session_start();
session_destroy();
exit();
?>