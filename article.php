<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:40px;}
  .visual>img{width:100%;height:285px}
  a:hover{color:royalblue}
  h4{color:rgb(117, 189, 204);text-align:center;}
  .form{width:850px;margin:40px auto;font-size:0.9em;position: relative;padding-left: 50px; }
  .search{text-align:right;float:right;position:relative;}
  .search>i{position:absolute;}
  .search>input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}

  content{display:flex;width:900px;height:1600px;flex-wrap:wrap;}
  .box{width:300px; height:560px;text-align:center;font-size:0.9em;line-height:2.5em}
  .box>a>img{height:310px}
</style>
<div class="visual"><img src="images/event.jpg" alt=""></div>
<h4>보도자료</h4>
<div class="form">
  <a href="board.php"> 게시판</a> > 보도자료
  <span class="search"><i class="xi-search"></i><input type="search" name="search" id=""></span><br>
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
