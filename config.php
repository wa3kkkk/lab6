<?php
$host = 'localhost';
$dbname = 'online_shop';
$username = 'root';  
$password = '';      

try {
    $pdo = new PDO("mysql:host=$host;online_shop=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Помилка підключення до бази даних: " . $e->getMessage());
}
?>

