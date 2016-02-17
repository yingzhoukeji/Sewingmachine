<?php
error_reporting(E_ALL ^ E_DEPRECATED);                                           //底版本 报错

$db_host='localhost';
$db_database='cisma';
$db_username='root';
$db_password='';
$connection=mysql_connect($db_host,$db_username,$db_password);                    //连接到数据库
mysql_query("set names 'utf8'");                                                  //编码转化
if(!$connection){
    die("无法连接到数据库:</br>".mysql_error());                                //诊断连接错误
}
$db_selecct=mysql_select_db($db_database);                                       //选择数据库
if(!$db_selecct) {
    die("不能到数据库</br>".mysql_error());
}

// 数据库连接常量
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_NAME', 'cisma');


// 连接数据库
function conn()
{
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    mysqli_query($conn, "set names utf8");
    return $conn;
}

//获得结果集
function doresult($sql){
    $result=mysqli_query(conn(), $sql);
    return  $result;
}

//结果集转为对象集合
function dolists($result){
    return mysqli_fetch_array($result, MYSQL_ASSOC);
}

function totalnums($sql) {
    $result=mysqli_query(conn(), $sql);
    return $result->num_rows;
}
// 关闭数据库
function closedb()
{
    if (! mysqli_close()) {
        exit('关闭异常');
    }
}