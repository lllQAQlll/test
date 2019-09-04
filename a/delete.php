<?php
// 处理删除操作的页面 
require "dbconfig.php";
// 连接mysql
 $link = @mysqli_connect(localhost,root,root) or die("提示：数据库连接失败！");
// 选择数据库
mysqli_select_db($link,'ygu');
// 编码设置
mysqli_set_charset($link,'utf8');
$id = isset($_COOKIE['id']) ? $_COOKIE['id'] : 0;
//删除指定数据  
mysqli_query($link,'DELETE FROM yg_student WHERE id={$id}') or die("删除数据出错!"); 
// 删除完跳转到新闻页
header("query.php");  