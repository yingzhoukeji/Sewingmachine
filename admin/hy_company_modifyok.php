<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include('conn.php');
$rid = $_POST["rid"];
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

if(empty($title)||empty($username))
{
    echo "有数据为空";
    exit;
}

$strsql = "update qb_hy_company set title='$title',username='$username' where rid='$rid' limit 1 ";
//$strsql = "update qb_hy_company set title='$title',host='$host',fname='$fname',uid='$uid',username='$username',renzheng='$renzheng',is_agent='$is_agent',is_vip='$is_vip',posttime='$posttime',list='$list',listorder='$listorder',picurl='$picurl',gz='$gz',yz='$yz',yzer='$yzer',yztime='$yztime',hits='$hits',levels='$levels',levelstime='$levelstime',lastview='$lastview',content='$content',province_id='$province_id',city_id='$city_id'zone_id='$zone_id',street_id='$street_id',qy_cate='$qy_cate',qy_saletype='$qy_saletype',qy_regmoney='$qy_regmoney',qy_createtime='$qy_createtime',qy_regplace='$qy_regplace',qy_address='$qy_address',qy_postnum='$qy_postnum',qy_pro_ser='$qy_pro_ser',my_buy='$my_buy',my_trade='$my_trade',qy_contact='$qy_contact',qy_contact_zhiwei='$qy_contact_zhiwei',qy_contact_sex='$qy_contact_sex',qy_contact_tel='$qy_contact_tel',qy_contact_mobile='$qy_contact_mobile',qy_contact_fax='$qy_contact_fax',qy_contact_email='$qy_contact_email',qy_website='$qy_website',qq='$qq',msn='$msn',skype='$skype',ww='$ww',bd_pics='$bd_pics',toptime='$toptime',if_homepage='$if_homepage',permit_pic='$permit_pic',guo_tax_pic='$guo_tax_pic',di_tax_pic='$di_tax_pic',organization_pic='$organization_pic',idcard_pic='$idcard_pic',gg_maps='$gg_maps' where rid='$rid' limit 1 ";
$result = @mysql_query($strsql);
if($result)
{
    //header(location:.getenv("HTTP_REFERER"));
    header("Location:hy_company_list.php");
    //echo "<script language=\"javascript\">alert('更新成功');history.go(-1)</script>";
    exit;
}
