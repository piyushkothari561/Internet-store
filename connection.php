<?php
$dsn = 'mysql:host=v.je;dbname=piyush18400602'; //Data source Name
$username = 'v.je';
$password = 'v.je';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($dsn, $username, $password,$options);
 ?>