<?php

$host = "localhost";
$db = "vrai";
$user = "root";
$pass = "root";
$charset = "utf8";

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_PERSISTENT => true
    ];
echo "connexion";
    $db = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>