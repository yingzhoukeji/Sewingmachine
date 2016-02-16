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
$sql = "SELECT id  FROM  qb_buy_content";
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
$sql = "SELECT *  FROM  qb_buy_content ORDER BY id DESC LIMIT " . $num . ",$fnum";
$result = doresult($sql);

// 遍历输出
while (! ! $rows = dolists($result)) {
    echo "<a href=\"buy_content_data.php?id=" . $rows['id'] . "\">";
    echo $rows['id'];
    echo $rows['title'];
    echo $rows['mid'];
    echo $rows['fid'];
    echo $rows['fname'];
    echo $rows['hits'];
    echo $rows['comments'];
    echo $rows['posttime'];
    echo $rows['list'];
    echo $rows['uid'];
    echo $rows['username'];
    echo $rows['titlecolor'];
    echo $rows['picurl'];
    echo $rows['ispic'];
    echo $rows['yz'];
    echo $rows['levels'];
    echo $rows['levelstime'];
    echo $rows['keywords'];
    echo $rows['ip'];
    echo $rows['lastfid'];
    echo $rows['money'];
    echo $rows['passwd'];
    echo $rows['begintime'];
    echo $rows['endtime'];
    echo $rows['lastview'];
    echo $rows['city_id'];
    echo $rows['picnum'];
    echo $rows['price'];
    echo "<a href=\"buy_content_delete.php?id=" . $rows['id'] . "\">删除</a>";
    echo "<a href=\"buy_content_modify.php?id=" . $rows['id'] . "\">修改</a><br>";
}

// 翻页链接
for ($i = 0; $i < $pagenum; $i ++) {
    echo "<a href=buy_content_list.php?page=" . ($i + 1) . ">" . ($i + 1) . "</a>";
}
