<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
$id = $_GET["rid"];
// 输出 echo "$id";
//包含数据库连接文件
include('conn.php');
$sql = "SELECT * FROM qb_hy_company where rid=$id";
/* 定义变量sql, "SELECT * FROM qb_members" 是SQL指令，表示选取表qq中的数据 */
$result = mysql_query($sql); //执行SQL语句，获得结果集
/*下面就是选择性的输出打印了，由于不清楚你的具体情况给你个表格打印吧*/
//打印表格
while( $row = mysql_fetch_array($result) )
    /*逐行获取结果集中的记录，得到数组row */
{
    /*数组row的下标对应着数据库中的字段值 */
    $rid = $row['rid'];
    $title = $row['title'];
    $host = $row['host'];
    $fname = $row['fname'];
    $uid = $row['uid'];
    $username = $row['username'];
    $renzheng = $row['renzheng'];
    $is_agent = $row['is_agent'];
    $is_vip = $row['is_vip'];
    $posttime = $row['posttime'];
    $list = $row['list'];
    $listorder = $row['listorder'];
    $picurl = $row['picurl'];
    $gz = $row['gz'];
    $yz = $row['yz'];
    $yzer = $row['yzer'];
    $yztime = $row['yztime'];
    $hits = $row['hits'];
    $levels = $row['levels'];
    $levelstime = $row['levelstime'];
    $lastview = $row['lastview'];
    $content = $row['content'];
    $province_id = $row['province_id'];
    $city_id = $row['city_id'];
    $zone_id = $row['zone_id'];
    $street_id = $row['street_id'];
    $qy_cate = $row['qy_cate'];
    $qy_saletype = $row['qy_saletype'];
    $qy_regmoney = $row['qy_regmoney'];
    $qy_createtime = $row['qy_createtime'];
    $qy_regplace = $row['qy_regplace'];
    $qy_address = $row['qy_address'];
    $qy_postnum = $row['qy_postnum'];
    $qy_pro_ser = $row['qy_pro_ser'];
    $my_buy = $row['my_buy'];
    $my_trade = $row['my_trade'];
    $qy_contact = $row['qy_contact'];
    $qy_contact_zhiwei = $row['qy_contact_zhiwei'];
    $qy_contact_sex = $row['qy_contact_sex'];
    $qy_contact_tel = $row['qy_contact_tel'];
    $qy_contact_mobile = $row['qy_contact_mobile'];
    $qy_contact_fax = $row['qy_contact_fax'];
    $qy_contact_email = $row['qy_contact_email'];
    $qy_website = $row['qy_website'];
    $qq = $row['qq'];
    $msn = $row['msn'];
    $skype = $row['skype'];
    $ww = $row['ww'];
    $bd_pics = $row['bd_pics'];
    $toptime = $row['toptime'];
    $if_homepage = $row['if_homepage'];
    $permit_pic = $row['permit_pic'];
    $guo_tax_pic = $row['guo_tax_pic'];
    $di_tax_pic = $row['di_tax_pic'];
    $organization_pic = $row['organization_pic'];
    $idcard_pic = $row['idcard_pic'];
    $gg_maps = $row['gg_maps'];

    echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"hy_company_modifyok.php\">";
    echo "$rid";
    echo "<input type=\"text\" name=\"title\" value=\"$title\"><br>";
    echo "<input type=\"text\" name=\"host\" value=\"$host\"><br>";
    echo "<input type=\"text\" name=\"fname\" value=\"$fname\"><br>";
    echo "<input type=\"text\" name=\"uid\" value=\"$uid\"><br>";
    echo "<input type=\"text\" name=\"username\" value=\"$username\"><br>";
    echo "<input type=\"text\" name=\"renzheng\" value=\"$renzheng\"><br>";
    echo "<input type=\"text\" name=\"is_agent\" value=\"$is_agent\"><br>";
    echo "<input type=\"text\" name=\"is_vip\" value=\"$is_vip\"><br>";
    echo "<input type=\"text\" name=\"posttime\" value=\"$posttime\"><br>";
    echo "<input type=\"text\" name=\"list\" value=\"$list\"><br>";
    echo "<input type=\"text\" name=\"listorder\" value=\"$listorder\"><br>";
    echo "<input type=\"text\" name=\"picurl\" value=\"$picurl\"><br>";
    echo "<input type=\"text\" name=\"gz\" value=\"$gz\"><br>";
    echo "<input type=\"text\" name=\"yz\" value=\"$yz\"><br>";
    echo "<input type=\"text\" name=\"yzer\" value=\"$yzer\"><br>";
    echo "<input type=\"text\" name=\"yztime\" value=\"$yztime\"><br>";
    echo "<input type=\"text\" name=\"hits\" value=\"$hits\"><br>";
    echo "<input type=\"text\" name=\"levels\" value=\"$levels\"><br>";
    echo "<input type=\"text\" name=\"levelstime\" value=\"$levelstime\"><br>";
    echo "<input type=\"text\" name=\"lastview\" value=\"$lastview\"><br>";
    echo "<input type=\"text\" name=\"content\" value=\"$content\"><br>";
    echo "<input type=\"text\" name=\"province_id\" value=\"$province_id\"><br>";
    echo "<input type=\"text\" name=\"city_id\" value=\"$city_id\"><br>";
    echo "<input type=\"text\" name=\"zone_id\" value=\"$zone_id\"><br>";
    echo "<input type=\"text\" name=\"street_id\" value=\"$street_id\"><br>";
    echo "<input type=\"text\" name=\"qy_cate\" value=\"$qy_cate\"><br>";
    echo "<input type=\"text\" name=\"qy_saletype\" value=\"$qy_saletype\"><br>";
    echo "<input type=\"text\" name=\"qy_regmoney\" value=\"$qy_regmoney\"><br>";
    echo "<input type=\"text\" name=\"qy_createtime\" value=\"$qy_createtime\"><br>";
    echo "<input type=\"text\" name=\"qy_regplace\" value=\"$qy_regplace\"><br>";
    echo "<input type=\"text\" name=\"qy_address\" value=\"$qy_address\"><br>";
    echo "<input type=\"text\" name=\"qy_postnum\" value=\"$qy_postnum\"><br>";
    echo "<input type=\"text\" name=\"qy_pro_ser\" value=\"$qy_pro_ser\"><br>";
    echo "<input type=\"text\" name=\"my_buy\" value=\"$my_buy\"><br>";
    echo "<input type=\"text\" name=\"my_trade\" value=\"$my_trade\"><br>";
    echo "<input type=\"text\" name=\"qy_contact\" value=\"$qy_contact\"><br>";
    echo "<input type=\"text\" name=\"qy_contact_zhiwei\" value=\"$qy_contact_zhiwei\"><br>";
    echo "<input type=\"text\" name=\"qy_contact_sex\" value=\"$qy_contact_sex\"><br>";
    echo "<input type=\"text\" name=\"qy_contact_tel\" value=\"$qy_contact_tel\"><br>";
    echo "<input type=\"text\" name=\"qy_contact_mobile\" value=\"$qy_contact_mobile\"><br>";
    echo "<input type=\"text\" name=\"qy_contact_fax\" value=\"$qy_contact_fax\"><br>";
    echo "<input type=\"text\" name=\"qy_contact_email\" value=\"$qy_contact_email\"><br>";
    echo "<input type=\"text\" name=\"qy_website\" value=\"$qy_website\"><br>";
    echo "<input type=\"text\" name=\"qq\" value=\"$qq\"><br>";
    echo "<input type=\"text\" name=\"msn\" value=\"$msn\"><br>";
    echo "<input type=\"text\" name=\"skype\" value=\"$skype\"><br>";
    echo "<input type=\"text\" name=\"ww\" value=\"$ww\"><br>";
    echo "<input type=\"text\" name=\"bd_pics\" value=\"$bd_pics\"><br>";
    echo "<input type=\"text\" name=\"toptime\" value=\"$toptime\"><br>";
    echo "<input type=\"text\" name=\"if_homepage\" value=\"$if_homepage\"><br>";
    echo "<input type=\"text\" name=\"permit_pic\" value=\"$permit_pic\"><br>";
    echo "<input type=\"text\" name=\"guo_tax_pic\" value=\"$guo_tax_pic\"><br>";
    echo "<input type=\"text\" name=\"di_tax_pic\" value=\"$di_tax_pic\"><br>";
    echo "<input type=\"text\" name=\"organization_pic\" value=\"$organization_pic\"><br>";
    echo "<input type=\"text\" name=\"idcard_pic\" value=\"$idcard_pic\"><br>";
    echo "<input type=\"text\" name=\"gg_maps\" value=\"$gg_maps\"><br>";

    echo "<input type=\"hidden\" name=\"rid\" value=\"$rid\">";
    echo "<input type=\"submit\" name=\"tijiao\" value=\"修改\" >";
    echo "</form>";
}

