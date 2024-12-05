<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $назва = $_POST['назва'];
    $опис = $_POST['опис'];
    
    $stmt = $pdo->prepare("UPDATE courses SET назва = :назва, опис = :опис WHERE id = :id");
    $stmt->execute(['назва' => $назва, 'опис' => $опис, 'id' => $id]);
    echo "Курс оновлено!";
}
?>
<form method="post">
    ID курсу: <input type="text" name="id">
    Назва курсу: <input type="text" name="назва">
    Опис: <textarea name="опис"></textarea>
    <button type="submit">Оновити курс</button>
</form>
