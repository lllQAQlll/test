<head>
    <meta charset="UTF-8">
</head>
<body>
	<?php include("navigate.php"); ?>
    <div class="wrapper">
        <div class="add">
            <a href="navigate.php">返回主页</a>
        </div>
        <table width="960" border="1">
        <body>
    <div class="wrapper">
        <h2>学生信息删除修改</h2>
        <div class="add">
            <a href="add.html">增加学生信息</a>
        </div>
        <table width="960" border="1">
            <tr>
                <th>ID</th>
                <th>用户ID</th>
                <th>学号</th>
                <th>身份证号</th>
                <th>姓名</th>
                <th>曾用名</th>
                <th>性别</th>
                <th>出生日期</th>
                <th>邮政编码</th>
                <th>电话号码</th>
                <th>通讯住址</th>
                <th>考生号</th>
                <th>政治面貌</th>
                <th>民族</th>
                <th>国籍</th>
                <th>类别</th>
                <th>生源地</th>
                <th>入学日期</th>
                <th>婚姻状况</th>
                <th>学院号</th>
                <th>专业ID</th>
                <th>原专业ID</th>
                <th>班级ID</th>
                <th>原班级ID</th>
                <th>在学情况</th>
                <th>毕业和学位审核状态</th>
                <th>毕业审核时间</th>
                <th>学位审核时间</th>
                <th>操作</th>
            </tr>

<?php
                // 1.导入配置文件
                require "dbconfig.php";
                // 2. 连接mysql
               $link = @mysqli_connect(localhost,root,root) or die("提示：数据库连接失败！");
           
                // 选择数据库getaddrinfo失败                
                mysqli_select_db($link,'ygu');
                // 编码设置
                mysqli_set_charset($link,'utf8');
               

                // 3. 从DBNAME中查询到news数据库，返回数据库结果集,并按照addtime降序排列  
             
                // 结果集
                $result = mysqli_query($link,'select * from yg_student order by id asc');
                //var_dump($result);die;

                // 解析结果集,$row为新闻所有数据，$newsNum为新闻数目
                $newsNum=mysqli_num_rows($result);  
                while($row = mysqli_fetch_assoc($result)){
                   
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['uid']}</td>";
                    echo "<td>{$row['student_number']}</td>";
                    echo "<td>{$row['id_number']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['old_name']}</td>";
                    echo "<td>{$row['gender']}</td>";
                    echo "<td>{$row['birth']}</td>";
                    echo "<td>{$row['postal']}</td>";
                    echo "<td>{$row['phone']}</td>";
                    echo "<td>{$row['address']}</td>";
                    echo "<td>{$row['exam_number']}</td>";
                    echo "<td>{$row['politics']}</td>"; 
                    echo "<td>{$row['nation']}</td>";
                    echo "<td>{$row['nationality']}</td>";
                    echo "<td>{$row['type']}</td>";
                    echo "<td>{$row['from']}</td>";
                    echo "<td>{$row['admission_date']}</td>";
                    echo "<td>{$row['marriage']}</td>";
                    echo "<td>{$row['college_id']}</td>";
                    echo "<td>{$row['major_instance_id']}</td>";
                    echo "<td>{$row['origin_major_instance_id']}</td>";
                    echo "<td>{$row['class_id']}</td>";
                    echo "<td>{$row['origin_class_id']}</td>";
                    echo "<td>{$row['status']}</td>";
                    echo "<td>{$row['graduation_status']}</td>";
                    echo "<td>{$row['graduation_date']}</td>";
                    echo "<td>{$row['degree_date']}</td>";
                    echo "<td>
                            <a href='javascript:del({$row['id']})'>删除</a>
                            <a href='editnews.php?id={$row['id']}'>修改</a>
                          </td>";
                    echo "</tr>";
                }
                // 5. 释放结果集
                mysqli_free_result($result);
                mysqli_close($link);
            ?>
            <body>