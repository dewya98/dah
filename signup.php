<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>부산전시| museum DAH</title>
<style>
  .jointitle{font-size:2.5em;margin:20px 0;}
  .joinsheet{margin:10px auto;text-align:center;padding:10px;
   width:475px;height:500px;background-color:rgb(240,240,240)}
  .joinsheet>img{display:block;margin:30px auto 50px;}
  .joinsheet>a{color:royalblue}
  .close{float:right;padding:0px;cursor: pointer;}
  .form{width:900px;margin:40px auto;font-size:0.9em;position: relative; }
</style>
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
</html>