<?php
   session_start();
  
   include"../html/db.php";
   include "../html/password.php";

   $userid = $_POST["userid"];
   $userpw = password_hash($_POST["userpw"], PASSWORD_DEFAULT);
   $useremail = $_POST["useremail"];
   $userinterest = $_POST["userinterest"];
   //login.php에서 입력받은 id, password

   $sql = mq("insert into member (userid, userpw, useremail,userinterest) values('".$userid."','".$userpw."','".$useremail."','".$userinterest."')");
   if($sql){
      echo "<script>alert('회원가입 되었습니다.'); location.href='https://hometify.kr/login.php';</script>";
   }
   ?>
<meta charset="utf-8" />
<script type="text/javascript"></script>
<!----
<meta http-equiv="refresh" content="0 url=https://hometify.kr/login.php">
$q = "SELECT * FROM member WHERE userid = '$userid' AND userpw = '$userpw'";
   $result = $mysqli->query($q);

   while ($row = $result->fetch_row()) {
      if ($row != null) {
         $_SESSION['userid'] = $row['userid'];
         header("location:http://hometify.kr/index.php");
         exit;
      }
      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
         echo "<script>alert('Invalid username or password')</script>";
         echo "<script>location.replace('http://hometify.kr./login.php');</script>";
         exit;
      }  
   }
   ?>
</body>
--->
