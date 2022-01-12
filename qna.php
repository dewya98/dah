<?php
session_start();
$no=$_GET["no"];
include "conn.php";
$sql="update qna set hit=hit+1 where no=$no";
$rs=mysqli_query($conn,$sql);
$sql="select * from qna where no=$no";
$rs=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($rs);

include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  a:hover{color:royalblue}
  h4{color:rgb(117, 189, 204);text-align:center;}
  .form{width:900px;margin:40px auto;font-size:0.9em;position: relative; }
  .search{text-align:right;float:right;position:relative;}
  .search>i{position:absolute;}
  .search>input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}
  input[type=text],input[type=password]{border:none;outline:none;width:25%;background-color:#ddd;padding:5px}
  table{margin-top:40px;width: 700px;}
  table tr{height: 2em;}
  table th,td{font-size: 1.1em;line-height: 2em;border-top: 1px solid #999;text-align: center;padding: 5px 15px;}      
  table th{color: rgb(36,100,171);border: 1px solid rgb(36,100,171);background-color: #eee;}
  button, input[type=button]{background-color:darkcyan;outline:none;border:none;padding:7px 15px;color:#fff;}
</style>
<div class="visual"><img src="images/board.jpg" alt=""></div>
<h4>FAQ</h4>
<div class="form">
  <a href="board.php"> 게시판</a> > <a href="faq.php">FAQ</a> > 질문보기
  <span class="search"><i class="xi-search"></i><input type="search" name="search" id=""></span><br>
    <table>
        <tr>
            <th>글제목</th>
            <td><?php echo $row["title"] ?></td>
        </tr>
            <tr>
            <th>작성자</th>
            <td><?php echo $row["writer"] ?></td>
        </tr>
            <tr>
            <th>작성일</th>
            <td><?php echo $row["writeday"] ?></td>
        </tr>
            <tr>
            <th>내용</th>
            <td><?php echo nl2br($row["content"]) ?></td>
        </tr>
        <?php $sql="select * from qna_re where q_no=$no";
        $rs2=mysqli_query($conn,$sql);
        while($row2=mysqli_fetch_array($rs2)){ ?>
        
        <tr>
            <th>답변보기</th>
            <td>
        <?php echo $row2["content"] ?>
            </td>
        </tr>
        <?php } ?>

        <form name="frm1" method="post">
            <tr>
                <th>답변하기</th>
                <td><textarea name="content_re" cols="60" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="hidden" name="no" value="<?php echo $row["no"] ?>">
                <input type="button" value="Q&A가기" onclick="location.href='faq.php'">
                <input type="button" value="답변하기" onclick="send1()">
               </td>
            </tr>
            </form>
            <form name="frm2" method="post">
            <tr>
                <td colspan="2" align="center">
                    <input type="hidden" name="no" value="<?php echo $no ?>">
                    비밀번호 <input type="password" name="pw">
                    <input type="button" value="질문삭제" onclick="del()">
                </td>
            </tr>
        </form>

    </table>
</body>
</html>
<script>
function send1() {
if(frm1.content_re.value==''){
    alert("답변을 입력하세요");
    frm1.content_re.focus();return false;
}
    
document.frm1.action="answer.php";
document.frm1.submit();
}

function del(){
    if(frm2.pw.value==''){
        alert("비밀번호를 입력하세요");
        frm2.pw.focus();return false;
    }
    document.frm2.action="mydel.php";
    document.frm2.submit();
}
</script>
