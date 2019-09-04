<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
</head>
<body>
	<?php include("navigate.php"); ?>
    <form method="post">
        用户名<input type="text" name="username" /><br />
        密码<input type="password" name="password" /><br />
        重复密码<input type="password" name="repeatPassword" /><br />
        <input name="regist" type="submit" value="注册" />
    </form>
</body>
</html>