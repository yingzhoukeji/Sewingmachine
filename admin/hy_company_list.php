<?php

//登入后访问
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
include 'conn.php';
// 总记录数
$sql = "SELECT rid  FROM  qb_hy_company";
$totalnums = totalnums($sql);

// 每页显示条数
$fnum = 30;

// 翻页数
$pagenum = ceil($totalnums / $fnum);

// 页数常量
@$tmp = $_GET['page'];

//防止恶意翻页
if ($tmp > $pagenum)
    echo "<script>window.location.href='index.php'</script>";

//计算分页起始值
if ($tmp == "") {
    $num = 0;
} else {
    $num = ($tmp - 1) * $fnum;
}

// 查询语句
$sql = "SELECT *  FROM  qb_hy_company ORDER BY rid DESC LIMIT " . $num . ",$fnum";
$result = doresult($sql);

// 遍历输出
while (! ! $rows = dolists($result)) {
    echo "<a href=\"hy_company_data.php?rid=" . $rows['rid'] . "\">";
    echo $rows['rid'];
    echo $rows['title'];
    echo $rows['host'];
    echo $rows['fname'];
    echo $rows['uid'];
    echo $rows['username'];
    echo $rows['renzheng'];
    echo $rows['is_agent'];
    echo $rows['is_vip'];
    echo $rows['posttime'];
    echo $rows['list'];
    echo $rows['listorder'];
    echo $rows['picurl'];
    echo $rows['gz'];
    echo $rows['yz'];
    echo $rows['yzer'];
    echo $rows['yztime'];
    echo $rows['hits'];
    echo $rows['levels'];
    echo $rows['levelstime'];
    echo $rows['lastview'];
    echo $rows['content'];
    echo $rows['province_id'];
    echo $rows['city_id'];
    echo $rows['zone_id'];
    echo $rows['street_id'];
    echo $rows['qy_cate'];
    echo $rows['qy_saletype'];
    echo $rows['qy_regmoney'];
    echo $rows['qy_createtime'];
    echo $rows['qy_regplace'];
    echo $rows['qy_address'];
    echo $rows['qy_postnum'];
    echo $rows['qy_pro_ser'];
    echo $rows['my_buy'];
    echo $rows['my_trade'];
    echo $rows['qy_contact'];
    echo $rows['qy_contact_zhiwei'];
    echo $rows['qy_contact_sex'];
    echo $rows['qy_contact_tel'];
    echo $rows['qy_contact_mobile'];
    echo $rows['qy_contact_fax'];
    echo $rows['qy_contact_email'];
    echo $rows['qy_website'];
    echo $rows['qq'];
    echo $rows['msn'];
    echo $rows['skype'];
    echo $rows['ww'];
    echo $rows['bd_pics'];
    echo $rows['toptime'];
    echo $rows['if_homepage'];
    echo $rows['permit_pic'];
    echo $rows['guo_tax_pic'];
    echo $rows['di_tax_pic'];
    echo $rows['organization_pic'];
    echo $rows['idcard_pic'];
    echo $rows['gg_maps'];
    echo "<a href=\"hy_company_delete.php?rid=" . $rows['rid'] . "\">删除</a>";
    echo "<a href=\"hy_company_modify.php?rid=" . $rows['rid'] . "\">修改</a><br>";
}

// 翻页链接
for ($i = 0; $i < $pagenum; $i ++) {
    echo "<a href=hy_company_list.php?page=" . ($i + 1) . ">" . ($i + 1) . "</a>";
}
