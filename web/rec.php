<html lang="java">
<head>
    <META HTTP-EQUIV='Refresh' CONTENT='1,URL=index.jsp'>
    <title>SQL</title>
</head>
<body>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/web/connect.php";
$Order_number = trim($_REQUEST['Order_button']);
$insert_sql = "INSERT INTO tutorial.order_number (Order_number)" . // Указывает в какую таблицу и в какие поля ...
    "VALUES('{$Order_number}');"; // ...записывать данные

mysqli_query($con, $insert_sql); // отправляем данные в базу

?>
</body>
</html>