<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
$id = $_GET["uid"];
// 输出 echo "$id";


//包含数据库连接文件
include('conn.php');
$sql = "SELECT * FROM qb_members where uid=$id";
/* 定义变量sql, "SELECT * FROM qb_members" 是SQL指令，表示选取表qq中的数据 */
$result = mysql_query($sql); //执行SQL语句，获得结果集
/*下面就是选择性的输出打印了，由于不清楚你的具体情况给你个表格打印吧*/
//打印表格
while( $row = mysql_fetch_array($result) )
    /*逐行获取结果集中的记录，得到数组row */
{
    /*数组row的下标对应着数据库中的字段值 */
    $uid = $row['uid'];
    $username = $row['username'];

    echo "<td>$uid</td>";
    echo "<td>$username</td>";
}

