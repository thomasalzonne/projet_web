<?php
$user = "thomasalyl123456";
$pass = "Azerty31";
$conn = new PDO('mysql:host=thomasalyl123456.mysql.db;dbname=thomasalyl123456', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
mb_internal_encoding('UTF-8');
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
date_default_timezone_get();
session_start();
?>
