<?php
error_reporting(E_ALL ^ E_DEPRECATED);
/*
 * error_reporting   如果PHP 版本高 ，语言没有错误，加上这个解决兼容问题
 * 禁止 版本问题产生的错误 报错
 * */
header("Content-type:text/html;charset=UTF-8");
/*
 * 让显示方式 是 用UTF - 来显示
 * */

$db_yuming='127.0.0.1';    //  数据库的主机地址
$db_yonghuming='root';     //   访问数据库的用户名
$db_mima='123456';         //   访问数据库的密码
$db_shujukum='tzslx';      //   数据库的名称

$enhua = mysql_connect($db_yuming,$db_yonghuming,$db_mima) or die(mysql_error());
/*
 * 定义了恩华 $enhua
 * $enhua = mysql_connect（打开一个到 MySQL 服务器的连接 (主机地址,用户名,密码) ）
 * or die 前面程序如果错误（停止程序）(返回一个错误 mysql_error()返回一个 MySQL 操作产生的文本错误信息)
 * */
mysql_select_db($db_shujukum,$enhua) or die (mysql_error());
/*
 * mysql_select_db 设置活动的 MySQL 数据库。 如果成功，则该函数返回 true。如果失败，则返回 false。
 * 打开 $db_shujukum 数据库 用 $enhua 方式打开，如果打不开 返回 错误信息
 * */
mysql_query("set names 'utf8'") or die ('编码设置错误');
/*
 * 函数执行一条 MySQL 查询
 * 全部是查出的数据用UTF-8 显示，
 * */