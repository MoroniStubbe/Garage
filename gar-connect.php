<?php
$host = "localhost";
$dbname = "garage";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $exception){
    echo $exception->getMessage();
}