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
    //$template = $row['template'];
    //$jumpurl = $row['jumpurl'];
    //$maxperpage = $row['maxperpage'];
    //$metatitle = $row['metatitle'];
    //$metakeywords = $row['metakeywords'];
    //$metadescription = $row['metadescription'];
    //$allowcomment = $row['allowcomment'];
    //$allowpost = $row['allowpost'];
    //$allowviewtitle = $row['allowviewtitle'];
    //$allowviewcontent = $row['allowviewcontent'];
    //$allowdownload = $row['allowdownload'];
    //$forbidshow = $row['forbidshow'];
    //$config = $row['config'];
    //$index_show = $row['index_show'];
    //$contents = $row['contents'];
    //$tableid = $row['tableid'];
    //$dir_name = $row['dir_name'];
    //$ifcolor = $row['ifcolor'];

    echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"esgy_sort_ok.php\">";
    echo "<input type=\"text\" name=\"fup\" value=\"$fup\"><br>";
    echo "<input type=\"text\" name=\"name\" value=\"$name\"><br>";
    echo "<input type=\"text\" name=\"mid\" value=\"$mid\"><br>";
    echo "<input type=\"text\" name=\"class\" value=\"$class\"><br>";
    echo "<input type=\"text\" name=\"sons\" value=\"$sons\"><br>";
    echo "<input type=\"text\" name=\"type\" value=\"$type\"><br>";
    echo "<input type=\"text\" name=\"admin\" value=\"$admin\"><br>";
    echo "<input type=\"text\" name=\"list\" value=\"$list\"><br>";
    echo "<input type=\"text\" name=\"listorder\" value=\"$listorder\"><br>";
    echo "<input type=\"text\" name=\"passwd\" value=\"$passwd\"><br>";
    echo "<input type=\"text\" name=\"logo\" value=\"$logo\"><br>";
    echo "<input type=\"text\" name=\"descrip\" value=\"$descrip\"><br>";
    echo "<input type=\"text\" name=\"style\" value=\"$style\"><br>";
    //echo "<input type=\"text\" name=\"template\" value=\"$template\"><br>";
    //echo "<input type=\"text\" name=\"jumpurl\" value=\"$jumpurl\"><br>";
    //echo "<input type=\"text\" name=\"maxperpage\" value=\"$maxperpage\"><br>";
    //echo "<input type=\"text\" name=\"metatitle\" value=\"$metatitle\"><br>";
    //echo "<input type=\"text\" name=\"metakeywords\" value=\"$metakeywords\"><br>";
    //echo "<input type=\"text\" name=\"metadescription\" value=\"$metadescription\"><br>";
    //echo "<input type=\"text\" name=\"allowcomment\" value=\"$allowcomment\"><br>";
    //echo "<input type=\"text\" name=\"allowpost\" value=\"$allowpost\"><br>";
    //echo "<input type=\"text\" name=\"allowviewtitle\" value=\"$allowviewtitle\"><br>";
    //echo "<input type=\"text\" name=\"allowviewcontent\" value=\"$allowviewcontent\"><br>";
    //echo "<input type=\"text\" name=\"allowdownload\" value=\"$allowdownload\"><br>";
    //echo "<input type=\"text\" name=\"forbidshow\" value=\"$forbidshow\"><br>";
    //echo "<input type=\"text\" name=\"config\" value=\"$config\"><br>";
    //echo "<input type=\"text\" name=\"index_show\" value=\"$index_show\"><br>";
    //echo "<input type=\"text\" name=\"contents\" value=\"$contents\"><br>";
    //echo "<input type=\"text\" name=\"tableid\" value=\"$tableid\"><br>";
    //echo "<input type=\"text\" name=\"dir_name\" value=\"$dir_name\"><br>";
    //echo "<input type=\"text\" name=\"ifcolor\" value=\"$ifcolor\"><br>";


    echo "<input type=\"hidden\" name=\"fid\" value=\"$fid\">";
    echo "<input type=\"submit\" name=\"tijiao\" value=\"修改\" >";
    echo "</form>";
}

