<?php
function pdo_connect(){
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "iraders_db";
    try {
        return new PDO("mysql:host=" . $servername . ";dbname=" . $dbname . ";charset=utf8;",$username, $password);
    } catch (PDOExeception $e) {
        exit("Failed to connect");
    }

}
?>