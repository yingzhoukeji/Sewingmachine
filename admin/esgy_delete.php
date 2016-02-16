<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include('conn.php');
$id=$_GET["fid"];
//echo $id;
$exec="delete from qb_esgy_sort where fid=$id";
mysql_query($exec);
mysql_close();
header("Location:esgy_sort.php");
