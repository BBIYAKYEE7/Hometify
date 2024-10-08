<?php   
include "../html/db.php";
?>
<html lang="ko">
<head>
    <title style="color: black;">HOMETIFY</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 90%;
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        .form-group button {
            width: 100%;
            background-color: #58B973;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #58B973;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        .logo {
            text-align: center;
            margin-bottom: 10px;
        }
        .additional-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>HOMETIFY</h1>
        </div>
        <h2 style="text-align: center;">로그인하기</h2>
        <form action="https://hometify.kr/login_in.php" method="post">
            <div class="form-group">
                <label for="username">아이디:</label>
                <input type="text" id="username" name="userid">
            </div>
            <div class="form-group">
                <label for="password">비밀번호:</label>
                <input type="password" id="password" name="userpw">
            </div>
            <div class="form-group">
                <button type="submit">로그인하기</button>
            </div>
            <p class="additional-text">계정이 없으신가요? <a href="./sign_up.php">HOMETIFY 가입하기</a></p>
        </form>
    </div>
    <script>
        function validateForm() {
           
        }



        var keydownCtrl = 0;
        var keydownShift = 0;


        document.onkeydown = keycheck;
        document.onkeyup = uncheckCtrlShift;


        function keycheck() {
            switch (event.keyCode) {
                case 123: event.keyCode = ''; return false; break; //F12
                case 17: event.keyCode = ''; keydownCtrl = 1; return false; break; //컨트롤키
            }


            if (keydownCtrl) return false;
        }


        function uncheckCtrlShift() {
            if (event.keyCode == 17) keydownCtrl = 0;
            if (event.keyCode == 16) keydownShift = 0;
        }


        function click() {
            if ((event.button == 2) || (event.button == 2)) { alert('[마우스 오른쪽 클릭] / [컨트롤] / [F12] 금지 입니다.'); }
        }
        document.onmousedown = click;
    </script>
</body>
</html>