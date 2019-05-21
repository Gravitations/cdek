<?php
require 'connect.php';
//mysql_set_charset('utf8');
$Order_number = trim($_REQUEST['Order_number']);
$insert_sql = "INSERT INTO tutorial.order_number (Order_number)" . // Указывает в какую таблицу и в какие поля ...
                   "VALUES('{$Order_number}');"; // ...записывать данные
mysqli_query($insert_sql); // отправляем данные в базу
?>
<html lang="java">
<head>
    <META HTTP-EQUIV='Refresh' CONTENT='1,url=jdbc:mysql://localhost:3306/?useLegacyDatetimeCode=false&amp&serverTimezone=UTC&useSSL=false'>
</head>
<body>
</body>
</html>