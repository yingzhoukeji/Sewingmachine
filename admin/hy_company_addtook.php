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
$host = $_POST['host'];
$fname = $_POST['fname'];
$uid = $_POST['uid'];
$username = $_POST['username'];
$renzheng = $_POST['renzheng'];
$is_agent = $_POST['is_agent'];
$is_vip = $_POST['is_vip'];
$posttime = $_POST['posttime'];
$list = $_POST['list'];
$listorder = $_POST['listorder'];
$picurl = $_POST['picurl'];
$gz = $_POST['gz'];
$yz = $_POST['yz'];
$yzer = $_POST['yzer'];
$yztime = $_POST['yztime'];
$hits = $_POST['hits'];
$levels = $_POST['levels'];
$levelstime = $_POST['levelstime'];
$lastview = $_POST['lastview'];
$content = $_POST['content'];
$province_id = $_POST['province_id'];
$city_id = $_POST['city_id'];
$zone_id = $_POST['zone_id'];
$street_id = $_POST['street_id'];
$qy_cate = $_POST['qy_cate'];
$qy_saletype = $_POST['qy_saletype'];
$qy_regmoney = $_POST['qy_regmoney'];
$qy_createtime = $_POST['qy_createtime'];
$qy_regplace = $_POST['qy_regplace'];
$qy_address = $_POST['qy_address'];
$qy_postnum = $_POST['qy_postnum'];
$qy_pro_ser = $_POST['qy_pro_ser'];
$my_buy = $_POST['my_buy'];
$my_trade = $_POST['my_trade'];
$qy_contact = $_POST['qy_contact'];
$qy_contact_zhiwei = $_POST['qy_contact_zhiwei'];
$qy_contact_sex = $_POST['qy_contact_sex'];
$qy_contact_tel = $_POST['qy_contact_tel'];
$qy_contact_mobile = $_POST['qy_contact_mobile'];
$qy_contact_fax = $_POST['qy_contact_fax'];
$qy_contact_email = $_POST['qy_contact_email'];
$qy_website = $_POST['qy_website'];
$qq = $_POST['qq'];
$msn = $_POST['msn'];
$skype = $_POST['skype'];
$ww = $_POST['ww'];
$bd_pics = $_POST['bd_pics'];
$toptime = $_POST['toptime'];
$if_homepage = $_POST['if_homepage'];
$permit_pic = $_POST['permit_pic'];
$guo_tax_pic = $_POST['guo_tax_pic'];
$di_tax_pic = $_POST['di_tax_pic'];
$organization_pic = $_POST['organization_pic'];
$idcard_pic = $_POST['idcard_pic'];
$gg_maps = $_POST['gg_maps'];

$search = "SELECT * FROM qb_hy_company WHERE name ='$title'";
$query=mysql_query($search);
$rows = mysql_num_rows($query);
//检查下有没有注册
if($rows > 0){
    echo "栏目题目存在";
    echo "<br><a href='index.php'>返回</a>";
    exit();
}else{
    $exec="INSERT INTO qb_hy_company(title)VALUES('$title')";
    mysql_query($exec,$connection);
    mysql_close($connection);
    header("Location:hy_company_list.php");
}
