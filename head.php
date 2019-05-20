<?php
 ob_start();
 session_start();
 if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name']))
	{
    header("location: Login/login.php");
    exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>MKT | INICIO</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="shortcut icon" href="assets/img/logo.ico">
	<link rel="stylesheet" href="assets/plugin/slider/flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</head>
