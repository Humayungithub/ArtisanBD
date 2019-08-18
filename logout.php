<?php

session_start();
$_SESSION['success']='Logged Out!';
session_destroy();
header("Location: index.php");
?>

