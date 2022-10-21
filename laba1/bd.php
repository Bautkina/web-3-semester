<?php 
    define('DB_HOST', 'localhost'); //Адрес
    define('DB_USER', 'sqluser'); //Имя пользователя
    define('DB_PASSWORD', 'password'); //Пароль
    define('DB_NAME', 'web5'); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>
