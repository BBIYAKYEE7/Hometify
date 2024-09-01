<?php
	include ("../html/db.php");
	session_start();
	unset($_SESSION['userid']);
	
	usleep(200000);
	echo "<script>alert('로그아웃 되었습니다.'); location.href='https://hometify.kr/index.php';</script>";
?>
<meta charset="utf-8">