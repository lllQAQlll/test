<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>修改新闻</title>
</head>
<style type="text/css">
.wrapper {width: 1000px;margin: 20px auto;}
h2 {text-align: center;}
.add {margin-bottom: 20px;}
.add a {text-decoration: none;color: #fff;background-color: green;padding: 6px;border-radius: 5px;}
td {text-align: center;}
</style>
<body>
<?php
    require "dbconfig.php";

     $link = @mysqli_connect(localhost,root,root) or die("提示：数据库连接失败！");
           
                // 选择数据库getaddrinfo失败                
                mysqli_select_db($link,'ygu');
                // 编码设置
                mysqli_set_charset($link,'utf8');
    
    //$id = $_GET['id'];(会报错))
    $id = isset($_COOKIE['id']) ? $_COOKIE['id'] : 0;
    //$id = $_GET['id'];
    $sql = 'select * from yg_student where id = {$id}';
    //$sql = mysqli_query($link,'SELECT * FROM yg_student WHERE id=$id');
    $sql_arr = mysqli_fetch_assoc($sql); 

?>

<form action="alter.php" method="post">
    <label>ID: </label><input type="text" name="id" value="<?php echo $sql_arr['id']?>">
    <label>用户ID：</label><input type="text" name="uid" value="<?php echo $sql_arr['uid']?>">
    <label>学号：</label><input type="text" name="student_number" value="<?php echo $sql_arr['student_number']?>">
    <label>身份证号：</label><input type="text" name="id_number" value="<?php echo $sql_arr['id_number']?>">
    <label>姓名：</label><input type="text" name="name" value="<?php echo $sql_arr['name']?>">
    <label>曾用名：</label><input type="text" name="old_name" value="<?php echo $sql_arr['old_name']?>">
    <label>性别: </label><input type="text" name="gender" value="<?php echo $sql_arr['gender']?>">
    <label>出生日期：</label><input type="data" name="birth" value="<?php echo $sql_arr['birth']?>">
    <label>邮政编码：</label><input type="text" name="postal" value="<?php echo $sql_arr['postal']?>">
    <label>电话号码：</label><input type="text" name="phone" value="<?php echo $sql_arr['phone']?>">
    <label>通讯住址：</label><input type="date" name="address" value="<?php echo $sql_arr['address']?>">
    <label>考生号：</label><input type="text" name="exam_number" value="<?php echo $sql_arr['exam_number']?>">
    <label>政治面貌: </label><input type="text" name="politics" value="<?php echo $sql_arr['politics']?>">
    <label>民族：</label><input type="text" name="nation" value="<?php echo $sql_arr['nation']?>">
    <label>国籍：</label><input type="text" name="nationality" value="<?php echo $sql_arr['nationality']?>">
    <label>类别：</label><input type="text" name="type" value="<?php echo $sql_arr['type']?>">
    <label>生源地：</label><input type="date" name="from" value="<?php echo $sql_arr['from']?>">
    <label>入学日期：</label><input type="data" name="admission_date" value="<?php echo $sql_arr['admission_date']?>">
    <label>婚姻状况: </label><input type="text" name="marriage" value="<?php echo $sql_arr['marriage']?>">
    <label>学院号：</label><input type="text" name="college_id" value="<?php echo $sql_arr['college_id']?>">
    <label>专业ID：</label><input type="text" name="major_instance_id" value="<?php echo $sql_arr['major_instance_id']?>">
    <label>原专业ID别：</label><input type="text" name="origin_major_instance_id" value="<?php echo $sql_arr['origin_major_instance_id']?>">
    <label>班级ID：</label><input type="date" name="class_id" value="<?php echo $sql_arr['class_id']?>">
    <label>原班级ID：</label><input type="text" name="origin_class_id" value="<?php echo $sql_arr['origin_class_id']?>">
    <label>在学情况: </label><input type="text" name="status" value="<?php echo $sql_arr['status']?>">
    <label>毕业和学位审核状态：</label><input type="text" name="graduation_status" value="<?php echo $sql_arr['graduation_status']?>">
    <label>毕业审核时间：</label><input type="data" name="graduation_date" value="<?php echo $sql_arr['graduation_date']?>">
    <label>学位审核时间：</label><input type="data" name="degree_date" value="<?php echo $sql_arr['degree_date']?>">
  
    <input type="submit" value="提交">
</form>

</body>
</html>