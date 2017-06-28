<?
    include"session.php";   //session.php파일을 포함
?>
 
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <title>order16</title>
 </head> 
<body>
    관리자모드로 로그인 중입니다.<br/>
    <?php 
        $host = 'localhost'; 
        $user = 'root';
        $pw = 'lsmtoy123';
        $dbName = 'db_project';

        $mysqli = new mysqli($host, $user, $pw, $dbName); //mysql로 접근 하도록 설정

        $sql = "SELECT * FROM customer";
        $res = $mysqli->query($sql);
        while($row = $res->fetch_array(MYSQLI_ASSOC)){
            echo '고객ID:  '.$row['id'].'    ';
            echo '고객명:  '.$row['name'].'    ';
            echo '전화번호:  '.$row['phone'].'    ';
            echo '주소:  '.$row['address'].'    ';
            echo "<br/>\n";
        }
        mysqli_close($conn);
    ?> 
</body>
</html>
