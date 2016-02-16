<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include 'conn.php';
$username = $_POST["username"];
//$password = $_POST["password"];
$password = MD5($_POST['password']);

$search = "SELECT * FROM qb_members WHERE username ='$username'";
$query=mysql_query($search);
$rows = mysql_num_rows($query);
//检查下有没有注册
if($rows > 0){
    echo "用户名已被注册，请重新注册";
    echo "<br><a href='index.php'>重新注册</a>";
    exit();
}else{
    $exec="INSERT INTO qb_members(username,password)VALUES('$username','$password')";
    mysql_query($exec,$connection);
    mysql_close($connection);
    header("Location:admin_list.php");
}
/*
  直接插入数据
//$exec="insert into qb_members (username,password) values ('".$_POST["username"]."','".$_POST["password"]."')";
$exec="INSERT INTO qb_members(username,password)VALUES('$username','$password')";
mysql_query($exec,$connection);
mysql_close($connection);
header("Location:admin_list.php");
*/