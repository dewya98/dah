<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  h4{color:rgb(117, 189, 204);text-align:center;}
  .join{display:none;background-color:rgba(0,0,0,0.5);z-index: 1;position:fixed;top:0;left:0;right:0;width:100%;height:100%;} 
  .jointitle{font-size:2.5em;margin:20px 0;}
  .joinsheet{margin:200px auto;text-align:center;padding:30px 20px;
   width:475px;height:560px;background-color:rgb(240,240,240)}
  .joinsheet>img{display:block;margin:30px auto 50px;}
  .joinsheet>a{color:royalblue}
  .close{float:right;padding:0px;cursor: pointer;}
  .form{width:900px;margin:40px auto;font-size:0.9em;position: relative; }
  .search{text-align:right;float:right;position:relative;}
  .search>i{position:absolute;}
  input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}
  button, input[type=button]{background-color:darkcyan;outline:none;border:none;padding:7px 15px;color:#fff;
    margin:40px 0 20px;float:right;clear:both;}
  fieldset{width:96%;height: 60px;display:flex;border:1px solid #999;padding:20px;line-height:60px;margin-bottom:20px;}
  .title{width: 60%;line-height:1.8em;}
  .title>a{font-size:1.5em;font-weight:300;}
  .icon{width:30%;}
  .wrap{width:900px;margin:10px auto 80px;display:flex;flex-wrap:wrap;justify-content:space-between;}
  .box{width:28%;height:200px;padding: 20px;font-size:0.8em;border:1px solid #999;color:#333;line-height:1.5em}
  .logo-s{width: 140px;height:35px;display:inline-block;font-size:0.8em;line-height:1.5em}
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
<div class="visual"><img src="images/board.jpg" alt=""></div>
<div class="join">
  <form name="signup" method="post" action="">
  <div class="joinsheet">
    <div class="close"><i class="xi-close"></i></div><br>
    <div class="jointitle">가입하기</div><br>
    이미 계정이 있습니까? 
    <a href="login.php" onclick="window.open(this.href, '_blank', 'width=600px,height=500px,toolbars=no,scrollbars=no'); return false;">
      로그인</a> 
    <img src="images/join.png" alt="" >
    <input type="checkbox" name="" id="">사이트 커뮤니티에 가입합니다. 
    <a href="#">자세히 보기</a> 
  </div>
  </form>
</div>
<h4>게시판</h4>
<div class="form">
  <form name="frm1" method="post" action="">
    게시판 
  <span class="search"><i class="xi-search"></i><input type="search" name="search1" onsearch="javascript:search()"></span>
  </form><br>
  <?php if(!isset($_SESSION["id"])){ ?>
    <button>게시물 작성하기</a></button><br>
  <?php }else{ ?>
    <a href="board_add.php"><input type="button" value="게시물 작성하기">
      </input></a><br>
      <?php } ?>
    

  <fieldset>
    <div class="title">
      <a href="notice.php">공지사항 및 이벤트</a> <br>
      공지사항 및 이벤트를 확인할 수 있습니다
    </div>
    <div class="icon">
    <i class="xi-eye-o"></i>
    <?php 
include "conn.php";
$sql="select sum(hit) as hits, hit from board";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);
$hits=$row["hits"];
    echo $hits ?> 
    &emsp;
    <i class="far fa-comment-alt"></i> 
    <?php 
    $sql="select * from board_re";
    $rs=mysqli_query($conn,$sql);
    $cnt=mysqli_num_rows($rs);
    echo $cnt?>
    </div>
    <a href="#">팔로우</a>
  </fieldset>

  <fieldset>
    <div class="title">
      <a href="article.php">보도자료</a> <br>
      뮤지엄 다:의 보도자료를 확인할 수 있습니다.
    </div>
    <div class="icon">
    <i class="xi-eye-o"></i>
    <?php 
$sql="select sum(hit) as hits, hit from board";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);
    echo $row["hits"] ?> &emsp;
    <i class="far fa-comment-alt"></i>
    <?php 
    $sql="select * from board_re";
    $rs=mysqli_query($conn,$sql);
    $cnt=mysqli_num_rows($rs);
    echo $cnt?>
    </div>
    <a href="#">팔로우</a>
  </fieldset>
  <fieldset>
    <div class="title">
      <a href="faq.php">FAQ</a> <br>
      뮤지엄 다:의 궁금한 점을 알려주세요!
    </div>
    <div class="icon">
    <i class="xi-eye-o"></i>
    <?php 
$sql="select sum(hit) as hits, hit from qna";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);
$hit=$row["hits"];
    echo $hit ?> 
    &emsp;
    <i class="far fa-comment-alt"></i> 
    <?php 
    $sql="select * from qna";
    $rs=mysqli_query($conn,$sql);
    $cnt=mysqli_num_rows($rs);
    echo $cnt?>
    </div>
    <a href="#">팔로우</a>
  </fieldset>
  <br>
  신규 게시물
</div>
<div class="wrap">
  <?php 
$sql="select * from board order by no desc limit 3";
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
    <hr>
    <br>
    <i class="far fa-comment-alt"></i>
    <?php
    $sql2="select count(*) as cnt from board_re where arti_no=$row[no]";
    $rs2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($rs2);
           echo $row2["cnt"] ?>
    <span class="heart"> <?php echo $row["likes"] ?> 개&nbsp; <i class="far fa-heart"></i></span>
   </div>
   <?php } ?>

</div>
  
<?php 
include "footer.php";
?>
