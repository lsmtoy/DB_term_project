<?php
    include"session.php";   //session.php파일을 포함
?>
 
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <title>login</title>
 </head>
 
 
<body>

    <?php 
 
    $host = 'localhost'; 
    $user = 'root';
    $pw = 'lsmtoy123';
    $dbName = 'db_project';
    $mysqli = new mysqli($host, $user, $pw, $dbName); //mysql로 접근 하도록 설정

    $memberId = $_POST['id'];
    $memberPw = $_POST['password'];


    $sql = "SELECT * FROM loginInfo WHERE id = '$memberId' AND pwd = '$memberPw'"; //my sqli 연결의 끈을 생성시키고, 쿼리를 실행
      //고른다 모든것 account_info테이블로부터 id와 pwd가 일치하는 것을
    $res = $mysqli->query($sql); //실행결과는 $res에 저장 
    $row = $res->fetch_array(MYSQLI_ASSOC); // 넘어온 결과를 한 행씩 패치해서 $row라는 배열에 담는다.
 
        if ($row != null) {
            setcookie('id', $memberId, time()+3600, '/');
            if($row['isEmployee'] == FALSE){                                                 
                $_SESSION['ses_username'] = $row['id'];                           // 일반 로그인 
                echo $_COOKIE['id'].'님 안녕하세요<p/><br/>';              
                echo '<a href="./menu.php">메뉴 보러가기</a><br/>';
                echo '<a href="./order_check.php">주문 확인하기</a><br/>';
                echo '<a href="./index.php">로그아웃 하기</a>';
            }           //로그아웃 페이지 링크.
            else{
                $_SESSION['ses_username'] = $row['id'];                           // 관리자 로그인 
                echo $_COOKIE['id'].'님 안녕하세요. 관리자모드로 로그인되었습니다.<p/><br/>';              
                echo '<a href="./menu_info.php">메뉴 보러가기</a><br/>';
                echo '<a href="./customer_info.php">고객정보 확인하기</a><br/>';
                echo '<a href="./index.php">로그아웃 하기</a>';
            }
        }
 
        if($row == null){                                                    //만약 배열에 아무것도 없다면
            
         echo("<script>location.href='RSDB_starterror.php';</script>");          //애러 화면으로 넘김           
        }
    ?> 
      </div>
 
    </div>
  </body>
</html>
