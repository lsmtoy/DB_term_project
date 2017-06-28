<?
    include"session.php";   //session.php파일을 포함
?>
 
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <title>order_check</title>
 </head> 
<body>

    <?php 
        $host = 'localhost'; 
        $user = 'root';
        $pw = 'lsmtoy123';
        $dbName = 'db_project';
        $id = $_COOKIE['id'];

        $mysqli = new mysqli($host, $user, $pw, $dbName); //mysql로 접근 하도록 설정

        $sql = "SELECT * FROM `order` WHERE customer_id = \"$id\"";
        $res = $mysqli->query($sql);
        while($row = $res->fetch_array(MYSQLI_ASSOC)){
            echo '주문시각:  '.$row['order_time'].'    ';
            echo '고객 아이디:  '.$row['customer_id'].'    ';
            echo '메뉴명:  '.$row['menu_name'].'    ';
            echo '사이즈:  '.$row['size'].'    ';
            echo "<br/>\n";
        }
    ?> 
</body>
</html>
