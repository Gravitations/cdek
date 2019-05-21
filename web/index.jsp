<%--
  Created by IntelliJ IDEA.
  User: Андрей
  Date: 14.05.2019
  Time: 14:58
  To change this template use File | Settings | File Templates.
--%>

<%@ page language="java" contentType="text/html; charset=utf-8"
         pageEncoding="utf-8"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<style type="text/css">
    button.button1 {
        color: #fff;
        background: #FFA500;
        padding: 5px;
        border-radius: 5px;
        border: 2px solid #FF8247;
    }
    button.button1:hover {
        background: #FF6347;
    }
</style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>cdekTest</title>

</head>
<body>
<form action="rec.php" method="post">
    <label>
        <input type="text" name="Order_button" placeholder="Заказ" size="30">
    </label><br/>
    <br/>
    <button class="button1">Не успеваю</button>

</form>
<% java.util.Date date = new java.util.Date();%>

</body>
</html>
