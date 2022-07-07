<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <meta property="og:title" content="대한민국구석구석" />
    <meta property="og:image" content="./images/mainphoto.png" />
    <title>대한민국구석구석</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/reset.css">
    <script src="./js/jquery-3.1.1.min.js"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    
    
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.bxslider.js"></script>
</head>
<script>
    $(document).ready(function (){
        var slide = $(".slide").bxSlider({
       
            controls:false,
            pagerCustom:".slideTap",
            mode:"vertical",
            touchEnabled: false,
            infiniteLoop:false
        });
        $(".next").click(function () {
            slide.goToNextSlide()
        });
        $(".prev").click(function () {
            slide.goToPrevSlide()
        });



        $("#sdate,#edate").datepicker({

            dateFormat: 'yy/mm/dd',
            prevText: '이전 달',
            nextText: '다음 달',
            monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            dayNames: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
            showMonthAfterYear: true,
            changeMonth: true,
            changeYear: true,
            yearSuffix: '년'
        })


        var slide1 = $(".slider01").bxSlider({
            auto: true,
		    speed: 500,
		    pause: 3000,
            controls: false
           
        });
        $(".next01").click(function () {
            slide1.goToNextSlide()
        });
        $(".prev01").click(function () {
            slide1.goToPrevSlide()
        });



        var slide2 = $(".slider02").bxSlider({
            auto: true,
		    speed: 500,
		    pause: 3000,
            controls: false
        });
        $(".next02").click(function () {
            slide2.goToNextSlide()
        });
        $(".prev02").click(function () {
            slide2.goToPrevSlide()
        })
    })


</script>
<body>

    <div id="header">
        <div class="headerWrap">
            <a href="./">
                <img src="./images/logo_summer.png" alt="">
            </a>
           <div class="headerser">
               <form action="#">
                   <input type="text" name="search" placeholder="어디로, 어떤 여행을 떠날 예정인가요?" class="inf">
               </form>
               <img src="./images/ico_travelweek.png" alt="" class="walkpe">
               <div class="icon">

                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

           </div>
        </div>
        <div class="sns">
            <ul class="clearfix">
                <li><a href="#"><img src="./images/ico_sns01.png" alt=""></a></li>
                <li><a href="#"><img src="./images/ico_sns02.png" alt=""></a></li>
                <li><a href="#"><img src="./images/ico_sns03.png" alt=""></a></li>
                <li><a href="#"><img src="./images/ico_sns04.png" alt=""></a></li>
            </ul>
        </div>
        <div class="headerbot">
        <div class="headermenu">
            <div class="navbar">
                <ul class="clearfix">
                    <li>
                        <a href="citytour.html">여행도시</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="issue.html">인기</a></li>
                                <li><a href="course.html">코스</a></li>
                                <li><a href="festival.html">축제</a></li>
                                <li><a href="eventpage.html">이벤트</a></li>
                            </ul>
                        </div>
                    
                    </li>
                    <li><a href="citytour.html">호텔예약</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="issue.html">인기</a></li>
                                <li><a href="course.html">코스</a></li>
                                <li><a href="festival.html">축제</a></li>
                                <li><a href="eventpage.html">이벤트</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="citytour.html">렌트카</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="issue.html">인기</a></li>
                                <li><a href="course.html">코스</a></li>
                                <li><a href="festival.html">축제</a></li>
                                <li><a href="eventpage.html">이벤트</a></li>
                            </ul>
                        </div></li>
                    <li><a href="citytour.html">여행TIP</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="issue.html">인기</a></li>
                                <li><a href="course.html">코스</a></li>
                                <li><a href="festival.html">축제</a></li>
                                <li><a href="eventpage.html">이벤트</a></li>
                            </ul>
                        </div></li>
                    <li><a href="citytour.html">회사소개</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="issue.html">인기</a></li>
                                <li><a href="course.html">코스</a></li>
                                <li><a href="festival.html">축제</a></li>
                                <li><a href="eventpage.html">이벤트</a></li>
                            </ul>
                        </div></li>
                    <li><a href="citytour.html">커뮤니티</a>
                        <div class="submenu">
                            <ul class="clearfix">
                                <li><a href="issue.html">인기</a></li>
                                <li><a href="course.html">코스</a></li>
                                <li><a href="festival.html">축제</a></li>
                                <li><a href="eventpage.html">이벤트</a></li>
                            </ul>
                        </div></li>
                </ul>
            </div>
        </div>
        <div class="headerbox"></div>
</div>