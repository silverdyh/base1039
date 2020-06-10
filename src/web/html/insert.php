<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP與MySQL建立網頁資料庫</title>
</head>
<body>
<?php
   $dbhost = '127.0.0.1';
   $dbuser = 'hj';
   $dbpass = 'test1234';
   $dbname = 'testbd';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
   mysql_query("SET NAMES 'utf8'");
   mysql_select_db($dbname);
?>
</body>
</html>