<?php
$con = mysql_connect("localhost","peter","abc123");
// 数据库 连接说明
if (!$con){
  die('Could not connect: ' . mysql_error());
  }

// some code

?>