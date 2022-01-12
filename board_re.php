<?php
session_start();
$no=$_GET["no"];
include "conn.php";
$sql="select * from board where no=$no";
$rs=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($rs);
?>

<style>
    body{background-color: #00DBDE;
    background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
    }
    form{width: 480px;height: 280px;border-radius:20px;padding:30px;margin: 30px;
        backdrop-filter: blur(5px);background-color:rgba(255,255,255,0.5) ;
     box-shadow:1px 1px 0 rgba(255,255,255,0.5)}
    td{color:royalblue;}
    th{font-weight:bold;color:dodgerblue}
    textarea, input[type=password], input[type=text]
    {outline:none;border:none;background-color:rgba(255,255,255,0.6);font-size:1.4em;}
    input[type=text]{background:none}
    input[type=reset], input[type=button]
    {padding:5px 12px;border:none;background-color:royalblue;color:#fff;border-radius:10px;font-weight:bold;
        cursor: pointer;margin-top:20px}
</style>
<html>

<body>
    <form name="frm1" method="post" action="board_re_ok.php">
    <table>
            <tr>
            <th>아이디</th>
            <td><input type="text" name="id" id="" value="<?php echo $_SESSION["id"] ?>" readonly></td>
            <tr>
            <th>비밀번호</th>
            <td><input type="password" name="pw"></td>
        </tr>
            <tr>
            <th>내용</th>
            <td><textarea name="content"  cols="40" rows="8"></textarea></td>
        </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="hidden" name="no" value="<?php echo $row["no"] ?>">
            <input type="reset" value="새로고침">    <input type="button" value="작성완료" onclick="send()"></td>
            </tr>
            
    </table>
  </form>
</body>
</html>
<script>
    function send() {
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