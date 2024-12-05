<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM courses");
echo "<h1>Список курсів</h1>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>{$row['назва']} - {$row['опис']}</p>";
}
?>
