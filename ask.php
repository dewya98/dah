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
  .form{width:900px;margin:40px auto;font-size:0.9em;position: relative; }
  .search{text-align:right;float:right;position:relative;}
  .search>i{position:absolute;}
  .search>input{border:none;border-bottom:1px solid #999;outline:none;padding-left:20px;}
  input[type=text],input[type=password]{border:none;outline:none;width:75%;background-color:#ddd;padding:5px}
  table{margin-top:40px;width: 700px;}
  table tr{height: 2em;}
  table th,td{font-size: 1.1em;line-height: 2em;border-top: 1px solid #999;text-align: center;padding: 5px 15px;}      
  table th{color: rgb(36,100,171);border: 1px solid rgb(36,100,171);background-color: #eee;}
  button, input[type=button]{background-color:darkcyan;outline:none;border:none;padding:7px 15px;color:#fff;
    margin:40px 0 20px;float:right;clear:both;}
</style>
<div class="visual"><img src="images/board.jpg" alt=""></div>
<h4>FAQ</h4>
<div class="form">
  <a href="board.php"> 게시판</a> > <a href="faq.php">FAQ</a> > 질문하기

<form name="frm1" method="post" action="ask_ok.php">
    <table>
        <tr>
            <th>글제목</th>
            <td><input type="text" name="title" ></td>
        </tr>
            <tr>
            <th>작성자</th>
            <td><input type="text" name="writer"></td>
        </tr>
            <tr>
            <th>비밀번호</th>
            <td><input type="password" name="pw"></td>
        </tr>
            <tr>
            <th>내용</th>
            <td><textarea name="content"  cols="60" rows="5"></textarea></td>
        </tr>
            <tr>
                <td colspan="2" align="center"><input type="button" value="작성완료" onclick="send()"></td>
            </tr>
    </table>
</form>
</body>
</html>
<script>
    function send() {
        if(frm1.title.value==''){
            alert("제목을 입력하세요");
            frm1.title.focus();return false;
        }
        if(frm1.writer.value==''){
            alert("작성자를 입력하세요");
            frm1.writer.focus();return false;
        }
        if(frm1.pw.value==''){
            alert("비밀번호를 입력하세요");
            frm1.pw.focus();return false;
        }
        if(frm1.content.value==''){
            alert("내용을 입력하세요");
            frm1.content.focus();return false;
        }
        document.frm1.submit();
    }
</script>