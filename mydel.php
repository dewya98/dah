<?php
$no=$_POST["no"];
$pw=$_POST["pw"];
include "conn.php";
$sql="select * from qna where pw='$pw'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);
if(mysqli_num_rows($rs)){
  $sqlDel="delete from qna where no='$no'"; 
  mysqli_query($conn,$sqlDel);
  echo "<meta http-equiv='refresh' content='0;url=faq.php'>"; 
}else{ ?>
<script>
    alert("비밀번호 오류");
    history.back();
</script>
 <?php } ?>
 ?>