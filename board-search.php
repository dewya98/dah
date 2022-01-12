<?php 
session_start();
include "conn.php";
 $sql="select * from board order by no desc limit 10";
 $rs=mysqli_query($conn,$sql);

include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  a:hover{color:royalblue}
  h4{color:rgb(117, 189, 204);text-align:center;}
  fieldset{width:100%;height: 100px;margin-top:40px;text-align:center;padding:200px 0px}

  h3{font-size:2.2em}
  .form{width:900px;margin:40px auto;font-size:0.9em;position: relative; }
  .search{text-align:right;float:right;position:relative;}
  .search>i{position:absolute;}
  input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}
  .box{width:700px;}
  .box>img{width:700px; height:700px}
  .box1{width:200px;margin-left:30px}
  input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}
  button, input[type=button]{background-color:darkcyan;outline:none;border:none;padding:7px 10px;color:#fff;
    width: 180px;}
  .logo-s{width: 600px;height:35px;display:inline;font-size:.9em;line-height:1.5em;}
  .logo-s>img{height:30px;width:40px;vertical-align:middle}
  .logo-s>i{color:#777;}
  .date{float:right;padding-top:10px}
  .box-title{font-size:1.1em;padding:10px 0;line-height:1.5em}
  .answer{width: 700px;text-align:center;height:200px;padding:40px 0;}
  button, input[type=button]{background-color:darkcyan;outline:none;border:none;padding:7px 15px;color:#fff;
    margin:40px 0 20px;cursor: pointer;}
</style>
<div class="visual"><img src="images/board.jpg" alt=""></div>
<h4>게시판</h4>
<form name="frm1" method="post" action="">
<div class="form">
  <a href="board.php"> 게시판</a> > 전체 게시판 검색
  <span class="search"><i class="xi-search"></i>
  <input type="search" name="search1" onsearch="javascript:search()">
  </span><br>
  </div>
        <?php
            $search=$_GET["search"];
            include "conn.php";
            $sql="(SELECT content, title FROM board WHERE content LIKE '%$search%' OR title LIKE '%$search%') 
            UNION
            (SELECT content, title FROM qna WHERE content LIKE '%$search%' OR title LIKE '%$search%')";            
            $rs=mysqli_query($conn,$sql);
            $total=mysqli_num_rows($rs);
            while($row=mysqli_fetch_array($rs)){ ?>
    <div class="box">
         <div class="logo-s"><img src="images/logo-s.png" alt="logo">
          museum DAH:&nbsp;<i class="xi-crown"></i>
          <span class="date"><?php echo $row["date"] ?>&emsp;
          <a href=""><i class="xi-ellipsis-v"></i></a></span>
          </div>
         <div class="box-title"><?php echo $row["title"] ?></div>
         <br>
         <pre>
         <?php echo $row["content"] ?>
        </pre>
        <br><hr><br>
         <?php } ?>
         <div class="answer">
            <?php echo $total ?>건의 데이터가 검색. <br>
           <input type="button" value="메인화면" onclick="location.href='board.php'">
        </div>
    </div>
</div>
  
<?php include "footer.php"; ?>
