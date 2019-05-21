<?php
//mysql_connect("localhost", "root", "Element11+"); // логин, пароль
//mysql_select_db("tutorial"); // имя бызы
$DB_SERVER="localhost";
$DB_USER_READER="root";
$DB_PASS_READER="Element11+";
$DB_NAME="tutorial";
$DB_PORT="8080"; /// Порт базы
$con = mysqli_connect($DB_SERVER, $DB_USER_READER, $DB_PASS_READER, $DB_NAME, $DB_PORT);
mysqli_set_charset($con, 'utf8');

$con = mysqli_init();
if (!$con) {
    die('mysqli_init завершилась провалом');
}

if (!mysqli_options($con, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Установка MYSQLI_INIT_COMMAND завершилась провалом');
}

if (!mysqli_options($con, MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Установка MYSQLI_OPT_CONNECT_TIMEOUT завершилась провалом');
}

if (!mysqli_real_connect($con, $DB_SERVER, $DB_USER_READER, $DB_PASS_READER, $DB_NAME, $DB_PORT)) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}
?>
