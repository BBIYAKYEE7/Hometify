<?php include "../html/db.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>HOMETIFY</title>
    <title style="color: black;">HOMETIFY</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"
        src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=efc24754b9098711d35fa0e986136a1e&libraries=services"></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .header {
            height: 80px;
            background-color: transparent;
            color: black;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-right: 124px;
        }

        .info,
        .community,
        .education-job {
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            display: inline-block;
            margin-right: 124px;
        }

        .info a,
        .community a,
        .login a,
        .title a, 
        .education-job a {
            text-decoration: none;
            color: black;
            cursor: pointer;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .login {
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            display: inline-block;
            margin-left: auto;
        }

        .green-area {
            width: 100%;
            height: 525px;
            /* 기존 높이 설정 */
            background-color: #58B973;
            margin-top: -50px;
            margin-left: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .green-text {
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            margin-left: -500px;
            margin-top: -100px;
            position: absolute;
        }

        .additional-text {
            color: #000000;
            font-size: 80px;
            font-weight: suit;
            margin-left: -380px;
            margin-top: 80px;
            position: absolute;
        }

        .rectangle {
            width: 460px;
            height: 216px;
            background-color: #E5E5E5;
            margin-top: 20px;
            border-radius: 20px;
            margin-left: 50px;
            display: inline-block;
        }

        .rectangle-container {
            display: flex;
        }

        .subtitle {
            margin-left: 70px;
            color: #58B973;
        }

        .additional-text3 {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
                'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            color: #000000;
            margin-left: 45px;
        }

        .additional-text-below {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
                'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            color: #000000;
            margin-left: 45px;
            margin-top: 20px;
        }

        .slider-container {
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .slider-content {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider-item {
            width: 432px;
            height: 241px;
            border-radius: 46px;
            background-color: #fff;
            transition: transform 0.3s, opacity 0.3s;
            cursor: pointer;
        }

        /* 슬라이더 아이템에 호버링 효과 추가 */
        .slider-item:hover {
            transform: scale(1.10);
            /* 호버링 시 아이템 크기 확대 */
            opacity: 1;
            /* 호버링 시 약간의 투명도 조절 */
        }

        .popular {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 25px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            color: #000000;
            margin-left: 50px;
            padding: 0 20px;
            margin-top: 10px;
        }

        .button-container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slider-button {
            font-size: 24px;
            margin: 10px;
            cursor: pointer;
        }

        .additional-rectangle-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* 현재 위치의 상단에 맞추기 위해 align-items를 flex-start로 변경 */
            margin-top: 0;
            /* 상단과 더 밀착되도록 margin-top 제거 */
            background-color: #fff;
        }

        .additional-rectangle {
            width: 1665px;
            height: 634px;
            background-color: #E5E5E5;
            border-radius: 102px;
            margin: 0 20px;
            display: flex;
            overflow-x: auto;
            z-index: 2;
        }

        .additional-rectangle-item {
            flex: 1;
            height: 290px;
            background-color: #CCCCCC;
            border-radius: 20px;
            margin: 0 10px;
            min-width: 400px;
            z-index: 2;
            margin-top: 70px;
        }

        .slider-text {
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .map-container {
            width: 100%;
            height: 350px;
            border-radius: 102px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .search-input {
            width: 45%;
            padding: 10px;
            font-size: 16px;
            border-radius: 20px 0 0 20px;
            /* 왼쪽만 둥글게 */
            border: 1px solid #58B973;
            /* 테두리 추가 */
            border-right: none;
            /* 오른쪽 테두리 없애기 */
        }

        .search-button {
            font-size: 13px;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #58B973;
            color: white;
            border: 1px solid #58B973;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
            /* 인라인 블록 요소로 변경 */
            width: auto;
            /* 너비를 자동으로 설정하여 가로로 표시 */
            white-space: nowrap;
            /* 텍스트 줄 바꿈 방지 */
        }

        .search-button:hover {
            background-color: #4CAF50;
        }

        /* 직사각형 박스 스타일 */
        .left-map-box,
        .right-map-box {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ffffff;
            border-radius: 10px;
            margin: 0 10px;
            padding: 20px;
        }

        .map-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="title"><a href="index.php">HOMETIFY</a></div>
        <div>
            <div class="info"><a href="home.html">지역 비교</a></div>
            <div class="community"><a href="community.html">커뮤니티</a></div>
            <div class="education-job"><a href="education.html">도시정보</a></div>
        </div>
        <div class="login">
        <?php
        if(isset($_SESSION['userid'])){
            echo "{$_SESSION['userid']}님 안녕하세요";
            echo "<a href='https://hometify.kr/logout.php'><input type='button' value='로그아웃'/></a>";
        }else{
            echo "<a href='https://hometify.kr/login.php'>로그인 해주세요!</a>";
        }
        ?>
    </div>
</div>
    <div class="content">

    </div>
    <div class="green-area">
        <p class="green-text">색다른 도시문제 솔루션</p>
        <p class="additional-text">HOMETIFY</p>
    </div>
    <div class="popular">현시점 인기 지역</div>
    <p class="subtitle">실시간 가장 핫한 지역이에요</p>
    <div class="rectangle-container">
        <div class="slider-container">
            <div class="slider-content">
                <div class="slider-item">
                    <img src="yangpyeong.png" alt="Image 1" style="width: 432px; height: 241px; object-fit: cover;">
                    <div class="slider-text">경기도 양평군 양평음</div>
                </div>
                <div class="slider-item">
                    <img src="paldal.png" alt="Image 2" style="width: 432px; height: 241px; object-fit: cover;">
                    <div class="slider-text">경기도 용인시 기흥구</div>
                </div>
                <div class="slider-item">
                    <img src="suji.png" alt="Image 3" style="width: 432px; height: 241px; object-fit: cover;">
                    <div class="slider-text">경기도 용인시 수지구</div>
                </div>
                <div class="slider-item">
                    <img src="kihung.png" alt="Image 4" style="width: 432px; height: 241px; object-fit: cover;">
                    <div class="slider-text">경기도 수원시 팔달구</div>
                </div>
            </div>
            <div class="button-container">
                <div class="slider-button" onclick="moveSlider(upperSliderContainer, -1, this)"><img src="prev.png">
                </div>
                <div class="slider-button" onclick="moveSlider(upperSliderContainer, 1, this)"><img src="next.png">
                </div>
            </div>
        </div>
    </div>
    <div class="popular">현시점 인기 지역</div>
    <p class="subtitle">실시간 가장 핫한 분양지에요</p>
    <div class="slider-container">
        <div class="slider-content">
            <div class="slider-item">
                <img src="ilsan.png" alt="Image 1" style="width: 432px; height: 241px; object-fit: cover;">
                <div class="slider-text">경기도 고양시 일산서구</div>
            </div>
            <div class="slider-item">
                <img src="kihung.png" alt="Image 2" style="width: 432px; height: 241px; object-fit: cover;">
                <div class="slider-text">경기도 양평군 양평읍</div>
            </div>
            <div class="slider-item">
                <img src="paju.png" alt="Image 3" style="width: 432px; height: 241px; object-fit: cover;">
                <div class="slider-text">경기도 파주시 운정구</div>
            </div>
            <div class="slider-item">
                <img src="paldal.png" alt="Image 4" style="width: 432px; height: 241px; object-fit: cover;">
                <div class="slider-text">경기도 수원시 팔달구</div>
            </div>
        </div>
        <div class="button-container">
            <div class="slider-button" onclick="moveSlider(lowerSliderContainer, -1, this)"><img src="prev.png">
            </div>
            <div class="slider-button" onclick="moveSlider(lowerSliderContainer, 1, this)"><img src="next.png">
            </div>
        </div>
    </div>
    </div>
    <div class="additional-text-below">관심지역을 비교해보세요</div>
    <div class="additional-rectangle-container">
        <!-- 왼쪽 지도 박스 -->
        <div class="left-map-box">
            <p class="map-title">현재 위치</p>
            <div class="map-container" id="leftMap"></div>

        </div>


        <div class="right-map-box">
            <p class="map-title">관심 지역</p>
            <div class="map-container" id="rightMap"></div>
            <div class="search-container">
                <input type="text" id="rightSearchInput" style="width: 600%; height: 10px; border-radius: 20px;"
                    class="search-input" placeholder="지명을 입력하세요">
                <button class="search-button" onclick="searchLocation('right')">검색</button>
            </div>
        </div>
    </div>
    <script>

        var userMarkerLeft, userMarkerRight;
        var leftMap, rightMap;

        function detectOS() {
            const userAgent = navigator.userAgent || navigator.vendor || window.opera;

            if (/android/i.test(userAgent)) {
                return "android";
            } else if (/iPhone|iPod/i.test(userAgent)) {
                return "ios";
            } else {
                return "other";
            }
        }


        function checkAndRedirect() {
            const userOS = detectOS();

            if (userOS === "android" || userOS === "ios") {

                window.location.href = "no_mobile.html";
                return;
            }
        }


        function moveSlider(sliderContainer, direction, button) {
            const sliderContent = sliderContainer.querySelector(".slider-content");
            const sliderItems = sliderContent.querySelectorAll(".slider-item");

            let currentIndex = parseInt(sliderContainer.getAttribute('data-index') || '0');

            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = sliderItems.length - 1;
            } else if (currentIndex >= sliderItems.length) {
                currentIndex = 0;
            }

            sliderContainer.setAttribute('data-index', currentIndex);
            const translateValue = -currentIndex * (sliderItems[0].offsetWidth + 40);
            sliderContent.style.transform = `translateX(${translateValue}px)`;


            const allButtons = document.querySelectorAll(".slider-button");
            allButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");
        }


        function onPageLoad() {
            checkAndRedirect();
            displayUsername();


            const upperSliderContainer = document.querySelectorAll('.slider-container')[0];

            const lowerSliderContainer = document.querySelectorAll('.slider-container')[1];


            setInterval(function () {
                moveSlider(upperSliderContainer, 1, upperSliderContainer.querySelector(".slider-button.active"));
            }, 2500); // 2초 간격


            setInterval(function () {
                moveSlider(lowerSliderContainer, 1, lowerSliderContainer.querySelector(".slider-button.active"));
            }, 1500); // 1초 간격


            getUserLocation();
        }


        function displayUsername() {
            var username = getParameterByName('username');
            if (username) {
                var loginElement = document.querySelector('.login');
                loginElement.textContent = '안녕하세요, ' + username + '님!';
            }
        }


        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }


        function initMap() {
            var leftMapContainer = document.getElementById('leftMap');
            var rightMapContainer = document.getElementById('rightMap');
            var options = {
                center: new kakao.maps.LatLng(37.566826, 126.9786567),
                level: 9
            };
            leftMap = new kakao.maps.Map(leftMapContainer, options);
            rightMap = new kakao.maps.Map(rightMapContainer, options);


            getUserLocation('left');
        }

        function getUserLocation(mapType) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;
                    var coords = new kakao.maps.LatLng(lat, lng);


                    if (mapType === 'left') {
                        if (userMarkerLeft) {
                            userMarkerLeft.setMap(null);
                        }
                        userMarkerLeft = new kakao.maps.Marker({
                            position: coords,
                            map: leftMap
                        });


                        leftMap.setCenter(coords);
                    }
                });
            }
        }



        function searchLocation(mapType) {
            var inputElement, map, marker;
            if (mapType === 'left') {
                inputElement = document.getElementById('leftSearchInput');
                map = leftMap;
                marker = userMarkerLeft;
            } else if (mapType === 'right') {
                inputElement = document.getElementById('rightSearchInput');
                map = rightMap;
                marker = userMarkerRight;
            }

            var address = inputElement.value;


            var geocoder = new kakao.maps.services.Geocoder();
            geocoder.addressSearch(address, function (result, status) {
                if (status === kakao.maps.services.Status.OK) {
                    var coords = new kakao.maps.LatLng(result[0].y, result[0].x);

                    map.setCenter(coords);


                    if (marker) {
                        marker.setMap(null);
                    }

                    marker = new kakao.maps.Marker({
                        position: coords,
                        map: map
                    });
                } else {
                    alert('주소를 찾을 수 없습니다.');
                }
            });
        }

        window.addEventListener("load", onPageLoad);

        window.addEventListener("load", initMap);

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

    <footer>
        <p>&copy; 2023 Overnight Coders. All rights reserved.</p>
    </footer>
</body>

</html>