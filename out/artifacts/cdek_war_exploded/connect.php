<!doctype html>
<html lang="ru">
<head>
    <title>Панель</title>
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

<?php
//Если переменная Name передана
if (isset($_POST["Name"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($con, "INSERT INTO `tutorial`.order_number (`Order_number`, `Data_Time`) VALUES ('{$_POST['Name']}', '{$_POST['Price']}')");
    //Если вставка прошла успешно
    if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($con) . '</p>';
    }
}
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Наименование:</td>
            <td><label>
                    <input type="text" name="Name">
                </label></td>
        </tr>
        <tr>
            <td>Цена:</td>
            <td><label>
                    <input type="text" name="Price" size="3">
                </label> руб.</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="OK"></td>
        </tr>
    </table>
</form>
</body>
</html>

