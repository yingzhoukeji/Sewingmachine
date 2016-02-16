<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include('conn.php');
$id = $_POST["id"];
$zhuti = $_POST["zhuti"];

//$neirong = $_POST["neirong"];   不加密 密码
$neirong = MD5($_POST['neirong']); //加密 密码
//echo $id,$zhuti,$neirong;

if(empty($zhuti)||empty($neirong))
{
    echo "有数据为空";
    exit;
}
//$strsql = "update qb_members set uid='$id',username='$zhuti',password='$neirong'";
$strsql = "update qb_members set username='$zhuti',password='$neirong' where uid='$id' limit 1 ";
$result = @mysql_query($strsql);
if($result)
{
    //header(location:.getenv("HTTP_REFERER"));
    header("Location:admin_list.php");
    //echo "<script language=\"javascript\">alert('更新成功');history.go(-1)</script>";
    exit;
}