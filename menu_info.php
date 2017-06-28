<?
    include"session.php";   //session.php파일을 포함
    $mysqli = new mysqli('localhost', 'root', 'lsmtoy123', 'DB_term_project');
?>
 
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <title>menu</title>
 </head>
 <body>
    관리자모드로 로그인중입니다.<br/>
    <table border="1">
    <tr>
        <th>메뉴 이미지</th>
        <th>메뉴명</th>
        <th>가격</th>
        <th>재고 수량</th>
    </tr>
    <tr>
        <td><img src="bulgogi_pizza.jpg" width="150" height="100"></td>
        <td>불고기 피자</td>
        <td>L:15000원 M:10000원</td>
        <td>
        <?php
            $sql = "SELECT * FROM inventory NATURAL JOIN menu WHERE menu_name = '불고기 피자'";
            $res = $mysqli->query($sql);
            $row = $res->fetch_array(MYSQLI_ASSOC);
            echo $row['quantity'];
        ?>
        </td>
    </tr>
     <tr>
        <td><img src="peperoni_pizza.jpg" width="150" height="100"></td>
        <td>페퍼로니 피자</td>
        <td>L:15000원 M:10000원</td>
    </tr>
     <tr>
        <td><img src="potato_pizza.jpg" width="150" height="100"></td>
        <td>포테이토 피자</td>
        <td>L:13000원 M:8000원</td>
    </tr>
    <tr>
        <td><img src="steak_pizza.jpg" width="150" height="100"></td>
        <td>스테이크 피자</td>
        <td>L:18000원 M:13000원</td>
    </tr>   
    <tr>
        <td><img src="shrimp_pizza.jpg" width="150" height="100"></td>
        <td>쉬림프 피자</td>
        <td>L:17000원 M:12000원</td>
    </tr>
    <tr>
        <td><img src="hanwoo_pizza.jpg" width="150" height="100"></td>
        <td>한우 피자</td>
        <td>L:20000원 M:15000원</td>
    </tr>
    <form name="input" method="post" action="order.php">
        <select name="menu">
            <option value="">메뉴명</option>
            <option value="불고기 피자">불고기 피자</option>
            <option value="페퍼로니 피자">페퍼로니 피자</option>
            <option value="포테이토 피자">포테이토 피자</option>
            <option value="스테이크 피자">스테이크 피자</option>
            <option value="쉬림프 피자">쉬림프 피자</option>
            <option value="한우 피자">한우 피자</option>
        </select>
        <select name="size">
            <option value="">사이즈</option>
            <option value="L">Large</option>
            <option value="M">Medium</option>
        </select>
        <input type="submit" value="주문하기">
    </form>
    <input type="button" value="뒤로가기"onclick="javascript:history.go(-1)">
</body>
<?

</html>
