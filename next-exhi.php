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
</content>
<?php 
include "footer.php";
?>
