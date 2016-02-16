<?php
//登入后访问
header("Content-type:text/html;charset=UTF-8");
//编码 UTF-8

include 'conn.php';

// 数据库连接 
// 总记录数
$sql = "SELECT uid  FROM  qb_members";
// 打开数据库的 qb_members 会员表 读取 uid 
$totalnums = totalnums($sql);
// 打开数据库 

$fnum = 30;
// 每页显示条数
$pagenum = ceil($totalnums / $fnum);
// 翻页数
@$tmp = $_GET['page'];
// 获取网页地址的当前分页地址页 比如  http://127.0.0.1/sewingmachine/merchant/index.php?page=2 这表示，30条一页现在第2页

//防止恶意翻页
if ($tmp > $pagenum)
    echo "<script>window.location.href='index.php'</script>";

//如果直接输入地址给跳掉

//计算分页起始值 如果tmp是空就显示0 要不就 显示 $_GET 获取的 数字
if ($tmp == "") {
    $num = 0;
} else {
    $num = ($tmp - 1) * $fnum;
}

// 打开数据库的 qb_members 会员表 读取 uid,username,password 按分页方式 显示 " . $num . ",$fnum"
$sql = "SELECT uid,username,password  FROM  qb_members ORDER BY uid DESC LIMIT " . $num . ",$fnum";
$result = doresult($sql);

// 遍历输出
while (! ! $rows = dolists($result)) {
    echo "第 " . $rows['uid'] . "条 --- ";
    echo "名字 " . $rows['username'] . " --- ";
    echo "密码 " . $rows['password'] . "<br>";
}

// 翻页链接
for ($i = 0; $i < $pagenum; $i ++) {
    echo "<a href=index.php?page=" . ($i + 1) . ">" . ($i + 1) . "</a>";
}
