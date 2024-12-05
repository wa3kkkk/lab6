<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    
    $stmt = $pdo->prepare("DELETE FROM courses WHERE id = :id");
    $stmt->execute(['id' => $id]);
    echo "Курс видалено!";
}
?>
<form method="post">
    ID курсу: <input type="text" name="id">
    <button type="submit">Видалити курс</button>
</form>
