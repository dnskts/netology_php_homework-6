<?php

session_start();

$visits = isset($_SESSION['page3_visits']) ? $_SESSION['page3_visits'] : 0;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница 4 — Результат</title>
</head>
<body>
    <h1>Страница 4 — Результат</h1>
    <p>Страница 3 была открыта: <?php echo $visits; ?> раз(а)</p>
    <br>
    <a href="page3.php">Перейти на страницу 3</a>
    <br><br>
    <a href="index.php">Вернуться на главную</a>
</body>
</html>
