<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>�޸�����</title>
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

     $link = @mysqli_connect(localhost,root,root) or die("��ʾ�����ݿ�����ʧ�ܣ�");
           
                // ѡ�����ݿ�getaddrinfoʧ��                
                mysqli_select_db($link,'ygu');
                // ��������
                mysqli_set_charset($link,'utf8');
    
    //$id = $_GET['id'];(�ᱨ��))
    $id = isset($_COOKIE['id']) ? $_COOKIE['id'] : 0;
    //$id = $_GET['id'];
    $sql = 'select * from yg_student where id = {$id}';
    //$sql = mysqli_query($link,'SELECT * FROM yg_student WHERE id=$id');
    $sql_arr = mysqli_fetch_assoc($sql); 

?>

<form action="alter.php" method="post">
    <label>ID: </label><input type="text" name="id" value="<?php echo $sql_arr['id']?>">
    <label>�û�ID��</label><input type="text" name="uid" value="<?php echo $sql_arr['uid']?>">
    <label>ѧ�ţ�</label><input type="text" name="student_number" value="<?php echo $sql_arr['student_number']?>">
    <label>���֤�ţ�</label><input type="text" name="id_number" value="<?php echo $sql_arr['id_number']?>">
    <label>������</label><input type="text" name="name" value="<?php echo $sql_arr['name']?>">
    <label>��������</label><input type="text" name="old_name" value="<?php echo $sql_arr['old_name']?>">
    <label>�Ա�: </label><input type="text" name="gender" value="<?php echo $sql_arr['gender']?>">
    <label>�������ڣ�</label><input type="data" name="birth" value="<?php echo $sql_arr['birth']?>">
    <label>�������룺</label><input type="text" name="postal" value="<?php echo $sql_arr['postal']?>">
    <label>�绰���룺</label><input type="text" name="phone" value="<?php echo $sql_arr['phone']?>">
    <label>ͨѶסַ��</label><input type="date" name="address" value="<?php echo $sql_arr['address']?>">
    <label>�����ţ�</label><input type="text" name="exam_number" value="<?php echo $sql_arr['exam_number']?>">
    <label>������ò: </label><input type="text" name="politics" value="<?php echo $sql_arr['politics']?>">
    <label>���壺</label><input type="text" name="nation" value="<?php echo $sql_arr['nation']?>">
    <label>������</label><input type="text" name="nationality" value="<?php echo $sql_arr['nationality']?>">
    <label>���</label><input type="text" name="type" value="<?php echo $sql_arr['type']?>">
    <label>��Դ�أ�</label><input type="date" name="from" value="<?php echo $sql_arr['from']?>">
    <label>��ѧ���ڣ�</label><input type="data" name="admission_date" value="<?php echo $sql_arr['admission_date']?>">
    <label>����״��: </label><input type="text" name="marriage" value="<?php echo $sql_arr['marriage']?>">
    <label>ѧԺ�ţ�</label><input type="text" name="college_id" value="<?php echo $sql_arr['college_id']?>">
    <label>רҵID��</label><input type="text" name="major_instance_id" value="<?php echo $sql_arr['major_instance_id']?>">
    <label>ԭרҵID��</label><input type="text" name="origin_major_instance_id" value="<?php echo $sql_arr['origin_major_instance_id']?>">
    <label>�༶ID��</label><input type="date" name="class_id" value="<?php echo $sql_arr['class_id']?>">
    <label>ԭ�༶ID��</label><input type="text" name="origin_class_id" value="<?php echo $sql_arr['origin_class_id']?>">
    <label>��ѧ���: </label><input type="text" name="status" value="<?php echo $sql_arr['status']?>">
    <label>��ҵ��ѧλ���״̬��</label><input type="text" name="graduation_status" value="<?php echo $sql_arr['graduation_status']?>">
    <label>��ҵ���ʱ�䣺</label><input type="data" name="graduation_date" value="<?php echo $sql_arr['graduation_date']?>">
    <label>ѧλ���ʱ�䣺</label><input type="data" name="degree_date" value="<?php echo $sql_arr['degree_date']?>">
  
    <input type="submit" value="�ύ">
</form>

</body>
</html>