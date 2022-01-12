<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  .title{text-align:center;}
  .title>a:nth-child(3){color:rgb(117, 189, 204);}
  .title>a{color:#333;padding:0px 40px 50px;display:inline-block;font-size:0.9em;font-weight:700}
  content{width:80%;height:650px;position: relative;}
  .floor{position:absolute;top:30px;left:440px;z-index: 1;width:120px;}
  .floor>li{font-size:0.8em;width:80px;text-align:center;border-radius:15px;display:block;
    background-color:#eee;font-weight:bold;padding:5px 12px;cursor: pointer;}
  .floor>li:nth-child(1){background-color:rgb(254,230,170)}
  .floor>li:nth-child(2):hover{background-color:rgb(117,189,204)}
  .floor-map>img{display:block;}
  .floor-map>img:nth-child(2){display:none;}
  h3{font-size:1.4em}
  h5{font-size:1em}
</style>
<div class="visual"><img src="images/intro.jpg" alt=""></div>
<div class="title">
<a href="intro.php">museum DAH: 소개  </a><a href="artist.php">대표 작가 소개</a><a href="section.php">공간 소개</a>
</div>
<content>
    <ul class="floor">
       <li>1st FLOOR</li>
       <li>2nd FLOOR</li>
    </ul>
    <div class="floor-map">
        <img src="images/section.png" alt="">
        <img src="images/section2.png" alt="">
    </div>
</content>
<?php 
include "footer.php";
?>
