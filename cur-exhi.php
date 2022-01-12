<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  .title{text-align:center;}
  .title>a:nth-child(1){color:rgb(117, 189, 204);}
  .title>a{color:#333;padding:0px 40px 50px;display:inline-block;font-size:0.9em;font-weight:700}
  content{display:flex;position: relative;width:900px;height:500px;margin:0 auto}
  .box{width:300px; height:560px;text-align:center;font-size:0.9em;line-height:2.5em}
  .box>a>img{height:310px}
</style>
<div class="visual"><img src="images/exhi.jpg" alt=""></div>
<div class="title">
<a href="cur-exhi.php">현재 진행 중인 전시</a><a href="next-exhi.php">예정 전시</a><a href="past-exhi.php">지난 전시</a>
</div>
<content>
    <div class="box">
    <a href="cur-ex1.php"><img src="images/cur-ex1.jpg" alt="">
    <h4> 수퍼 네이처 SUPER NATURE</h4></a>
        2020.09.12 - 2022.02.02
    </div>
    <div class="box">
    <a href="cur-ex2.php"><img src="images/cur-ex2.jpg" alt="">
    <h4><당신의 그토록 찬란한 정원></h4></a>
        2021.11.11 - 2021.12.12
    </div>
    <div class="box">
    <a href="cur-ex3.php"><img src="images/cur-ex3.jpg" alt="">
    <h4><치유의 화술></h4></a>
        2021.11.05 - 2021.12.26
    </div>
</content>
<?php 
include "footer.php";
?>
