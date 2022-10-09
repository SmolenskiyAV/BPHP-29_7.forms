<?php
declare(strict_types=1);

$uploaddir = './UPLOAD/';
$uploadfile = $uploaddir . basename($_FILES['file_name']['name']);

if (move_uploaded_file($_FILES['file_name']['tmp_name'], $uploadfile)) {
    echo 'Файл корректен и был успешно загружен.' . "<br />";
    echo "<br />";
    echo 'Полный путь к сохранённому файлу: ' . $_FILES['file_name']['full_path'] . '<br />';
    echo 'Размер файла: ' . $_FILES['file_name']['size'] . 'Байт' . '<br />';
    echo "<br />";
} else {
    header('Location: http://localhost:8000/index.html');
    exit;
}

echo  'Отладочная информация:';
echo '<pre>';
var_dump($_FILES);
echo '</pre>';