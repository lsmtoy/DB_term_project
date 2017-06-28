<html>
   <meta charset="utf-8">
<?php
 
$host = 'localhost';
$user = 'root';
$pw = 'lsmtoy123';
$dbName = 'db_project';
$mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $id=$_POST['id'];
 $password=($_POST['pwd']);
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $isEmployee=FALSE;
 
 
 $sql1 = "insert into loginInfo (id, pwd, isEmployee)";          
 $sql1 = $sql1. "values('$id','$password','$isEmployee')";
 $sql2 = "insert into customer (id, name, phone, address)";
 $sql2 = $sql2. "values('$id','$name','$phone','$address')";         
 if($mysqli->query($sql1) && $mysqli->query($sql2)){                                              //만약 sql로 잘 들어갔으면
  echo $name.'님 회원가입을 축하드립니다.<p/>';                                   // id님 안녕하세요.
 }else{                                                                              //아니면
  echo 'fail to insert sql';                                                  //fail to insert sql로 표시
 }
mysqli_close($mysqli);
 
 
?>
<input type="button" value="로그인하러가기" onclick="location='index.php'">
</html>
