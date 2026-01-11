<?php

http_response_code(404);
header('HTTP/1.1 404 Not Found');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>404 - Страница не найдена</title>
</head>
<body>
    <h1>404 - Страница не найдена</h1>
    <p>Запрашиваемая страница не существует.</p>
    <a href="index.php">Вернуться на главную</a>
</body>
</html>
