<?php

$text = isset($_GET['text']) ? $_GET['text'] : 'Текст не передан';

header('Content-Type: text/plain; charset=UTF-8');
header('Content-Disposition: attachment; filename="download.txt"');

echo $text;
