<?php 
require "libs/rb-mysql.php";

R::setup ('mysql:host=localhost; dbname=mydb', 'root', '848254900789'); //подключаем базу данных

if(!R::testConnection()) die('Отсутствует соединение с БД'); // проверяем подключение к БД

//session_start(); // создаем сессию для авторизации
?>