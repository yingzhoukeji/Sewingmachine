<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include 'conn.php';
$fup = $_POST['fup'];
$fup = $_POST['fup'];
$name = $_POST['name'];
$mid = $_POST['mid'];
$class = $_POST['class'];
$sons = $_POST['sons'];
$type = $_POST['type'];
$admin = $_POST['admin'];
$list = $_POST['list'];
$listorder = $_POST['listorder'];
$passwd = $_POST['passwd'];
$logo = $_POST['logo'];
$descrip = $_POST['descrip'];
$style = $_POST['style'];
//$template = $_POST['template'];
//$jumpurl = $_POST['jumpurl'];
//$maxperpage = $_POST['maxperpage'];
//$metatitle = $_POST['metatitle'];
//$metakeywords = $_POST['metakeywords'];
//$metadescription = $_POST['metadescription'];
//$allowcomment = $_POST['allowcomment'];
//$allowpost = $_POST['allowpost'];
//$allowviewtitle = $_POST['allowviewtitle'];
//$allowviewcontent = $_POST['allowviewcontent'];
//$allowdownload = $_POST['allowdownload'];
//$forbidshow = $_POST['forbidshow'];
//$config = $_POST['config'];
//$index_show = $_POST['index_show'];
//$contents = $_POST['contents'];
//$tableid = $_POST['tableid'];
//$dir_name = $_POST['dir_name'];
//$ifcolor = $_POST['ifcolor'];

$search = "SELECT * FROM qb_esgy_sort WHERE name ='$name'";
$query=mysql_query($search);
$rows = mysql_num_rows($query);
//检查下有没有注册
if($rows > 0){
    echo "栏目题目存在";
    echo "<br><a href='index.php'>返回</a>";
    exit();
}else{
    $exec="INSERT INTO qb_esgy_sort(fup,name,mid,class,sons,type,admin,list,listorder,passwd,logo,descrip,style)VALUES('$fup','$name','$mid','$class','$sons','$type','$admin','$list','$listorder','$passwd','$logo','$descrip','$style')";
    mysql_query($exec,$connection);
    mysql_close($connection);
    header("Location:esgy_sort.php");
}
