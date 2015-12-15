<?php
defined('myeshop') or die('Доступ запрещён!');
$db_host		= 'mysql8.000webhost.com';
$db_user		= 'a6580069_shop';
$db_pass		= '523521p';
$db_database	= 'a6580069_shop'; 

$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die("Нет соединения с БД ".mysql_error());
mysql_query("SET names cp1251");
?>