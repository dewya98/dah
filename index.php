<?php
session_start();
include "header.php";
?>
     <style>
     .slider{width: 100vw;height: 90vh;position: relative;}
     .slider>img{width: 100%;height: 100%;position:absolute;transition: 1s;}
     .prev_s, .next_s{width: 100px;height:100px;font-size: 3em;color: #fff;position: absolute;top:550px;z-index: 99;cursor: pointer;}
     .prev_s{left:3%}
     .next_s{right:3%}
     .top{width: 95px;height: px;border-radius: 50%;text-align: center;line-height: 97px;font-size: 0.8em;font-weight: 700;
        background: rgb(8, 48, 167);color: #fff;position: fixed;right:94px;bottom:69px;}
      .top:hover{background-color:rgb(64, 64, 64);font-size: 0.9em;transition: 0.4s;}  
      footer{width: 100vw;overflow: hidden;}
      .up{background-color: rgb(58, 57, 57);width: 82%;height: 30px;padding: 0 10%;color: #fff;
            font-size: 8px;line-height: 30px;}
      .down{width: 80%;height:20px;padding: 20px 0;}
   </style>
</head>
<body>
<div class="pop">
    <div class="popbg">
        <img src="images/pop.png" alt="pop-up">
    </div>
</div>
  <div class="slider">
    <img src="images/slide01.jpg" alt="">
    <img src="images/slide02.jpg" alt="">
    <img src="images/slide03.jpg" alt="">
    <img src="images/slide05.jpg" alt="">
    <img src="images/slide04.jpg" alt="">
</div>
<div class="prev_s"><i class="xi-angle-left-thin"></i></div>
<div class="next_s"><i class="xi-angle-right-thin"></i></div>
  <div class="top"><a href="https://booking.naver.com/booking/5/bizes/378551">예약하기</a></div>

<footer>
 <div class="up">  
(우 48058)부산광역시 해운대구 센텀서로 20, 뮤지엄 다:  &nbsp;l <b> T. 051-731-3302  l  E. museumdah@naver.com</b>
</div> 
<div class="down"><img src="images/뮤지엄다로고_blue.jpg" alt=""></div>
</footer>
</body>
</html>