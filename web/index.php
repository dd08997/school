<?php

define ('YII_DEBUG', true); // режим debug для вывода на экран подробных сообщений об ошибках
require (__DIR__ . '/../vendor/autoload.php'); // проверяет классы, если конкретный класс не загружен то загружает
require (__DIR__ . '/../vendor/yiisoft/yii2/Yii.php'); // шдавный модуль yii фреймворка
$config = require (__DIR__ . '/../config/web.php'); // загрузка конфигуратора
$app = new yii\web\Application($config); // запуск приложения с конфигурацией
$app-> run(); // запуск