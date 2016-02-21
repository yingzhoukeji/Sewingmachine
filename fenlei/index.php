<?php
include ('conn.php');
//保护 conn.php

function enhuaList($pid=0,&$result = array(),$spac=0){
    /*
     *自定义 enhuaList 函数 （函数实际上是一个统一的代码块，你可以随时调用它。 ）
     * $pid=0
     * &$result = array()
     * $spac=0
    */
    $spac = $spac+2;
    // $spac 等于 $spac 加 2
    $sql="select * from pa_category where pid = $pid ";
    // $sql 功能等于 打开 数据库 里的  pa_category 表，* 全部字段 where 条件是按 pid 来显示 （$pid=0）
    $res = mysql_query($sql);
    // $res 功能等于 mysql_query 执行 $sql

    while($row = mysql_fetch_assoc($res)){
        /*
         * while 循环在指定条件为 true 时执行代码块。
         * $row 等于  mysql_fetch_assoc($res) 从结果集中取得一行作为关联数组
        */

        $row['name'] = str_repeat('&nbsp;',$spac). '--'.$row['name'];
        // $row['name']  = str_repeat  把字符串 "Shanghai " 重复 几 次：

        $result[] = $row;
        // 把 修改好的 $row 放到 $result[] 等价于 $result=array();
        enhuaList($row['cid'],$result,$spac);
        // enhuaList 有3个功能  $row['cid']
    }
    return $result;
    // 返回数据
}


// 方法1  =================================  数组调试
//$rs = enhuaList();
//print_r($rs);   //  以数组方式输出 调试

// 方法 2   ================================= 以 函数 建立 文本调试
/*
function longge($pid=0){
    // 设置一个龙哥方法 pid 默认 0
    $rs = enhuaList($pid);
    // rs 等于  enhuaList 数组
    $str = "-------------<br>";
    // $str 等于下面的代码
    foreach($rs as $key=>$val){
        // foreach 语句用于循环访问集合以获取所需信息
        //
        $str .= "{$val['name']}<br/>";
    }
    return $str .='-------------<br/>';
    // 返回 $str 数据 以文本方式
}
echo longge();
// 输出 显示   longge();
*/

// 方法 3   ================================= 以 函数 建立 文本输出 加了 id 设置
/*
function biaodi($pid=0,$selected=1){
    // 设置一方法biaodi方法 pid 默认 0 超控 优先显示的类别 selected
    $rs = enhuaList($pid);
    // rs 等于  enhuaList 数组
    $str = "<select name='cate'>";
    foreach($rs as $key=>$val){
        $selectedstr = '';
        // 优先显示的  selectedstr 等于 空
        if($val['cid'] == $selected){
            $selectedstr = "selected";
            // 优先显示的类别的id 是空，就显示默认值
        }
       $str .= "<option {$selectedstr}>{$val['name']}</option>";
    }
    return $str .='</select>';
}
*/
//  echo biaodi(0,2);
// 输出 显示  biaodi(0,2);

// ●●●●●●●●●●●●●●●●●●●●●●   练习

function longge($pid=0){
    // 设置一个龙哥方法 pid 默认 0
    $rs = enhuaList($pid);
    // rs 等于  enhuaList 数组
    $str = "栏目列表<br>";
    // $str 等于下面的代码
    foreach($rs as $key=>$val){
        // foreach 语句用于循环访问集合以获取所需信息
        //
        $str .= "<a href='list.php?cid={$val['cid']}'> {$val['name']}</a><br/>";
    }
    return $str .='----------';
    // 返回 $str 数据 以文本方式
}
echo longge();
// 输出 显示   longge();