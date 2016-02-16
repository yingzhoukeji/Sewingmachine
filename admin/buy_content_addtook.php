<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include 'conn.php';
$title = $_POST['title'];
$mid = $_POST['mid'];
$fid = $_POST['fid'];
$fname = $_POST['fname'];
$hits = $_POST['hits'];
$comments = $_POST['comments'];
$posttime = $_POST['posttime'];
$list = $_POST['list'];
$uid = $_POST['uid'];
$username = $_POST['username'];
$titlecolor = $_POST['titlecolor'];
$picurl = $_POST['picurl'];
$ispic = $_POST['ispic'];
$yz = $_POST['yz'];
$levels = $_POST['levels'];
$levelstime = $_POST['levelstime'];
$keywords = $_POST['keywords'];
$ip = $_POST['ip'];
$lastfid = $_POST['lastfid'];
$money = $_POST['money'];
$passwd = $_POST['passwd'];
$begintime = $_POST['begintime'];
$endtime = $_POST['endtime'];
$lastview = $_POST['lastview'];
$city_id = $_POST['lastview'];
$picnum = $_POST['picnum'];
$price = $_POST['price'];

$search = "SELECT * FROM qb_buy_content WHERE name ='$title'";
$query=mysql_query($search);
$rows = mysql_num_rows($query);
//检查下有没有注册
if($rows > 0){
    echo "栏目题目存在";
    echo "<br><a href='index.php'>返回</a>";
    exit();
}else{
    $exec="INSERT INTO qb_buy_content(title,fid)VALUES('$title','$fid')";
    mysql_query($exec,$connection);
    mysql_close($connection);
    header("Location:buy_content_list.php");
}
