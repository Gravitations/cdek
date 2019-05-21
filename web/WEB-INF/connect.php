<!doctype html>
<html lang="ru">
<head>
    <title>SQL</title>
</head>
<body>
<?php
$DB_SERVER="localhost";
$DB_USER_READER="root";
$DB_PASS_READER="Element11+";
$DB_NAME="tutorial";
$DB_PORT="8080"; /// Порт базы
$con = mysqli_connect($DB_SERVER, $DB_USER_READER, $DB_PASS_READER, $DB_NAME, $DB_PORT);
mysqli_set_charset($con, 'utf8');
if (!$con) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
?>
</body>
</html>