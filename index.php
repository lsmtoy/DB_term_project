<?php
session_cache_limiter("private_no_expire");
session_start();
setcookie('id');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<h1>로그인</h1>
	<div>
	<form method="post" action="login.php">
		ID: <input type="text" name="id" /><br />
		PASSWORD: <input type="password" name="password" /><br />
	<input type="submit" value="login"/>
	<input type="button" name="버튼" value="회원가입" onclick="location.href='http://localhost/DB_term_project/join.php'";>
	</form>
	</div>
</body>
</html>