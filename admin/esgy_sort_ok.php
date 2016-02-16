<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include('conn.php');

$fid = $_POST['fid'];
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

if(empty($name)||empty($fid))
{
    echo "有数据为空";
    exit;
}
//$strsql = "update qb_members set username='$zhuti',password='$neirong' where uid='$id' limit 1 ";
//$strsql = "update qb_esgy_sort set fup='$fup',name='$name',mid='$mid',class='$class',sons='$sons',type='$type',admin='$admin',list='$list',listorder='$listorder',passwd='$passwd',logo='$logo',descrip='$descrip',style='$style',template='$template',jumpurl='$jumpurl',maxperpage='$maxperpage',metatitle='$metatitle',metakeywords='$metakeywords',metadescription='$metadescription',allowcomment='$allowcomment',allowpost='$allowpost',allowviewtitle='$allowviewtitle',allowviewcontent='$allowviewcontent',allowdownload='$allowdownload',forbidshow='$forbidshow',config='$config',index_show='$index_show',contents='$contents',tableid='$tableid',dir_name='$dir_name',ifcolor='$ifcolor' where fid='$fid' limit 1 ";
$strsql = "update qb_esgy_sort set fup='$fup',name='$name',mid='$mid',class='$class',sons='$sons',type='$type',admin='$admin',list='$list',listorder='$listorder',passwd='$passwd',logo='$logo',descrip='$descrip',style='$style' where fid='$fid' limit 1 ";
$result = @mysql_query($strsql);
if($result)
{
    //header(location:.getenv("HTTP_REFERER"));
    header("Location:esgy_sort.php");
    //echo "<script language=\"javascript\">alert('更新成功');history.go(-1)</script>";
    exit;
}