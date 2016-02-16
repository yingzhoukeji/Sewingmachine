<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include('conn.php');
$id=$_GET["rid"];
//echo $id;
$exec="delete from qb_hy_company where rid=$id";
mysql_query($exec);
mysql_close();
header("Location:hy_company_list.php");
