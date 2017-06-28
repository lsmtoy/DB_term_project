<?
    include"session.php";   //session.php파일을 포함
?>
 
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <title>order</title>
 </head> 
<body>
    <?php 
 
        $id = $_COOKIE['id'];
        $menu = $_POST['menu'];
        $size = $_POST['size'];
        $order_time = date("Y-m-d H:i:s", time()); 

        $host = 'localhost'; 
        $user = 'root';
        $pw = 'lsmtoy123';
        $dbName = 'db_project';
        //
        //$conn = mysqli_connect($host, $user, $pw, $dbname);
        //$result = mysqli_query($conn, "SELECT * FROM inventory NATURAL JOIN menu WHERE menu_name = '$menu'");
        //$row = mysqli_fetch_array($result);
        $mysqli = new mysqli($host, $user, $pw, $dbName); //mysql로 접근 하도록 설정

               

        $sql = "SELECT * FROM inventory NATURAL JOIN menu WHERE menu_name = '$menu'";
        $res = $mysqli->query($sql);
        $row = $res->fetch_array(MYSQLI_ASSOC);
        //$result = mysqli_query();


        if($row['quantity'] != 0){     
            $sql = "UPDATE inventory SET quantity = quantity-1 WHERE ingredient = \"{$row['ingredient']}\"";         
            $mysqli->query($sql));

            echo '주문해주셔서 감사합니다';
            $sql = "INSERT INTO `order` ($order_time, $id, $menu, $size)";    
        }
        else{
            echo '죄송합니다. 해당 메뉴 재료의 남은 재고가 없습니다.';
        }        
        mysqli_close($conn);
    ?> 
    <input type="button" value="뒤로가기"onclick="javascript:history.go(-1)">;
</body>
</html>

