<?php  
    include ("../html/db.php");
?>
<!DOCTYPE html>
<html lang="en">
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
            border-radius: 10px;
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
            position: relative;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        .form-group .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-group .button-group button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            color: white;
            transition: background-color 0.3s;
            background-color: #58B973;
        }
        .form-group .button-group .login-button {
            background-color: #F49F42; 
            border-radius: 5px;
            padding: 12px 24px; 
            font-size: 16px; 
            margin-top: 20px; 
            border: none; 
            color: white;
            font-weight: bold;
            cursor: pointer;
            width: 100%; 
            text-align: center;
            transition: background-color 0.3s;
        }
        .form-group .button-group .login-button:hover {
            background-color: #E48B29; 
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
        .duplicate-check {
            position: absolute;
            right: 0;
            top: 0;
            font-size: 14px;
            color: #888;
            cursor: pointer;
            margin-top: -10px;
            margin-right: -18px;
        }
        .login-button {
            position: absolute;
            margin-left: -198px;
            padding: 12px 24px;
            margin-top: -12px;
            border-radius: 20px;
            color: #fff;
            background-color: #58B973;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            text-align: center;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>HOMETIFY</h1>
        </div>
        <h4 style="text-align: left; margin-bottom: 20px; color: #58B973">HOMETIFY에 오신 것을 환영합니다</h4>
        <form action="https://hometify.kr/chek_in.php" method="POST">
            <div class="form-group">
                <label for="username">아이디:</label>
                <input type="text" id="username" name="userid">
                <!---<div class="button-group">
                    <button type="button" class="duplicate-check">중복 확인하기</button>
                </div>--->
            </div>
            <div class="form-group">
                <label for="email">이메일:</label>
                <input type="email" id="email" name="useremail">
            </div>
            <div class="form-group">
                <label for="password">비밀번호:</label>
                <input type="password" id="password" name="userpw">
            </div>
            <!---<div class="form-group">
                <label for="confirm_password">비밀번호 확인:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <span class="error-message" id="password_error"></span>
            </div>
            --->
            <div class="form-group">
                <label for="interest">관심 지역:</label>
                <select id="interest" name="userinterest">
                    <option value="suji">수지구</option>
                    <option value="kihung">기흥구</option>
                    <option value="chuin">처인구</option>
                </select>
            </div>

            <div class= form-group>
                <label for="age">생년월일:<label>
                <input type="month" id="month" name="birthday">
            </div>
           
            <div class="form-group" style="text-align: center;">
                <button type="submit" class="login-button" onclick="location.href='login.php'">회원가입하기</button>
            </div>
        </form>
    </div>
    <!---
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            var password_error = document.getElementById("password_error");
            
            if (password !== confirm_password) {
                password_error.textContent = "비밀번호가 일치하지 않습니다.";
                return false;
            } else {
                password_error.textContent = "";
                return true;
            }
        }
    </script>--->

    <script>
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
