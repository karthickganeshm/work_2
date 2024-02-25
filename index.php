<?php
session_start();
include "Includes/function.php";
$pdo = pdo_connect();
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
include $page . '.php'; 
?>