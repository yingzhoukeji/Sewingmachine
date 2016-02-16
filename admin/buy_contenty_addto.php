<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include 'conn.php';
echo "<form action=\"buy_content_addtook.php\" method=\"POST\">";
echo "<input type=\"text\" name=\"title\" value=\"\"><br>";
echo "<input type=\"text\" name=\"mid\" value=\"\"><br>";


$db=new mysqli("localhost","root","123456ab","cisma") ;
if(mysqli_connect_errno()){
    echo "链接失败:".mysqli_connect_error();
    exit(); }
$db->query("set names utf8");
$result=$db->query("select name from qb_esgy_sort where fup=0");
while($row=$result->fetch_assoc()){
    //echo "--".$row['name']."--";
}

$result=$db->query("select * from qb_esgy_sort where fup=1");
while($row=$result->fetch_assoc()){
    echo $row['name']."";
}
//fid,fup,name
$result=$db->query("select * from qb_esgy_sort");
while($row=$result->fetch_assoc()){
    $arr[]=array($row['fid'],$row['fup'],$row['name']);
}

function fenlei($fup=0){
    global $arr;
    for($i=0;$i< count($arr);$i++){
        if($arr[$i][1]==$fup){
            echo "<option value=".$arr[$i][0].">".$arr[$i][2]."</option>";
            fenlei($arr[$i][0]);
        }
    }
}
echo "<select name=\"fid\">";
fenlei(); //使用这个函数.
echo "</select><br>";                                            //关闭连接

echo "<input type=\"text\" name=\"fname\" value=\"\"><br>";
echo "<input type=\"text\" name=\"hits\" value=\"\"><br>";
echo "<input type=\"text\" name=\"comments\" value=\"\"><br>";
echo "<input type=\"text\" name=\"posttime\" value=\"\"><br>";
echo "<input type=\"text\" name=\"list\" value=\"\"><br>";
echo "<input type=\"text\" name=\"uid\" value=\"\"><br>";
echo "<input type=\"text\" name=\"username\" value=\"\"><br>";
echo "<input type=\"text\" name=\"titlecolor\" value=\"\"><br>";
echo "<input type=\"text\" name=\"picurl\" value=\"\"><br>";
echo "<input type=\"text\" name=\"ispic\" value=\"\"><br>";
echo "<input type=\"text\" name=\"yz\" value=\"\"><br>";
echo "<input type=\"text\" name=\"levels\" value=\"\"><br>";
echo "<input type=\"text\" name=\"levelstime\" value=\"\"><br>";
echo "<input type=\"text\" name=\"keywords\" value=\"\"><br>";
echo "<input type=\"text\" name=\"ip\" value=\"\"><br>";
echo "<input type=\"text\" name=\"lastfid\" value=\"\"><br>";
echo "<input type=\"text\" name=\"money\" value=\"\"><br>";
echo "<input type=\"text\" name=\"passwd\" value=\"\"><br>";
echo "<input type=\"text\" name=\"begintime\" value=\"\"><br>";
echo "<input type=\"text\" name=\"endtime\" value=\"\"><br>";
echo "<input type=\"text\" name=\"lastview\" value=\"\"><br>";
echo "<input type=\"text\" name=\"city_id\" value=\"\"><br>";
echo "<input type=\"text\" name=\"picnum\" value=\"\"><br>";
echo "<input type=\"text\" name=\"price\" value=\"\"><br>";
echo "<input type=\"submit\" name=\"提交\" value=\"提交\">";
echo "</form>";
