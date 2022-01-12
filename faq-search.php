<?php 
session_start();
include "conn.php";
 $sql="select * from qna order by no desc limit 15";
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

  table{margin-top:40px;width: 700px;}
  table tr{height: 2em;}
  table th,td{font-size: 1.1em;line-height: 2em;border-top: 1px solid #999;text-align: center;padding: 5px 15px;}      
  table th{color: rgb(36,100,171);border-top: 3px solid rgb(36,100,171);background-color: #eee;}
  button, input[type=button]{background-color:darkcyan;outline:none;border:none;padding:7px 15px;color:#fff;
    margin:40px 0 20px;cursor: pointer;}
</style>
<div class="visual"><img src="images/board.jpg" alt=""></div>
<h4>FAQ</h4>
<div class="form">
  <a href="board.php"> 게시판</a> > FAQ
  <span class="search"><i class="xi-search"></i>
  <input type="search" name="search1">
</span><br>
  <table>
        <tr>
            <th>글번호</th>
            <th>글제목</th>
            <th>작성자</th>
            <th>작성일</th>
            <th>내용</th>
        </tr>
        <?php
            $search=$_GET["search"];
            include "conn.php";
            $sql="select * from qna where title like '%$search%' union select * from qna where content like '%$search%'" ;
            $rs=mysqli_query($conn,$sql);
            $total=mysqli_num_rows($rs);
            while($row=mysqli_fetch_array($rs)){ ?>
            <tr>
                <td><?php echo $row["no"] ?></td>
                <td><a href="qna.php?no=<?php echo $row["no"] ?>"><?php echo $row["title"] ?></a></td>
                <td><?php echo $row["writer"] ?></td>
                <td><?php echo $row["writeday"] ?></td>
                <td><?php echo $row["content"] ?></td>
            </tr>
               <?php } ?>
               <tr>
                   <td colspan="5" align="center"><?php echo $total ?>건의 데이터가 검색.</td>
               </tr>
               <tr>
                   <td colspan="5" align="center"><input type="button" value="메인화면" onclick="location.href='faq.php'"></td>
               </tr>
    </table>
</div>
  
<?php include "footer.php"; ?>
