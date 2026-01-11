<?php

session_start();

if (!isset($_SESSION['page3_visits'])) {
    $_SESSION['page3_visits'] = 0;
}

$_SESSION['page3_visits']++;

$visits = $_SESSION['page3_visits'];

if ($visits % 3 === 0) {
    header('Location: page4.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница 3 — Счётчик</title>
</head>
<body>
    <h1>Страница 3 — Счётчик посещений</h1>
    <p>Вы открыли эту страницу: <?php echo $visits; ?> раз(а)</p>
    <p>На каждое третье посещение происходит редирект на страницу 4.</p>
    <br>
    <a href="page3.php">Обновить страницу</a>
    <br><br>
    <a href="index.php">Вернуться на главную</a>
</body>
</html>
