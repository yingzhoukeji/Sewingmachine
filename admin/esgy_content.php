<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['uid'])){
    header("Location:login.html");
    exit();
}
$id = $_GET["fid"];
// 输出 echo "$id";


//包含数据库连接文件
include('conn.php');
$sql = "SELECT * FROM qb_esgy_sort where fid=$id";
/* 定义变量sql, "SELECT * FROM qb_members" 是SQL指令，表示选取表qq中的数据 */
$result = mysql_query($sql); //执行SQL语句，获得结果集
/*下面就是选择性的输出打印了，由于不清楚你的具体情况给你个表格打印吧*/
//打印表格
while( $row = mysql_fetch_array($result) )
    /*逐行获取结果集中的记录，得到数组row */
{
    /*数组row的下标对应着数据库中的字段值 */
    $fid = $row['fid'];
    $fup = $row['fup'];
    $name = $row['name'];
    $mid = $row['mid'];
    $class = $row['class'];
    $sons = $row['sons'];
    $type = $row['type'];
    $admin = $row['admin'];
    $list = $row['list'];
    $listorder = $row['listorder'];
    $passwd = $row['passwd'];
    $logo = $row['logo'];
    $descrip = $row['descrip'];
    $style = $row['style'];
    $template = $row['template'];
    $jumpurl = $row['jumpurl'];
    $maxperpage = $row['maxperpage'];
    $metatitle = $row['metatitle'];
    $metakeywords = $row['metakeywords'];
    $metadescription = $row['metadescription'];
    $allowcomment = $row['allowcomment'];
    $allowpost = $row['allowpost'];
    $allowviewtitle = $row['allowviewtitle'];
    $allowviewcontent = $row['allowviewcontent'];
    $allowdownload = $row['allowdownload'];
    $forbidshow = $row['forbidshow'];
    $config = $row['config'];
    $index_show = $row['index_show'];
    $contents = $row['contents'];
    $tableid = $row['tableid'];
    $dir_name = $row['dir_name'];
    $ifcolor = $row['ifcolor'];


    echo "$fid";
    echo "$fup";
    echo "$name";
    echo "$mid";
    echo "$class";
    echo "$sons";
    echo "$type";
    echo "$admin";
    echo "$list";
    echo "$listorder";
    echo "$passwd";
    echo "$logo";
    echo "$descrip";
    echo "$style";
    echo "$template";
    echo "$jumpurl";
    echo "$maxperpage";
    echo "$metatitle";
    echo "$metakeywords";
    echo "$metadescription";
    echo "$allowcomment";
    echo "$allowpost";
    echo "$allowviewtitle";
    echo "$allowviewcontent";
    echo "$allowdownload";
    echo "$forbidshow";
    echo "$config";
    echo "$index_show";
    echo "$contents";
    echo "$tableid";
    echo "$dir_name";
    echo "$ifcolor";

}

