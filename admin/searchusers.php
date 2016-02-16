<?php
error_reporting(E_ALL ^ E_DEPRECATED);//底版本 报错
$q=$_GET["q"];//全部小写化
$q=strtolower($q);//非空验证
if(isset($q) && $q != '') {
    $con = mysql_connect("localhost","root","123456ab");
    mysql_query("set names 'utf8'"); //编码转化
    if(!$con) {
        die('Could not connect: ' .mysql_error());
    }
    mysql_select_db("cisma",$con);

    $sql = "select * from qb_members"; //$sql="SELECT FirstName FROM Persons where Firstname like '%$q%'";
    $result =mysql_query($sql,$con);
    while($row = mysql_fetch_array($result)) {//匹配判断
        if(stristr(strtolower($row['username']),$q)) {
            //echo "-----------------Persons-----------------";
            echo /* "firstname:" .*/ $row['username'] . "<br />";
            //echo "lastname:" . $row['LastName'] . "<br />";
            //echo "age:" . $row['Age'] . "<br />";
        }//echo $row['FirstName'] . "<br />";
    }
    mysql_close($con);
}