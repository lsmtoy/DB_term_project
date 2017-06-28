<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>sign up page</title>
</head>
<body>
  <form name="join" method="post" action="memberSave.php">
  <h2>회원정보를 입력하세요<h2>
  <table border="1">
  <tr>
    <td>ID</td>
    <td><input type="text" size="30" name="id"></td>
  </tr>
  <tr>
      <td>Password</td>
      <td><input type="password" size="30" name="pwd"></td>
  </tr>
  <tr>
      <td>name</td>
      <td><input type="text" size="30" maxlength="10" name="name"></td>
    </tr>
    <tr>
      <td>phone number</td>
      <td><input type="text" size="30" name="phone"></td>
    </tr>
    <tr>
      <td>address</td>
      <td><input type="text" size="30" name="address"></td>
    </tr>
  </table>
  <input type=submit value="회원가입">
    <input type="button" value="뒤로가기"onclick="javascripｔ:history.go(-1)">
  </form>
</body>
</html>
