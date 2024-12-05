<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $назва = $_POST['назва'];
    $опис = $_POST['опис'];
    
    $stmt = $pdo->prepare("INSERT INTO courses (назва, опис) VALUES (:назва, :опис)");
    $stmt->execute(['назва' => $назва, 'опис' => $опис]);
    echo "Курс додано!";
}
?>
<form method="post">
    Назва курсу: <input type="text" name="назва">
    Опис: <textarea name="опис"></textarea>
    <button type="submit">Додати курс</button>
</form>
