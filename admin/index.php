<?php
header("Content-type:text/html;charset=UTF-8");
if(!isset($_POST['submit'])){
    header("Location:login.html");
}
session_start();
$_SESSION['views']=1;
// echo "Pageviews=". $_SESSION['views'];
// 输出 SESSION
// $_SESSION['username'];
// $_SESSION['uid'];

$username = htmlspecialchars($_POST['username']);
// 大于小于 这边
$password = MD5($_POST['password']);

//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select uid from qb_members where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['uid'] = $result['uid'];
    echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br /><br />';

    echo '  <a href="admin_list.php">会员列表</a><br />';
    echo '  <a href="addmember.php">添加会员</a><br /><br />';

    echo '  <a href="esgy_sort.php">分类列表</a><br />';
    echo '  <a href="add_esgy_sort.php">添加分类</a><br /><br />';

    echo '  <a href="hy_company_list.php">VIP列表</a><br />';
    echo '  <a href="hy_company_addto.php">添加VIP</a><br /><br />';

    echo '  <a href="buy_content_list.php">求购列表</a><br />';
    echo '  <a href="buy_contenty_addto.php">添加求购</a><br /><br />';

    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
