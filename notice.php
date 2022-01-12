<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:40px;}
  .visual>img{width:100%;height:285px}
  a:hover{color:royalblue}
  h4{color:rgb(117, 189, 204);text-align:center;}
  .search{text-align:right;float:right;position:relative;}
  .search>i{position:absolute;}
  input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}
  .form{width:850px;height:60px;margin:40px auto;font-size:0.9em;position: relative;padding-left: 50px; }
  content{display:flex;width:900px;height: 1100px;;flex-wrap:wrap;}
  .box{width:28%;height:450px;padding: 20px;font-size:0.8em;border:1px solid #999;color:#333;line-height:1.5em;margin-bottom:20px}
  .logo-s{width: 140px;;height:35px;display:inline-block;font-size:0.8em;line-height:1.5em}
  .logo-s>img{height:30px;width:40px}
  .p{float:right}
  .p>i{color:#777;}
  .gray{color:#777; font-size:0.8em;}
  .box-title{font-size:1.1em;padding:10px 0;line-height:1.5em}
  .box-title>a:hover{color:royalblue}
  .boardbox{overflow:hidden;white-space:wrap;text-overflow:ellipse;width:100%;height:58px}
  .heart{float:right}
  .heart>i{color:crimson;}

</style>
<div class="visual"><img src="images/event.jpg" alt=""></div>
<h4>공지사항 및 이벤트</h4>
<div class="form">
  <form name="frm1" method="post" action="">
    <a href="board.php">게시판</a> > 공지사항 및 이벤트
  <span class="search"><i class="xi-search"></i><input type="search" name="search1" onsearch="javascript:e_search()"></span>
  </form><br>
  </div>
<content>

 <?php 
 $today=date('Y-m-d');
include "conn.php";
$sql="select * from board order by endDate desc limit 9";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs)){ ?>
  <div class="box">
    <div class="logo-s"><img src="images/logo-s.png" alt="logo">
      <div class="p"> museum DAH:&nbsp;<i class="xi-crown"></i> 
      <span class="gray"><br>
      <?php echo $row["date"] ?></span></div>
    </div>
    <div class="box-title">
      <a href="content.php?no=<?php echo $row["no"] ?>"><?php echo $row["title"] ?></a><br>
    <span class="gray"> 공지사항 및 이벤트 </span></div>
    <div class="boardbox"><?php echo ($row["content"]) ?>
    </div>
    <?php 
    if($today < $row["endDate"]){ 
       $fname="../fileServer/".$row["img"];?>   
         <img src="<?php echo $fname ?>" style="width:100%;height:250px;">
      <?php }else{
         $fname="../fileServer/".$row["img"];?>   
         <img src="<?php echo $fname ?>" style="filter:grayscale(100%);width:100%;height:250px;">
    <?php  } ?>
    <hr>
    <br>
    <i class="xi-eye-o"></i> <?php echo $row["hit"] ?> &ensp;
    <i class="far fa-comment-alt"></i>
    <?php
    $sql2="select count(*) as cnt from board_re where arti_no=$row[no]";
    $rs2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($rs2);
           echo $row2["cnt"] ?>
    <span class="heart"> <?php echo $row["likes"] ?> 개&nbsp; <i class="far fa-heart"></i></span>
   </div>
   <?php } ?>

</content>
<?php 
include "footer.php";
?>
