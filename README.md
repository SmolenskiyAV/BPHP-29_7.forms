# Домашнее задание к занятию «3.2. Обработка HTML-форм и работа с файлами»

# Задание 1: традиционное знакомство с документацией

Большие проекты всегда содержат много файлов, поэтому навыки распределения кода по множеству файлов
просто необходимы. В разделе об объектно-ориентированном программировании мы ещё коснёмся этой темы,
но основы надо понять уже сейчас.

Напрямую работать с формами в современном мире веб-разработки надо редко, но создавать обработчики внешних запросов, создавая API-сервисы для клиентов ваших приложений, придётся часто.

Поэтому давайте познакомимся с разделами документации на эти темы:

* [include и require](https://www.php.net/manual/ru/function.include.php),
* [функции файловой системы](https://www.php.net/manual/ru/ref.filesystem.php),
* [работа с HTML-формами](https://www.php.net/manual/ru/tutorial.forms.php),
* [предопределённые переменные](https://www.php.net/manual/ru/reserved.variables.php),
* [загрузка файлов на сервер](https://www.php.net/manual/ru/features.file-upload.post-method.php),
* [функции JSON](https://www.php.net/manual/ru/ref.json.php).

В задании не надо ничего отправлять на проверку, но ознакомление с этой документацией поможет в дальнейшей работе с PHP.

# Задание 2: обрабатываем HTML-форму

## Описание
Задача — поэкспериментировать с формами, понять отличие GET и POST запросов.

Загрузка файлов на Repl имеет ограничения, поэтому протестируйте сначала код локально.

## Техническое задание
1. Создайте HTML-файл с формой, содержащей следующие поля:
    * `file_name` с подписью «с каким именем сохранить файл на сервере» (текстовое поле);
    * `content` с подписью «выберите файл» (поле для загрузки файла);
2. Обратите внимание на атрибуты `enctype` и `method` у формы.
3. Создайте PHP-файл `upload.php`, имя которого должно быть указано в атрибуте формы `action`.
4. Внутри файла `upload.php` необходимо проверить:
    * если поле `file_name` пустое, то выполнить редирект обратно на форму, для этого используйте функцию header из предыдущего занятия;
    * если файл не был передан на сервер, то тоже редиректнуть обратно на форму;
    * иначе сохранить файл на сервер в каталог `upload`, используя имя из поля `file_name` и
      отобразить полный путь к сохранённому файлу и размер файла.
