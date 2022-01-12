<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>부산전시| museum DAH</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css2?family=Gugi&family=Montserrat:ital,wght@0,400;0,700;1,700&family=Nanum+Gothic&family=Poppins:ital,wght@0,400;0,600;1,600;1,700&display=swap');      
  *{margin: 0 auto;padding: 0;list-style: none;font-family: 'Nanum Gothic', sans-serif;}
   a{text-decoration: none;color: inherit;}
      .pop{display:none ;z-index: 1;background-color: rgba(255,255,255,0.7);position: fixed;top:0;left:0;right:0;
        width:100%; height:100%;}  
        .popbg{width: 500px;height: 700px;padding-top: 170px;}
        .popbg>img{display: block;}
      header{width: 100vw;height: 157px;position: relative;background-color: rgb(19,28,60);}
      .banner{width: 100%;height: 100px;padding:30px 0;position: relative;}
      .banner>li{width: 100%;height: 100px;padding:28px 0;position: absolute;top:0;left:0}
      .caption{width:390px;font-size: 0.9em;font-weight: 300;position:absolute;top:30}
      h2{padding-top:20px;}
      .buy{width:30px;padding:0 10px;border-radius: 10px;background-color: pink;color: rgb(19,28,60);text-align: center;
        font-style: italic;overflow: hidden;font-size: 0.8em;float: right;font-weight:bold;}
      .buy:hover{letter-spacing: 1px;}
      .pink{font-size: 1.8em;font-weight: bold;color: rgb(255,197,189);}
      .skymint{font-size: 1.8em;font-weight: bold;color: rgb(168,213,222);}
      .coral{color: rgb(209,104,87);font-size: 0.7em;font-weight: bold;float: right;}
      .banner>li:nth-child(1){background-color: rgb(19,28,60);color: #fff;font-family:  'Poppins', sans-serif;
        font-weight: 400;width: 410px;left:38%}
      .banner>li:nth-child(2){background-color: rgb(48,48,48);font-size: 0.9em;color: #fff;}
      .banner>li:nth-child(2)> .caption{position: absolute;top:30;left:25%;width: 650px;font-size: 1em;line-height:1.9em}
      .banner>li:nth-child(3)> .caption{position: absolute;top:30;left:25%;width: 380px;font-size: 1em;font-weight: 600;}
      .banner>li:nth-child(3){background-color: rgb(12,70,82);font-size: 0.9em;color: #fff;}
      .booking{padding: 2px 15px;background-color: #222;font-size: 0.8em;float: right;}
      .prev{position:absolute;left: 5%;top:50px;width: 77px;height: 25px;filter: invert(1);cursor: pointer;}
      .next{position:absolute;right: 5%;top:50px;width: 77px;height: 25px;filter: invert(1);cursor: pointer;}
      .prev>img{width: 77px;height: 25px;transform: rotateY(180deg);}
      .next>img{width: 77px;height: 25px;}
     .nav{width: 80%;height: 38px;line-height: 38px;display: flex;}
     .logo>a>img{padding-top: 10px;}
     .menu{width: 860px;height: 38px;font-family: 'Nanum Gothic', sans-serif;;font-size:14px;font-weight: 700;}
     .menu>li{width: 120px;float: left;position: relative;text-align: center;}
     .menu>li:nth-child(1){color: rgb(117, 189, 204);}
     .submenu{z-index:10 ;background-color: #fff;margin-top:10px;position: absolute;display:none;}
     .submenu>li{text-align: center;line-height: 30px;white-space: nowrap;padding:5px;width: 120px;}
     .sns{display: flex;width: 97px;}
     .sns>li img{width: 19px;height: 19px;vertical-align:middle}
     .login{cursor: pointer;font-family: 'Poppins', sans-serif;font-weight:bold;font-size:0.9em}
</style>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
   <script src="dah.js" defer="defer"></script>

<body>
<header>
<ul class="banner">
    <li> <div class="caption"><b>뮤지엄 다 기차패키지</b> ￦52,400원 <a href="#" class="buy">BUY</a><br>
       <h2><span class="pink"> SRT</span> with <span class="skymint"> museum DAH:</span></h2>
    </div></li>
    <li><div class="caption"> museum DAH: 관람시간 <br>
        <h1>평일 10:00 - 19:00 주말 및 공휴일 10:00 - 20:00</h1>
       <span class="coral">*마감 1시간 전까지 입장 가능</span> 
    </div></li>
    <li><div class="caption"><h1>수퍼 네이처 SUPER NATURE</h1> <br>
    2020.09.12 - 2022. 02. 02  <a href="https://booking.naver.com/booking/5/bizes/378551" class="booking">예매사이트 >></a>
    </div></li>
</ul>
<div class="prev"><img src="images/next-arrow.png" alt=""></div>
<div class="next"><img src="images/next-arrow.png" alt=""></div>
</header>
<section>
  <div class="nav">
      <div class="logo"><a href="index.php"><img src="images/뮤지엄다로고_blue.jpg" alt="logo"></a></div>
      <ul class="menu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">미술관소개</a>
            <ul class="submenu">
                <li><a href="intro.php">museum DAH: 소개</a></li>
                <li><a href="artist.php">대표 작가 소개</a></li>
                <li><a href="section.php">공간 소개</a></li>
            </ul>
          </li>
          <li><a href="#">전시안내</a>
            <ul class="submenu">
                <li><a href="cur-exhi.php">현재 진행 중인 전시</a></li>
                <li><a href="next-exhi.php">예정 전시</a></li>
                <li><a href="past-exhi.php">지난 전시</a></li>
            </ul>
          </li>
          <li><a href="#">관람안내</a>
            <ul class="submenu">
                <li><a href="guide.php">관람 안내</a></li>
                <li><a href="process.php">단체관람 예약</a></li>
                <li><a href="map.php">오시는 길</a></li>
            </ul>
          </li>
          <li><a href="event.php">이벤트</a></li>
          <li><a href="board.php">게시판</a></li>
          <li><a href="support.php">제휴사안내</a></li>
      </ul>
      <ul class="sns">
          <li><a href="#"><img src="images/sns-i.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/sns-b.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/sns-f.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/sns-y.jpg" alt=""></a></li>
      </ul>
      <?php if(!isset($_SESSION["id"])){ ?>
      <div class="login">
        <a href="javascript:login()"><i class="fas fa-toggle-on"></i> log-in</a>
      </div>
          <?php }else{ ?>
      <div class="login">
        <a href="logout.php"><i class="fas fa-toggle-off"></i> log-out</a>
      </div>
           <?php } ?>
    </div>
 </section>