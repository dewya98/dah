<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  .title{width: 800px;height:60px;font-size:0.8em;line-height:2em;}
  .title>a{color:rgb(117, 189, 204);font-size:1em;font-weight:700}
  content{width:800px;height:1500px;margin: auto;font-size:0.9em;position:relative;}
  .supporter{width:800px;margin-top:50px;font-weight:bold;}
  .supporter li:last-of-type{text-align:center;}
  .wrap{display:flex;justify-content:left;flex-wrap:wrap;width: 900px;padding:30px 10px}
  .box{margin:30px 10px;}
  .box>a>img{width: 90px;height: 90px;border-radius:50%;box-shadow:0 0 5px #ccc;object-fit:contain;padding:2px}
  .cap{font-size:0.8em;text-align:center;line-height:2em}
  .deeppink{color:deeppink;font-weight:bold}
  .sticky{position:fixed;top:40%;right: 20px;text-align:right; }
  .sticky>li{font-size:0.7em;font-weight:bold;line-height:2em;color:#777;cursor: pointer;}
  .on{font-weight:bold;}
  
</style>
<div class="visual"><img src="images/exhi.jpg" alt=""></div>
<div class="title" id="title">
  <a href="support.php">제휴사 안내</a> <br>
  다양한 라이프스타일을 뮤지엄 다와 함께 즐겨보세요.&emsp;<svg width="450" height="5">
  <line x1="0" y1="0" x2="450" y2="0" style="stroke:#777;stroke-width:1" /></svg>
</div>
<content>
  <ul class="supporter">
    <li>· 통신사</li>
    <div class="wrap">
      <div class="box">
          <a href=""><img src="images/logo_uplus.png" alt="">
         <div class="cap">
            LG U+ 멤버십<br>
            <span class="deeppink"> 30% 할인</span></a>
         </div>
       </div>
     </div>
    <li>· 호텔</li>
    <div class="wrap">
       <div class="box">
         <a href=""><img src="images/logo_lct.png" alt="">
         <div class="cap">
         ​그랜드LCT레지던스</a>
         </div>
       </div>
       <div class="box">
         <a href=""><img src="images/sup-2.png" alt="">
         <div class="cap">
         ​마리안느호텔</a>
         </div>
       </div>
       <div class="box">
       <a href=""><img src="images/sup-3.png" alt="">
         <div class="cap">
         ​해운대센트럴호텔</a>
         </div>
       </div>
       <div class="box">
       <a href=""><img src="images/sup-4.png" alt="">
         <div class="cap">
         ​센텀프리미어호텔</a>
         </div>
       </div>
       <div class="box">
       <a href=""><img src="images/sup-5.png" alt="">
         <div class="cap">
         ​코오롱씨클라우드호텔</a>
         </div>
       </div>
       <div class="box">
       <a href=""><img src="images/sup-6.png" alt="">
         <div class="cap">
         라발스호텔</a>
         </div>
       </div>
       <div class="box">
       <a href=""><img src="images/sup-7.png" alt="">
         <div class="cap">
         ​그랜드LCT레지던스</a>
         </div>
       </div>
       <div class="box">
         <a href=""><img src="images/logo_lct.png" alt="">
         <div class="cap">
         ​그랜드LCT레지던스</a>
         </div>
       </div>
     </div>

    <li>· 여행&문화</li>
    <div class="wrap">
       <div class="box">
       <a href=""><img src="images/sup-8.png" alt="">
         <div class="cap">
         부산 아쿠아리움 <br>
            <span class="deeppink"> 콤보티켓</span></a>
         </div>
       </div>
     </div>

    <li>· 기업</li>
    <div class="wrap">
       <div class="box">
       <a href=""><img src="images/sup-9.png" alt="">
         <div class="cap">
         KB 국민카드<br></a>
         </div>
       </div>
     </div>

    <li>· 학교</li>
    <div class="wrap">
       <div class="box">
       <a href=""><img src="images/sup-10.png" alt="">
         <div class="cap">
            동아대학교<br></a> 
         </div>
       </div>
     </div>

    <li>뮤지엄 다: 제휴 문의 : yezzi_k@naver.com</li>
  </ul>
</content>
<ul class="sticky">
  <li>통신사&emsp;  <i class="far fa-circle"></i></li>
  <li>호텔 &emsp; <i class="far fa-circle"></i></li>
  <li>여행&문화 &emsp; <i class="far fa-circle"></i></li>
  <li>기업&emsp; <i class="far fa-circle"></i></li>
  <li>학교 &emsp; <i class="far fa-circle"></i></li>
  <li>제휴문의&emsp;  <i class="far fa-circle"></i></li>
</ul>
<?php 
include "footer.php";
?>
