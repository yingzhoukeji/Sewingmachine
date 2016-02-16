<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}

echo "<form action=\"addok.php\" method=\"POST\">";
echo "帐号：<input type=\"text\" size=25 name=\"username\" value=\"\">";
echo "密码：<input type=\"text\" size=25 name=\"password\" value=\"\">";
echo "<input type=\"submit\" name=\"提交\" value=\"提交\">";
echo "</form>";
