<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}

echo "<form action=\"add_esgy_sorok.php\" method=\"POST\">";

echo "<input type=\"text\" name=\"fup\" value=\"\"><br>";
echo "<input type=\"text\" name=\"name\" value=\"\"><br>";
echo "<input type=\"text\" name=\"mid\" value=\"\"><br>";
echo "<input type=\"text\" name=\"class\" value=\"\"><br>";
echo "<input type=\"text\" name=\"sons\" value=\"\"><br>";
echo "<input type=\"text\" name=\"type\" value=\"\"><br>";
echo "<input type=\"text\" name=\"admin\" value=\"\"><br>";
echo "<input type=\"text\" name=\"list\" value=\"\"><br>";
echo "<input type=\"text\" name=\"listorder\" value=\"\"><br>";
echo "<input type=\"text\" name=\"passwd\" value=\"\"><br>";
echo "<input type=\"text\" name=\"logo\" value=\"\"><br>";
echo "<input type=\"text\" name=\"descrip\" value=\"\"><br>";
echo "<input type=\"text\" name=\"style\" value=\"\"><br>";


echo "<input type=\"submit\" name=\"提交\" value=\"提交\">";
echo "</form>";
