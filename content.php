<?php
session_start();
$no=$_GET["no"];
include "conn.php";
$sql="update board set hit=hit+1 where no=$no";
$rs=mysqli_query($conn,$sql);
$sql="select * from board where no=$no";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);
include "header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  a:hover{color:royalblue}
  h4{color:rgb(117, 189, 204);text-align:center;}
  .form{width:960px;margin:40px auto;font-size:0.9em;position: relative;padding:0 0px }
  .sitemap{width: 900px;}
  .search{text-align:right;float:right;position:relative;}
  .search>i{position:absolute;}
  .wrap{width: 900px;display:flex;padding: 30px;}
  .box{width:700px;}
  .box>img{width:700px; height:700px}
  .sidebar{width:200px;margin-left:30px}
  input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}
  button, input[type=button]{background-color:darkcyan;outline:none;border:none;padding:7px 10px;color:#fff;
    width: 180px;}
  .logo-s{width: 600px;height:35px;display:inline;font-size:.9em;line-height:1.5em;}
  .logo-s>img{height:30px;width:40px;vertical-align:middle}
  .logo-s>i{color:#777;}
  .date{float:right;padding-top:10px}
  .box-title{font-size:1.1em;padding:10px 0;line-height:1.5em}
  .follow{text-align:center;width: 180px;border:1px solid darkcyan;margin:20px 0;padding:7px 0px;color:darkcyan}
  .reaction, .etc, .category{width: 140px;border:1px solid #ddd;margin:20px 0;padding: 20px;line-height:2em}
  .category{font-size:.9em}
  h5{font-size:1.3em;font-weight:400}
  .replyset{width: 660px;height:120px;padding: 20px;border:1px solid #ddd;display:flex ;margin-top:30px;}
  .replyset2{width: 660px;height:120px;padding: 20px;border:1px solid #ddd;display:flex 1 ;margin-top:30px;position:relative;overflow:scroll}
  .left{border-right:1px solid #ddd ;}
  .left, .right{height: 120px;width:50%;padding:0 20px;position:relative;line-height:1.8em;font-size: 0.9em;}
  .left>a, .right>a{padding:5px 35px;border:1px solid darkcyan;position:absolute;left:20px;bottom:0}
  .right>a{background-color:darkcyan;color:#fff}
  .left>a{color:darkcyan}
  .reply{text-align:left;width:100%;}
  .reply tr{font-size:0.9em;line-height:1.5em}
  form>a{font-size:0.8em;background-color:azure;color:darkcyan;padding:7px 12px;position:absolute;bottom:10px;right:10px}
  .del{font-size:0.8em;background-color:azure;color:darkcyan;padding:7px 12px;position:absolute;bottom:10px;right:90px}
  .react-icon{margin:40px 0;width:100%}
  .share{float:right}
  .heart>i{color:crimson;}
  .heart{cursor: pointer;background-color:#fff;width: 25px;}
  .hearton{color:crimson;display:none;cursor: pointer;}

</style>
<div class="visual"><img src="images/board.jpg" alt=""></div>

<h4>?????????</h4>
<div class="form">
  <div class="sitemap"><a href="board.php">?????????</a> > <a href="notice.php">???????????? ??? ?????????</a> > <?php echo $row["title"] ?> 
  <form name="frm1" method="post" action="">
  <span class="search"><i class="xi-search"></i>
  <?php $sql="select * from board order by no desc";
 $rs=mysqli_query($conn,$sql); ?>
<input type="search" name="search1" onsearch="javascript:e_search()"></span></div>
  </form><br>

  <br><hr>
 <div class="wrap">
   <div class="box">
         <div class="logo-s"><img src="images/logo-s.png" alt="logo">
            museum DAH:&nbsp;<i class="xi-crown"></i>
            <span class="date"><?php echo $row["date"] ?>&emsp;
             <a href=""><i class="xi-ellipsis-v"></i></a></span>
          </div>
         <div class="box-title"><?php echo $row["title"] ?></div>
         <br>
         <?php $fname="../fileServer/".$row["img"];?>   
         <img src="<?php echo $fname ?>">
         <br><br>
         <!-- <pre> -->
         <?php echo nl2br($row["content"]) ?>
        <!-- </pre> -->
        <div class="react-icon">
            <i class="far fa-comment-alt"></i> ??????&emsp;
            <a class="heart" id="heart"><i class="far fa-heart"></i></a>
            <a class="hearton"><i class="fas fa-heart"></i></a>
            <input type="hidden" name="no" value="<?php echo $row["no"] ?>">
            <?php echo $row["likes"] ?>
            <span class="share"><i class="fas fa-share"></i><a href=""> ??????</a></span>
        </div>
        <?php if(!isset($_SESSION["id"])){ ?>
          <div class="replyset">
            <div class="left">
                ????????? ????????????????????????? <br>
                ?????? ??? ?????? ????????? ???????????????. <br><br>
                <a href="javascript:login()">?????????</a>
              </div>
              <div class="right">
                ?????? ????????????????????????? <br>
                <small>?????? ????????? ????????????? ?????? ???????????? ????????? ??? ?????? ????????? ????????? ??? ????????????. </small> 
                <a href="javascript:signup()">????????????</a>
              </div>
              </div>
              </div>
              <?php }else{ ?>
         <div class="replyset2">
          <table class="reply">
            <?php
            $sql2="select * from board_re where arti_no=$row[no]";
            $rs2=mysqli_query($conn,$sql2);
                while($row2=mysqli_fetch_array($rs2)){ ?>
              <tr>
              <th>?????????: <?php echo $row2["id"] ?></th>
               <td>
                <?php echo $row2["content"] ?>
              </td>
              </tr>
              <?php } ?>
            </table>
              <form name="frm1" method="post" action="board_re.php">
              <a href="board_re.php?no=<?php echo $row["no"]?>" 
          onclick="window.open(this.href, '_blank', 'width=600px,height=400px,toolbars=no,scrollbars=no'); return false;">
                ?????? ??????</a></form>
              <form name="frm2" method="post" action="del.php">
                <input type="hidden" name="no" value="<?php echo $no ?>">
                <a href="javascript:del()" class="del">????????????</a>
              </form>
              <script>
                function del(){
                 var pw =prompt("??????????????? ???????????????")
             if(pw.value==''){
             alert("??????????????? ???????????????");
             return false;
             }
              document.frm2.submit();
            }
              </script>
         </div>
        </div> 
         <?php } ?>
     <div class="sidebar">
         <?php if(!isset($_SESSION["id"])){ ?>
         <button><a href="javascript:signup()">??????</a></button><br>
          <?php }else{ ?>
          <form name="frm1" method="post" action="board_re.php">
           <button>
          <a href="board_re.php?no=<?php echo $row["no"]?>" 
          onclick="window.open(this.href, '_blank', 'width=600px,height=400px,toolbars=no,scrollbars=no'); return false;">
            ??????</a>
          </button>
          </form>
         <?php } ?>
         <div class="follow"><a href=""><i class="far fa-bell"></i> ????????? ?????????</a></div>
         <div class="reaction">
         <i class="xi-eye-o"></i>&emsp;????????? <?php echo $row["hit"] ?> ??? <br>
         <i class="far fa-comment-alt"></i>&emsp;?????? 
         <?php
            $sql2="select count(*) as cnt from board_re where arti_no=$row[no]";
            $rs2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($rs2);
               echo $row2["cnt"] ?>???
         </div>
         <div class="etc">
         <h5>???????????????</h5> <br>
         <?php 
            include "conn.php";
            $sql="select * from board order by no desc limit 4";
            $rs=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($rs)){ ?><small>
            <a href="content.php?no=<?php echo $row["no"] ?>"><?php echo $row["title"] ?></a></small> <br><br>
        <?php } ?>

         </div>
         <div class="category">
             <h5>????????????</h5> <br>
            <a href="event.php">???????????? ??? ?????????</a> <br>
            <a href="article.php">????????????</a> <br>
            <a href="faq.php">FAQ</a>
         </div>
      </div>  
  </div>

</div>


<?php include "footer.php"; ?>

