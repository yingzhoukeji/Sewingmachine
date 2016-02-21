<?php
include ('conn.php');
//连接数据库文件

// http://www.frj.com:8080/fenlei/list.php?cid=1&page=1
$cid = $_GET['cid'];

// 总 ID 数
$sql = "SELECT id  FROM  pa_news";
$totalnums = mysql_query($sql);
// 每页显示条数
$fnum = 20;
$pagenum = ceil($totalnums / $fnum);
// 翻页数
@$cid = $_GET['page'];
// 页数常量

//防止恶意翻页
if ($cid > $pagenum)
    echo "<script>window.location.href='index.php'</script>";
//计算分页起始值
if ($cid == "") {
    $num = 0;
} else {
    $num = ($cid - 1) * $fnum;
}

// $sql = "SELECT *  FROM  pa_news ORDER BY uid DESC LIMIT " . $num . ",$fnum";
$sql = "select * from pa_news  ORDER BY id  DESC LIMIT " . $num .",$fnum";
// 执行SQL 语句
$res = mysql_query($sql);
// $res 功能等于 mysql_query 执行 $sql
while($row = mysql_fetch_assoc($res)){
    // 循环输出
    echo "<a href='nr.php?id=" . $row['id'] . "'>" . $row['title'] . "</a><br>";
}



echo "<br><br><br>";



// 翻页链接
for ($i = 0; $i < $pagenum; $i ++) {
    echo "<a href=list.php?cid=$cid&page=" . ($i + 1) . ">" . ($i + 1) . "</a>";
}


echo "<br><br><br><br><br><br><a href='index.php'>返回首页</a>";
