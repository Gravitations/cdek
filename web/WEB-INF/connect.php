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
