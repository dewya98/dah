<?php
session_start();
$id=$_POST["id"];
$arti_no=$_POST["no"];
$date=date("Y-m-d");
$pw=$_POST["pw"];
$content=$_POST["content"];
include "conn.php";
$sql="insert into board_re(id,content,arti_no,pw,date) 
      values('$id','$content','$arti_no','$pw','$date')";
mysqli_query($conn,$sql);
echo "댓글등록완료";
?>
<meta http-equiv="refresh" content="0;url=content.php">

