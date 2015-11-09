<?php
/*
链接数据库
*/
$conn=mysql_connect("localhost:3306","root","")or die("数据库连接失败");
mysql_select_db("todos",$conn)or die("db连接失败");
mysql_set_charset("utf8");
?>