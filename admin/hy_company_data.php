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



    echo "$rid";
    echo "$title";
    echo "$host";
    echo "$fname";
    echo "$uid";
    echo "$username";
    echo "$renzheng";
    echo "$is_agent";
    echo "$is_vip";
    echo "$posttime";
    echo "$list";
    echo "$listorder";
    echo "$picurl";
    echo "$gz";
    echo "$yz";
    echo "$yzer";
    echo "$yztime";
    echo "$hits";
    echo "$levels";
    echo "$levelstime";
    echo "$lastview";
    echo "$content";
    echo "$province_id";
    echo "$city_id";
    echo "$zone_id";
    echo "$street_id";
    echo "$qy_cate";
    echo "$qy_saletype";
    echo "$qy_regmoney";
    echo "$qy_createtime";
    echo "$qy_regplace";
    echo "$qy_address";
    echo "$qy_postnum";
    echo "$qy_pro_ser";
    echo "$my_buy";
    echo "$my_trade";
    echo "$qy_contact";
    echo "$qy_contact_zhiwei";
    echo "$qy_contact_sex";
    echo "$qy_contact_tel";
    echo "$qy_contact_mobile";
    echo "$qy_contact_fax";
    echo "$qy_contact_email";
    echo "$qy_website";
    echo "$qq";
    echo "$msn";
    echo "$skype";
    echo "$ww";
    echo "$bd_pics";
    echo "$toptime";
    echo "$if_homepage";
    echo "$permit_pic";
    echo "$guo_tax_pic";
    echo "$di_tax_pic";
    echo "$organization_pic";
    echo "$idcard_pic";
    echo "$gg_maps";
    echo "<a href=\"hy_company_buy.php?uid=$uid\">求购信息</a>";
}

