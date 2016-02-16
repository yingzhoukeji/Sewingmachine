<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
$id = $_GET["id"];
// 输出 echo "$id";


//包含数据库连接文件
include('conn.php');
$sql = "SELECT * FROM qb_buy_content where id=$id";
/* 定义变量sql, "SELECT * FROM qb_members" 是SQL指令，表示选取表qq中的数据 */
$result = mysql_query($sql); //执行SQL语句，获得结果集
/*下面就是选择性的输出打印了，由于不清楚你的具体情况给你个表格打印吧*/
//打印表格
while( $row = mysql_fetch_array($result) )
    /*逐行获取结果集中的记录，得到数组row */
{
    /*数组row的下标对应着数据库中的字段值 */
    $id = $row['id'];
    $title = $row['title'];
    $mid = $row['mid'];
    $fid = $row['fid'];
    $fname = $row['fname'];
    $hits = $row['hits'];
    $comments = $row['comments'];
    $posttime = $row['posttime'];
    $list = $row['list'];
    $uid = $row['uid'];
    $username = $row['username'];
    $titlecolor = $row['titlecolor'];
    $picurl = $row['picurl'];
    $picurl = ereg_replace("[[^>]*|]","",$picurl);
    // 过滤 内容
    $ispic = $row['ispic'];
    $yz = $row['yz'];
    $levels = $row['levels'];
    $levelstime = $row['levelstime'];
    $keywords = $row['keywords'];
    $ip = $row['ip'];
    $lastfid = $row['lastfid'];
    $money = $row['money'];
    $passwd = $row['passwd'];
    $begintime = $row['begintime'];
    $endtime = $row['endtime'];
    $lastview = $row['lastview'];
    $city_id = $row['lastview'];
    $picnum = $row['picnum'];
    $price = $row['price'];

    echo "$id";
    echo "$title";
    echo "$mid";
    echo "$fid";
    echo "$fname";
    echo "$hits";
    echo "$comments";
    echo "$posttime";
    echo "$list";
    echo "$uid";
    echo "$username";
    echo "$titlecolor";

    echo "$picurl";

    echo "$ispic";
    echo "$yz";
    echo "$levels";
    echo "$levelstime";
    echo "$keywords";
    echo "$ip";
    echo "$lastfid";
    echo "$money";
    echo "$passwd";
    echo "$begintime";
    echo "$endtime";
    echo "$lastview";
    echo "$city_id";
    echo "$picnum";
    echo "$price";

}
