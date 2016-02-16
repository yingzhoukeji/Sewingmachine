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
$sql = "SELECT uid  FROM  qb_members";
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
$sql = "SELECT uid,username,password  FROM  qb_members ORDER BY uid DESC LIMIT " . $num . ",$fnum";
$result = doresult($sql);

// 遍历输出
while (! ! $rows = dolists($result)) {
    echo "<a href=\"hismessage.php?uid=" . $rows['uid'] . "\">";
    echo $rows['uid'] . " " . $rows['username'] . " " . $rows['password'] . "</a>";
    echo "<a href=\"delete.php?uid=" . $rows['uid'] . "\">删除</a>";
    echo "<a href=\"editprofile.php?uid=" . $rows['uid'] . "\">修改</a><br>";
}

// 翻页链接
for ($i = 0; $i < $pagenum; $i ++) {
    echo "<a href=admin_list.php?page=" . ($i + 1) . ">" . ($i + 1) . "</a>";
}
