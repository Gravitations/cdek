<?php
include 'connect.php';
$Order_number = trim($_REQUEST['Order_number']);
$insert_sql = "INSERT INTO tutorial.order_number (Order_number)" . // Указывает в какую таблицу и в какие поля ...
                   "VALUES('{$Order_number}');"; // ...записывать данные

mysqli_query($link, $insert_sql); // отправляем данные в базу

?>
<html lang="ru">
<head>
    <META HTTP-EQUIV='Refresh' CONTENT='1,URL=index.jsp'>
    <title>rec</title>
</head>
<body>
</body>
</html>