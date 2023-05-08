<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['role']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['gender']);
unset($_SESSION['img']);
//unset($_SESSION['cart']);
//unset($_SESSION['admin']);
//unset($_SESSION['verif']);
$_SESSION['lgdin'] = false;
header('Location: http://localhost/memorial/login.php');
?>