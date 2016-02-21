<?php
include ('conn.php');
$id = $_GET['id'];
// cid 获取 url 的 cid 数字
// $sql = "SELECT *  FROM  pa_news ORDER BY uid DESC LIMIT " . $num . ",$fnum";
$sql = "select * from pa_news where id = $id ";
$res = mysql_query($sql);
// $res 功能等于 mysql_query 执行 $sql
while($row = mysql_fetch_assoc($res)){
    echo "<h1>" . $row['title'] . "</h1><br>";
    echo "--------------------------------------------<br>";
    echo "<div>" . $row['summary'] . "</div>";
    echo "--------------------------------------------<br>";
    echo "<div>" . $row['content'] . "</div>";
}

echo "<a href='index.php'>返回首页</a>";
