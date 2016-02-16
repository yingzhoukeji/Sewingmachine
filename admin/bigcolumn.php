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
$sql = "SELECT fup  FROM  qb_esgy_sort";
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
//$sql = "SELECT * FROM qb_members where uid=$id";
$sql = "SELECT * FROM  qb_esgy_sort where fup=0 ORDER BY fid DESC LIMIT " . $num . ",$fnum";
//$sql = "SELECT fid,fup,name,mid,class,sons,type,admin,list,listorder,passwd,logo,descrip,style,template  FROM  qb_esgy_sort ORDER BY fid DESC LIMIT " . $num . ",$fnum";
$result = doresult($sql);

echo "<a href=\"esgy_sort.php\">显示全部栏目</a><br><br>";
// 遍历输出
while (! ! $rows = dolists($result)) {
    echo "<a href=\"smallcolumns.php?fid=" . $rows['fid'] . "\">";
    echo $rows['fid'];
    echo $rows['name'];
    echo $rows['mid'];
    echo $rows['class'];
    echo $rows['sons'];
    echo $rows['type'];
    echo $rows['admin'];
    echo $rows['list'];
    echo $rows['listorder'];
    echo $rows['passwd'];
    echo $rows['logo'];
    echo $rows['descrip'];
    echo $rows['style'];
    //echo $rows['template'];
    //echo $rows['jumpurl'];
    //echo $rows['maxperpage'];
    //echo $rows['metatitle'];
    //echo $rows['metakeywords'];
    //echo $rows['metadescription'];
    //echo $rows['allowcomment'];
    //echo $rows['allowpost'];
    //echo $rows['allowviewtitle'];
    //echo $rows['allowviewcontent'];
    //echo $rows['allowdownload'];
    //echo $rows['forbidshow'];
    //echo $rows['config'];
    //echo $rows['index_show'];
    //echo $rows['contents'];
    //echo $rows['tableid'];
    //echo $rows['dir_name'];
    //echo $rows['ifcolor'];
    echo "</a><br><br>";
}



// 翻页链接
for ($i = 0; $i < $pagenum; $i ++) {
    echo "<a href=bigcolumn.php?page=" . ($i + 1) . ">" . ($i + 1) . "</a>";
}
